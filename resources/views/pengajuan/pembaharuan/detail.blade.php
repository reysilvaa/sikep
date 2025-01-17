@extends('layout.layout', ['isForm' => false])

@section('content')
    <div id="modalReject"
        class="tw-hidden modal-menu tw-z-20 tw-animate-disolve tw-fixed insert-0 tw-bg-n1000 tw-bg-opacity-20 tw-overflow-y-auto tw-h-full tw-w-full ">
        <div
            class="tw-w-96 md:tw-w-96 tw-relative tw-top-1/2 tw-left-1/2 -tw-translate-x-1/2 -tw-translate-y-1/2 tw-bg-n100 tw-rounded-md tw-overflow-hidden tw-border-[1px] ">
            <div class="tw-flex tw-items-center tw-px-4 tw-h-14 tw-border-b-[1px]">
                <h2>Tolak Pengajuan</h2>
            </div>
            <div id="navMenus" class="tw-flex tw-gap-4 tw-w-full tw-flex-col tw-p-4">
                <form class="tw-flex tw-flex-col tw-gap-7 tw-items-end">
                    <div class="tw-flex tw-flex-col tw-gap-3 tw-w-full">

                        <x-input.label for="catatan" label="Catatan">
                            <x-input.textarea class="tw-h-32" name="catatan" placeholder="Catatan"></x-input.textarea>
                        </x-input.label>

                    </div>

                    <div class="tw-flex tw-gap-2">
                        <button href=""
                            class="tw-btn tw-btn-text tw-btn-lg tw-btn-round"
                            type="button" id="closeModal">Batal</button>
                        <a href=""
                            class="tw-btn tw-btn-danger tw-btn-lg tw-btn-round"
                            type="submit">Tolak</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="tw-pt-[100px] tw-mx-5 md:tw-mx-auto md:tw-w-[702px] tw-flex tw-flex-col tw-gap-2 tw-pb-10">
        <p class="tw-breadcrumb tw-text-n500">Daftar Data Baru /
            <span class="tw-font-bold tw-text-b500">Detail Pengajuan</span>
        </p>

        <div class="md:tw-w-full">

            <div class="tw-flex tw-w-full tw-items-center tw-pb-2 md:tw-items-start">

                <h1 class="tw-h1 tw-w-3/4 md:tw-w-fit">Detail Pengajuan</h1>
            </div>

            <div class="tw-flex tw-flex-col tw-gap-7">

                <div class="tw-flex tw-flex-col tw-gap-7 tw-divide-y-[1.5px] tw-divide-n400">

                    <div class="tw-flex tw-flex-col tw-gap-2">
                        <h2 class="">Informasi</h2>
                        <div class="tw-flex tw-flex-col tw-gap-3">
                            @include('components.form.textdetail', [
                                'title' => 'Jenis',
                                'content' => 'Data Baru',
                            ])
                            @include('components.form.textdetail', [
                                'title' => 'Status Pengajuan',
                                'content' => 'Ditolak',
                                'isLabel' => true,
                            ])
                            {{-- @if ($data->status === 'Ditolak') --}}

                            @include('components.form.textdetail', [
                                'title' => 'Catatan',
                                'content' =>
                                    'Terdapat kesalahan input data pada nomer kk dan status perkawinan mbak citra. Bisa di benahi dulu dan ajukan ulang',
                            ])
                            {{-- @endif --}}

                        </div>
                    </div>

                    <div class="tw-flex tw-pt-6 tw-flex-col tw-gap-2">
                        <h2 class="">Detail Keluarga</h2>
                        <div class="tw-flex tw-flex-col tw-gap-3">

                            @include('components.form.textdetail', [
                                'title' => 'No KK',
                                // 'content' => $keluarga->no_kk,
                                'content' => '',
                            ])
                            @include('components.form.textdetail', [
                                'title' => 'Kepala Keluarga',
                                // 'content' => $keluarga->kepala_keluarga,
                                'content' => '',
                            ])
                            @include('components.form.textdetail', [
                                'title' => 'Alamat',
                                // 'content' => $keluarga->alamat,
                                'content' => '',
                            ])
                            @include('components.form.textdetail', [
                                'title' => 'Kode POS',
                                // 'content' => $keluarga->kode_pos,
                                'content' => '',
                            ])
                            @include('components.form.textdetail', [
                                'title' => 'RT',
                                // 'content' => $keluarga->RT,
                                'content' => '',
                            ])
                            @include('components.form.textdetail', [
                                'title' => 'RW',
                                // 'content' => $keluarga->RW,
                                'content' => '',
                            ])
                            @include('components.form.textdetail', [
                                'title' => 'Kelurahan',
                                // 'content' => $keluarga->kelurahan,
                                'content' => '',
                            ])
                            @include('components.form.textdetail', [
                                'title' => 'Kecamatan',
                                // 'content' => $keluarga->kecamatan,
                                'content' => '',
                            ])
                            @include('components.form.textdetail', [
                                'title' => 'Kota',
                                // 'content' => $keluarga->kota,
                                'content' => '',
                            ])
                            @include('components.form.textdetail', [
                                'title' => 'Provinsi',
                                // 'content' => $keluarga->provinsi,
                                'content' => '',
                            ])
                            @include('components.form.textdetail', [
                                'title' => 'Kartu Keluarga',
                                'isImage' => true,
                                // 'content' => asset(Storage::url('KK/'.$keluarga->image_kk)),
                                'content' => '',
                            ]) {{-- kalau label kasih value var $isLabel with true --}}


                        </div>
                    </div>

                    <div class="tw-flex tw-flex-col tw-gap-2 tw-pt-6">
                        <h2 class="">Data Tambahan</h2>
                        <div class="tw-flex tw-flex-col tw-gap-3">

                            @include('components.form.textdetail', [
                                'title' => 'Tagihan Listrik',
                                // 'content' => $keluarga->tagihan_listrik,
                                'content' => '',
                            ])
                            @include('components.form.textdetail', [
                                'title' => 'Luas Bangunan',
                                // 'content' => $keluarga->luas_bangunan,
                                'content' => '',
                            ])

                        </div>
                    </div>

                    <div class="tw-flex tw-pt-6 tw-flex-col tw-gap-3 tw-overflow-hidden tw-overflow-x-scroll">
                        <h2 class="">Keluarga</h2>
                        <div class="tw-flex tw-flex-col tw-gap-3">

                            <table class="tw-w-[702px] md:tw-w-full">
                                {{-- <thead class="tw-rounded-lg"> --}}
                                <tr class="tw-h-11 tw-bg-n300 tw-rounded-lg">
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>NAMA</th>
                                    <th>STATUS KELUARGA</th>
                                    <th class="tw-w-[108px]"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr class="tw-h-16 hover:tw-bg-n300 tw-border-b-[1.5px] tw-border-n400">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="tw-w-[100px] tw-h-16 tw-flex tw-items-center tw-justify-center tw-gap-2">
                                            <a href=""
                                                class="tw-btn tw-btn-primary tw-btn-md tw-btn-round-md">
                                                Detail
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>


                <div class="tw-flex tw-justify-between">
                    <a href="{{ route('warga') }}"
                        class="tw-btn tw-btn-outline tw-btn-lg-ilead tw-btn-round"
                        type="button">
                        <x-icons.actionable.arrow-left class="tw-btn-i-lead-lg" stroke="1.5" color="n1000"></x-icons.actionable.arrow-left>
                        <span class="tw-hidden md:tw-inline-block">
                            Kembali
                        </span>
                    </a>
                    <div class="tw-flex tw-gap-2">
                        <button href=""
                            class="tw-btn tw-btn-text tw-btn-lg tw-btn-round"
                            type="button" id="buttonReject">Tolak</button>
                        <a href=""
                            class="tw-btn tw-btn-primary tw-btn-lg tw-btn-round"
                            type="submit">Konfirmasi</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#buttonReject").click(function() {
                $("#modalReject").removeClass("tw-hidden");
                $('html, body').css({
                    overflow: 'hidden',
                });
            });
            $("#modalReject, #closeModal").click(function() {
                $("#modalReject").addClass("tw-hidden");
                $('html, body').css({
                    overflow: 'auto',
                });
            });
        });
    </script>
@endsection
