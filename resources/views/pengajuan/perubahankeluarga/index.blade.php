@extends('layout.layout', ['isForm' => false])
@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endpush

@section('content')
    {{-- canEdit = if RW => False, RT => False --}}
    {{-- @include('layout.tableset',['pageTitle' => 'Daftar Penduduk',  'canEdit' => true, 'topMenu' => [
        ['title' => 'Warga', 'url' => '#'],
        ['title' => 'Keluarga', 'url' => '#'],
    ], ] ) --}}

    <div class="tw-pt-[100px] tw-px-5 tw-w-full tw-flex tw-flex-col tw-gap-2 tw-pb-10">
        <div class="tw-flex tw-items-center md:tw-items-start tw-justify-start">
            <h1 class="tw-h1 tw-w-1/2">
                Daftar Pengajuan
            </h1>

        </div>
        <div class="tw-flex tw-flex-col tw-gap-4">
            <div class="tw-flex">
                <a href="{{ route('dataBaru') }}"
                    class="tw-flex tw-w-fit tw-justify-center tw-items-center tw-h-8 tw-px-2 {{ Route::currentRouteName() == 'dataBaru' ? 'tw-border-b-2 tw-border-b500' : 'tw-border-b-[1px] tw-border-n400 tw-top-menu-text tw-text-n600 hover:tw-text-n700' }} tw-top-menu-text">
                    Data Baru
                </a>
                <a href="{{ route('perubahanWarga') }}"
                    class="tw-flex tw-w-fit tw-justify-center tw-items-center tw-h-8 tw-px-2 {{ Route::currentRouteName() == 'perubahanWarga' ? 'tw-border-b-2 tw-border-b500' : 'tw-border-b-[1px] tw-border-n400 tw-top-menu-text tw-text-n600 hover:tw-text-n700' }} tw-top-menu-text">
                    <span class="tw-hidden md:tw-inline">Perubahan&nbsp;</span>Warga
                </a>
                <a href="{{ route('perubahanKeluarga') }}"
                    class="tw-flex tw-w-fit tw-justify-center tw-items-center tw-h-8 tw-px-2 {{ Route::currentRouteName() == 'perubahanKeluarga' ? 'tw-border-b-2 tw-border-b500' : 'tw-border-b-[1px] tw-border-n400 tw-top-menu-text tw-text-n600 hover:tw-text-n700' }} tw-top-menu-text">
                    <span class="tw-hidden md:tw-inline">Perubahan&nbsp;</span>Keluarga
                </a>
                <div
                    class="tw-flex tw-justify-center tw-items-center tw-h-8 tw-flex-grow tw-border-b-[1px] tw-border-n400 tw-top-menu-text tw-text-n600">
                </div>
            </div>

            <div class="tw-flex tw-flex-col tw-gap-3">
                {{-- Start: Tool Bar --}}
                <div class="tw-flex tw-gap-2 tw-w-full">
                    @if (Auth::user()->hasLevel['level_kode'] == 'RW')
                        <button
                            class="tw-relative tw-h-11 tw-pr-8 tw-pl-3 tw-bg-n100 tw-border-[1.5px] tw-border-n400 tw-font-sans tw-font-bold tw-text-base tw-rounded-lg hover:tw-border-n800 hover:tw-bg-n200 active:tw-bg-n100 focus:tw-border-b500 focus:tw-border-2"
                            type="button">
                            <span class="tw-placeholder">
                                Semua
                            </span>
                            <span
                                class="tw-absolute tw-top-1/2 -tw-translate-y-1/2 tw-right-2 tw-flex tw-items-center  tw-cursor-pointer">
                                <img class="tw-w-5 tw-bg-cover"
                                    src="{{ asset('assets/icons/actionable/arrow-down-1.svg') }}" alt="back">
                            </span>
                        </button>
                    @endif
                    <button
                        class="tw-relative tw-h-11 tw-pl-8 tw-pr-3 tw-bg-n100 tw-border-[1.5px] tw-border-n400 tw-font-sans tw-font-bold tw-text-base tw-rounded-lg hover:tw-border-n800 hover:tw-bg-n200 active:tw-bg-n100 focus:tw-border-b500 focus:tw-border-2"
                        type="button">
                        <span
                            class="tw-absolute tw-top-1/2 -tw-translate-y-1/2 tw-left-2 tw-flex tw-items-center  tw-cursor-pointer">
                            <img class="tw-w-5 tw-bg-cover" src="{{ asset('assets/icons/actionable/filter.svg') }}"
                                alt="back">
                        </span>
                        <span class="tw-placeholder">
                            Filter
                        </span>
                    </button>
                    <div class="tw-relative tw-flex tw-w-full tw-grid-rows-3">
                        <input type="text" placeholder="Cari"
                            class="tw-input-enabled md:tw-w-80 tw-h-11 tw-pl-8 tw-pr-3 tw-bg-n100 tw-border-[1.5px]"
                            type="button">
                        </input>
                        <span
                            class="tw-absolute tw-top-1/2 -tw-translate-y-1/2 tw-left-2 tw-flex tw-items-center tw-cursor-pointer">
                            <img class="tw-w-5 tw-bg-cover" src="{{ asset('assets/icons/actionable/search.svg') }}"
                                alt="back">
                        </span>
                    </div>
                </div>
                {{-- End: Tool Bar --}}

                {{-- Start: Table HERE --}}
                <div class="tw-w-vw tw-overflow-x-scroll">

                    <table class="tw-w-[780px] md:tw-w-full" id="tableKeluargaModified">
                        <thead>
                            <tr class="tw-h-11 tw-bg-n300 tw-rounded-lg">
                                <th>No</th>
                                <th>Pengaju</th>
                                <th>No KK</th>
                                <th>Kepala Keluarga</th>
                                <th class="tw-hidden md:tw-flex tw-h-11 tw-grow tw-items-center">Tanggal</th>
                                <th>Status Pengajuan</th>
                                <th class="tw-w-[108px]"></th>
                            </tr>
                        </thead>
                        {{-- <tbody class="tw-divide-y-2 tw-divide-n400">
                            <tr class="tw-h-16 hover:tw-bg-n300">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="tw-hidden md:tw-flex tw-min-h-full tw-grow tw-items-center"></td>
                                <td>
                                    @include('components.form.label', ['content' => 'VALUE HERE'])
                                </td>
                                <td class="tw-w-[108px] tw-h-16 tw-flex tw-items-center tw-justify-center">
                                    <a href=""
                                        class="tw-h-10 tw-px-4 tw-bg-b500 tw-text-n100 tw-font-sans tw-font-bold tw-text-[14px] tw-rounded-md hover:tw-bg-b600 active:tw-bg-b700 tw-flex tw-items-center">
                                        Detail
                                    </a>
                                </td>
                            </tr>
                        </tbody> --}}
                    </table>

                    <div>

                    </div>

                </div>
                {{-- End: Table HERE --}}
                <div
                    class="tw-flex tw-border-[1.5px] tw-divide-x-[1.5px] tw-border-n400 tw-divide-n400 tw-w-fit tw-rounded-lg">
                    <a class="tw-h-7 tw-w-7 tw-flex tw-items-center tw-justify-center hover:tw-bg-n300" href="">
                        <img class="tw-h-5 tw-bg-cover" src="{{ asset('assets/icons/actionable/arrow-left-1.svg') }}"
                            alt="<">
                    </a>
                    <a class="tw-h-7 tw-w-7 tw-flex tw-items-center tw-justify-center hover:tw-bg-n300 tw-bg-n400"
                        href="">
                        1
                    </a>
                    <a class="tw-h-7 tw-w-7 tw-flex tw-items-center tw-justify-center hover:tw-bg-n300" href="">
                        2
                    </a>
                    <a class="tw-h-7 tw-w-7 tw-flex tw-items-center tw-justify-center hover:tw-bg-n300" href="">
                        ...
                    </a>
                    <a class="tw-h-7 tw-w-7 tw-flex tw-items-center tw-justify-center hover:tw-bg-n300" href="">
                        <img class="tw-h-5 tw-bg-cover" src="{{ asset('assets/icons/actionable/arrow-right-1.svg') }}"
                            alt="<">
                    </a>
                </div>

            </div>
        </div>
    @endsection
    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                var dataUser = $('#tableKeluargaModified').DataTable({
                    serverSide: true,
                    ajax: {
                        "url": "{{ url('pengajuan/perubahan-keluarga') }}",
                        "dataType": "json",
                        "type": "POST"
                    },
                    columns: [{
                        data: "DT_RowIndex", // nomor urut dari laravel datatable addIndexColumn()
                        className: "text-center",
                        orderable: false,
                        searchable: false
                    }, {
                        data: "user.nama",
                        className: "",
                        orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                        searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                    }, {
                        data: "no_kk",
                        className: "",
                        orderable: false, // orderable: true, jika ingin kolom ini bisa diurutkan
                        searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                    }, {
                        data: "kepala_keluarga",
                        className: "",
                        orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                        searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                    }, {
                        data: "tanggal_request",
                        className: "",
                        orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                        searchable: false // searchable: true, jika ingin kolom ini bisa dicari
                    }, {
                        data: "status_request",
                        className: "",
                        orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                        searchable: false // searchable: true, jika ingin kolom ini bisa dicari
                    }]
                });
            });
        </script>
    @endpush
