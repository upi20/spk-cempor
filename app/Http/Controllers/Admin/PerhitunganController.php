<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AlternatifNilai;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function index(Request $request)
    {
        $saw = $this->saw($request);
        $page_attr = adminBreadcumb(h_prefix());
        $view = path_view('pages.admin.perhitungan');
        $data = compact('page_attr', 'view', 'saw');
        $data['compact'] = $data;

        return view($view, $data);
    }

    public function saw($request)
    {
        $index = 0;

        // 1 tabel alternatif //===================================================================
        $datatable = AlternatifNilai::datatable($request);
        $datatable = json_encode($datatable);
        $datatable = json_decode($datatable, true);

        // 1.1. Mengambil nilai max dari tiap2 tahapan
        // data max
        $maxs = [];
        foreach ($datatable['header'] as $i => $h) $maxs[$i] = 0;

        foreach ($datatable['body'] as $b) {
            foreach ($b['nilais'] as $i => $n) {
                $nilai = $n == null ? 0 : $n['nilai'];
                $maxs[$i] = $maxs[$i] > $nilai ? $maxs[$i] : $nilai;
            }
        }

        $datatable['maxs'] = $maxs;
        $hitung[$index++] = $datatable;


        // 2. Dibagi nilai tertinggi //============================================================
        $nilai_tertinggi_body = [];
        foreach ($hitung[$index - 1]['body'] as $body) {
            $nilais = [];
            foreach ($body['nilais'] as $i => $n) {
                if ($n == null) {
                    $nilais[] = null;
                } else {
                    $max = $hitung[$index - 1]['maxs'][$i];
                    $nilai = $n['nilai'];
                    $n['nilai'] = $max == 0 ? 0 : ($nilai / $max);
                    $n['nilai_str'] = "{$nilai}/{$max}";
                    $nilais[] = $n;
                }
            }

            $body['nilais'] = $nilais;
            $nilai_tertinggi_body[] = $body;
        }

        $datatable['body'] = $nilai_tertinggi_body;
        $hitung[$index++] = $datatable;

        // 3. Dikali bobot kriteria //==============================================================
        $bobot_tahapan = [];
        foreach ($hitung[$index - 1]['body'] as $body) {
            $nilais = [];
            $total = 0;
            $total_str = "";
            foreach ($body['nilais'] as $i => $n) {
                if ($n == null) {
                    $nilais[] = null;
                } else {
                    $bobot = $hitung[$index - 1]['header'][$i]['bobot'] / 100;
                    $nilai = $n['nilai'];
                    $n['nilai'] = $nilai * $bobot;
                    $n['nilai_str'] = "{$nilai}*{$bobot}";
                    $nilais[] = $n;

                    $nilai = $n['nilai'];
                    $total += $nilai;
                    $total_str .= (($total_str == '' ? '' : ' + ') . $nilai);
                }
            }

            $body['total'] = $total;
            $body['total_str'] = $total_str;
            $body['nilais'] = $nilais;
            $bobot_tahapan[] = $body;
        }

        $datatable['body'] = $bobot_tahapan;
        $hitung[$index++] = $datatable;

        // 4. sortir by rank
        $collects = collect($datatable['body'])->sortByDesc('total')->values()->all();
        $sorts = [];
        foreach ($collects as $k => $v) {
            $v['rank'] = $k + 1;
            $sorts[] = $v;
        }
        $datatable['body'] = $sorts;

        $hitung[$index++] = $datatable;

        // 5. 20 lolos
        $kurnagi = [];
        foreach ($sorts as $k => $v) {
            if ($k > 19) continue;
            $kurnagi[] = $v;
        }

        $datatable['body'] = $kurnagi;
        $hitung[$index++] = $datatable;

        return $hitung;
    }

    public function wp($request)
    {
        $index = 0;

        // 1 tabel alternatif //===================================================================
        $datatable = AlternatifNilai::datatable($request);
        $datatable = json_encode($datatable);
        $datatable = json_decode($datatable, true);

        $hitung[$index++] = $datatable;


        // 2. Nilai asli tahapan di pangkat bobot tahapan //=======================================
        $pangkat_body = [];
        $nilai_total = 0;
        foreach ($hitung[$index - 1]['body'] as $body) {
            $total = 0;
            $total_str = "";

            foreach ($hitung[$index - 1]['header'] as $i => $header) {
                $bobot = $header['bobot'] / 100;
                $nilai = is_null($body['nilais'][$i]) ? 0 : $body['nilais'][$i]['nilai'];
                $pangkat = pow($nilai, $bobot);

                // jadi
                $body['nilais'][$i]["nilai_str"] = "{$nilai}^{$bobot}";
                $body['nilais'][$i]["nilai"] = $pangkat;

                // total
                $total_str .= (($total_str == "" ? "" : " * ") . $pangkat);
                $total = ($total == 0) ? $pangkat : ($total * $pangkat);
            }
            $body['total'] = $total;
            $body['total_str'] = $total_str;
            $pangkat_body[] = $body;
            $nilai_total += $total;
        }
        $pangkat = $hitung[$index - 1];
        $pangkat['body'] = $pangkat_body;
        $pangkat['total'] = $nilai_total;
        $hitung[$index++] = $pangkat;

        // 3. Nilai vektor s per nomor peserta  dibagi  Jumlah seluruh nilai vektor S //==============================================================
        $bobot_body = [];
        foreach ($hitung[$index - 1]['body'] as $body) {
            $nilai_total = $hitung[$index - 1]['total'];
            $nilai = $body['total'];

            $body['total'] = $nilai_total == 0 ? 0 : ($nilai / $nilai_total);
            $body['total_str'] = "{$nilai}/{$nilai_total}";
            $bobot_body[] = $body;
        }

        // 4. sortir by rank
        $collects = collect($bobot_body)->sortByDesc('total')->values()->all();
        $results = [];
        foreach ($collects as $k => $v) {
            $v['rank'] = $k + 1;
            $results[] = $v;
        }

        $sort = $hitung[$index - 1];
        $sort['body'] =  $results;
        $hitung[$index++] = $sort;

        // 5. sortir by rank
        $kurnagi = [];
        foreach ($results as $k => $v) {
            $kurnagi[] = $v;
            if ($k > 20) continue;
        }

        $new['body'] = $kurnagi;
        $hitung[$index++] = $new;

        return $hitung;
    }
}
