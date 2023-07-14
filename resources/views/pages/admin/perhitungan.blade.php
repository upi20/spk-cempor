@extends('layouts.admin.rockeradmin.master')

@section('content')
    {{-- SAW --}}
    <div class="card radius-10 border-start border-0 border-4 border-primary mt-4">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <h6 class="my-1 text-primary">
                        Perhitungan dengan metode simple additive weighting (SAW)
                    </h6>
                </div>
            </div>
        </div>
    </div>

    @php
        $index = 0;
        $datas = $saw[$index++];
    @endphp
    <div class="card card-primary card-outline mt-4">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h6 class="card-title">Tabel alternatif</h6>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td class="fw-bold">Kriteria</td>
                    @foreach ($datas['header'] as $k)
                        <td>
                            {{ $k['nama'] }}
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td class="fw-bold">Bobot</td>
                    @foreach ($datas['header'] as $k)
                        <td title="{{ $k['bobot'] }} / 100%" data-toggle="tooltip">
                            {{ $k['bobot'] / 100 }}
                        </td>
                    @endforeach
                </tr>
            </table>
        </div>
    </div>

    <div class="card card-primary card-outline mt-4">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h6 class="card-title">1. Tabel alternatif</h6>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        @foreach ($datas['header'] as $header)
                            <th title="{{ $header['bobot'] }}" data-toggle="tooltip">
                                {{ $header['nama'] }} ({{ $header['kode'] }})
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas['body'] as $k => $body)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $body['nama'] }}</td>
                            @foreach ($body['nilais'] as $nilai)
                                @if ($nilai != null)
                                    <td>
                                        {{ $nilai['nilai'] }}
                                    </td>
                                @else
                                    <td title="Data Tidak Valid" data-toggle="tooltip"></td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>MAX</th>
                        @foreach ($datas['maxs'] as $max)
                            <th>
                                {{ $max }}
                            </th>
                        @endforeach
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    @php $datas = $saw[$index++]; @endphp
    <div class="card card-primary card-outline mt-4">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h6 class="card-title">2. Dibagi nilai tertinggi</h6>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        @foreach ($datas['header'] as $header)
                            <th title="{{ $header['bobot'] }}" data-toggle="tooltip">
                                {{ $header['nama'] }} ({{ $header['kode'] }})
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas['body'] as $k => $body)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $body['nama'] }}</td>
                            @foreach ($body['nilais'] as $nilai)
                                @if ($nilai != null)
                                    <td title="{{ $nilai['nilai_str'] }}" data-toggle="tooltip">
                                        {{ $nilai['nilai'] }}
                                    </td>
                                @else
                                    <td title="Data Tidak Valid" data-toggle="tooltip"></td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @php $datas = $saw[$index++]; @endphp
    <div class="card card-primary card-outline mt-4">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h6 class="card-title">3. Dikali Bobot Kriteria</h6>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        @foreach ($datas['header'] as $header)
                            <th title="{{ $header['bobot'] }} / 100" data-toggle="tooltip">
                                {{ $header['nama'] }} ({{ $header['kode'] }})
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas['body'] as $k => $body)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $body['nama'] }}</td>
                            @foreach ($body['nilais'] as $nilai)
                                @if ($nilai != null)
                                    <td title="{{ $nilai['nilai_str'] }}" data-toggle="tooltip">
                                        {{ $nilai['nilai'] }}
                                    </td>
                                @else
                                    <td title="Data Tidak Valid" data-toggle="tooltip"></td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @php $datas = $saw[$index++]; @endphp
    <div class="card card-primary card-outline mt-4">
        <div class="card-header">
            <h6 class="card-title">4. Dijumlahkan untuk mendapatkan hasil</h6>
            <small>Nilai dari setiap alternatif di jumlahkan kemudian hasilnya di buat ranking</small>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        @foreach ($datas['header'] as $header)
                            <th title="{{ $header['bobot'] }} / 100" data-toggle="tooltip">
                                {{ $header['nama'] }} ({{ $header['kode'] }})
                            </th>
                        @endforeach
                        <th>Total</th>
                        <th>Peringkat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas['body'] as $k => $body)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $body['nama'] }}</td>
                            @foreach ($body['nilais'] as $nilai)
                                @if ($nilai != null)
                                    <td title="{{ $nilai['nilai_str'] }}" data-toggle="tooltip">
                                        {{ $nilai['nilai'] }}
                                    </td>
                                @else
                                    <td title="Data Tidak Valid" data-toggle="tooltip"></td>
                                @endif
                            @endforeach
                            <td title="{{ $body['total_str'] }}" data-toggle="tooltip">
                                {{ $body['total'] }}
                            </td>
                            <td>{{ $body['rank'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    {{-- WP --}}
    <div class="card radius-10 border-start border-0 border-4 border-primary mt-4">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <h6 class="my-1 text-primary">
                        Perhitungan dengan metode weight product (WP)
                    </h6>
                </div>
            </div>
        </div>
    </div>

    @php
        $index = 0;
        $datas = $wp[$index++];
    @endphp
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">1. Membuat matriks keputusan</h6>
                </div>
            </div>
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        @foreach ($datas['header'] as $header)
                            <th title="{{ $header['bobot'] }}" data-toggle="tooltip">
                                {{ $header['nama'] }} ({{ $header['kode'] }})
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas['body'] as $k => $body)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $body['nama'] }}</td>
                            @foreach ($body['nilais'] as $nilai)
                                @if ($nilai != null)
                                    <td>
                                        {{ $nilai['nilai'] }}
                                    </td>
                                @else
                                    <td title="Data Tidak Valid" data-toggle="tooltip"></td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @php $datas = $wp[$index++]; @endphp
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">2. Nilai asli kriteria di pangkat bobot kriteria </h6>
                </div>
            </div>
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        @foreach ($datas['header'] as $header)
                            <th title="{{ $header['bobot'] }}" data-toggle="tooltip">
                                {{ $header['nama'] }} ({{ $header['kode'] }})
                            </th>
                        @endforeach
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas['body'] as $k => $b)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $b['nama'] }}</td>
                            @foreach ($b['nilais'] as $k => $v)
                                <td data-toggle="tooltip" title="{{ $v['nilai_str'] }}">
                                    {{ $v['nilai'] }}
                                </td>
                            @endforeach
                            <td data-toggle="tooltip" title="{{ $b['total_str'] }}">
                                {{ $b['total'] }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th colspan="{{ count($datas['header']) }}">Total</th>
                        <th>{{ $datas['total'] }}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    @php $datas = $wp[$index++]; @endphp
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">
                        3. Nilai vektor dibagi Jumlah total
                    </h6>
                    <small>Nilai vektor jumlah per alternatif dibagi Jumlah total kemudian hasilnya di buat
                        ranking
                    </small>
                </div>
            </div>
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Total</th>
                        <th>Peringkat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas['body'] as $k => $b)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $b['nama'] }}</td>
                            <td data-toggle="tooltip" title="{{ $b['total_str'] }}">
                                {{ $b['total'] }}
                            </td>
                            <td>{{ $b['rank'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('stylesheet')
    <link rel="stylesheet"
        href="{{ asset_admin('plugins/datatable/css/dataTables.bootstrap5.min.css', name: 'rockeradmin') }}" />
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/datatable/js/jquery.dataTables.min.js', name: 'rockeradmin') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/js/dataTables.bootstrap5.min.js', name: 'rockeradmin') }}"></script>
    <script src="{{ asset_admin('plugins/loading/loadingoverlay.min.js', name: 'sash') }}"></script>
    @php
        $resource = resource_loader(blade_path: $view);
    @endphp
    <script>
        $(document).ready(() => {
            $('.datatable').each((i, e) => {
                const table_html = $(e);
                const new_table = $(e).DataTable({
                    scrollX: true,
                    language: {
                        url: datatable_indonesia_language_url
                    },
                    columnDefs: [{
                        orderable: false,
                        targets: [0]
                    }],
                });

                new_table.on('draw.dt', function() {
                    tooltip_refresh();
                    var PageInfo = table_html.DataTable().page.info();
                    new_table.column(0, {
                        page: 'current'
                    }).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1 + PageInfo.start;
                    });
                });
            });
        })
    </script>
@endsection
