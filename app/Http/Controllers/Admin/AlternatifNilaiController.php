<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AlternatifNilai;
use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Config\Exception\ValidationException;

class AlternatifNilaiController extends Controller
{
    private $validate_model = [
        'id' => ['required', 'integer'],
    ];

    public function index(Request $request)
    {
        $page_attr = adminBreadcumb(h_prefix());

        $view = path_view('pages.admin.alternatif.nilai');
        $data = compact('page_attr', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function update(Request $request): mixed
    {
        try {
            DB::beginTransaction();

            $model = Alternatif::findOrFail($request->id);
            $model->nama = $request->nama;
            $model->nopeserta = $request->nopeserta;
            $model->save();

            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));

            // hapus semua nilai
            AlternatifNilai::where('alternatif_id', $model->id)->delete();

            // masukan nilai nya
            foreach ($request->nilais as $kriteria_id => $nilai) {
                $new_nilai = new AlternatifNilai();
                $new_nilai->kriteria_id = $kriteria_id;
                $new_nilai->alternatif_id = $model->id;
                $new_nilai->nilai = $nilai;
                $new_nilai->save();
            }

            DB::commit();

            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function insert(Request $request): mixed
    {
        try {
            DB::beginTransaction();
            $model = new Alternatif();
            $model->nama = $request->nama;
            $model->nopeserta = $request->nopeserta;
            $model->save();

            // masukan nilai nya
            foreach ($request->nilais as $kriteria_id => $nilai) {
                $new_nilai = new AlternatifNilai();
                $new_nilai->kriteria_id = $kriteria_id;
                $new_nilai->alternatif_id = $model->id;
                $new_nilai->nilai = $nilai;
                $new_nilai->save();
            }
            DB::commit();

            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(Alternatif $model): mixed
    {
        try {
            $model->delete();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function find(Request $request)
    {
        $alternatif = Alternatif::findOrFail($request->id);
        return AlternatifNilai::getEdit($alternatif);
    }

    public function datatable(Request $request)
    {
        return AlternatifNilai::datatable($request);
    }

    public function kriteria()
    {
        return Kriteria::orderBy('kode')->get();
    }
}
