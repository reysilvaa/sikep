@extends('layout.layout', ['isForm' => true])

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    <div class="tw-pt-[100px] tw-mx-5 md:tw-mx-auto md:tw-w-[702px] tw-flex tw-flex-col tw-gap-2 tw-pb-10">
        <p class="tw-breadcrumb tw-text-n500">Daftar Penduduk /
            <span class="tw-font-bold tw-text-b500">Tambah Keluarga</span>
        </p>

        <div class="">

            <h1 class="tw-h1 tw-mb-3">Tambah Data</h1>

            <form class="tw-flex tw-flex-col tw-gap-7" action="{{ route('keluarga-tambah') }}" method="POST"
                enctype="multipart/form-data" id="formdata">
                @csrf

                <div id="formInput" class="tw-flex tw-flex-col tw-gap-7 tw-divide-y-[1.5px] tw-divide-n400">

                    <div class="md:tw-w-80 tw-flex tw-flex-col tw-gap-2">
                        <h2 class="">Data Keluarga</h2>
                        <div class="tw-flex tw-flex-col tw-gap-3">


                            <x-input.label for="jenis_data" label="Jenis Data">
                                <x-input.select name="jenis_data">
                                    <option value="data_baru"
                                        {{ empty(session()->get('formState')['jenis_data']) ? '' : (session()->get('formState')['jenis_data'] == 'data_baru' ? 'selected' : '') }}>
                                        KK Baru</option>
                                    <option value="data_lama"
                                        {{ empty(session()->get('formState')['jenis_data']) ? '' : (session()->get('formState')['jenis_data'] == 'data_lama' ? 'selected' : '') }}>
                                        KK Lama</option>
                                </x-input.select>
                            </x-input.label>

                            {{-- <label class="tw-label tw-flex tw-flex-col tw-gap-2" for="jenis_data">Jenis Data
                                <div class="tw-w-full tw-flex tw-flex-col tw-relative tw-group">
                                    <select class="item tw-input-enabled tw-appearance-none" name="jenis_data" id="jenis_data">
                                        <option value="data_baru"
                                            {{ empty(session()->get('formState')['jenis_data']) ? '' : (session()->get('formState')['jenis_data'] == 'data_baru' ? 'selected' : '') }}>
                                            KK Baru</option>
                                        <option value="data_lama"
                                            {{ empty(session()->get('formState')['jenis_data']) ? '' : (session()->get('formState')['jenis_data'] == 'data_lama' ? 'selected' : '') }}>
                                            KK Lama</option>
                                    </select>
                                    <span
                                        class="toggleDrop tw-absolute tw-top-1/2 -tw-translate-y-1/2 tw-right-3 tw-flex tw-items-center tw-pl-2">
                                        <img id="arrowDown" src="{{ asset('assets/icons/actionable/arrow-down-1.svg') }}"
                                            alt="\/">
                                    </span>
                                </div>
                            </label> --}}

                            <x-input.label for="no_kk" label="No KK">
                                <x-input.input type="text" name="no_kk" placeholder="Masukkan No KK" value="{{ old('no_kk', isset($formState['no_kk']) ? $formState['no_kk'] : '') }}"></x-input.input>
                                <x-input.select class="tw-hidden" name="no_kk" id="no_kk-list">
                                    <option value="no" disabled selected>Pilih KK</option>
                                </x-input.select>
                                @error('no_kk')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </x-input.label>

                            {{-- <label class="tw-label tw-flex tw-flex-col tw-gap-2" for="no_kk">No KK
                                <input class="tw-input-enabled tw-placeholder" placeholder="Masukkan No KK" type="text"
                                    id="no_kk" name="no_kk"
                                    value="{{ empty(session()->get('formState')['no_kk']) ? '' : session()->get('formState')['no_kk'] }}">
                                <select class="tw-hidden tw-placeholder" name="no_kk" id="no_kk-list" disabled>
                                    <option value="no" disabled selected>Pilih KK</option>
                                </select>
                            </label> --}}

                            <x-input.label for="kepala_keluarga" label="Kepala Keluarga">
                                <x-input.input type="text" name="kepala_keluarga" placeholder="Masukkan Kepala Keluarga" value="{{ old('kepala_keluarga', isset($formState['kepala_keluarga']) ? $formState['kepala_keluarga'] : '') }}"></x-input.input>
                                @error('kepala_keluarga')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </x-input.label>

                            {{-- <label class="tw-label tw-flex tw-flex-col tw-gap-2" for="kepala_keluarga">Kepala Keluarga
                                <input class="tw-input-enabled tw-placeholder" placeholder="Masukkan Kepala Keluarga"
                                    type="text" id="kepala_keluarga" name="kepala_keluarga"
                                    value="{{ empty(session()->get('formState')['kepala_keluarga']) ? '' : session()->get('formState')['kepala_keluarga'] }}">
                            </label> --}}

                            <x-input.label for="alamat" label="Alamat">
                                <x-input.textarea name="alamat" placeholder="Masukkan Alamat" value="{{ old('alamat', isset($formState['alamat']) ? $formState['alamat'] : '') }}">
                                    </x-input.textarea>
                                @error('alamat')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </x-input.label>

                            {{-- <label class="tw-label tw-flex tw-flex-col tw-gap-2" for="alamat">Alamat
                                <textarea class="tw-input-enabled tw-pt-[10px] tw-placeholder" placeholder="Masukkan Alamat" type="text"
                                    id="alamat" name="alamat">{{ empty(session()->get('formState')['alamat']) ? '' : session()->get('formState')['alamat'] }}</textarea>
                            </label> --}}

                            {{-- <label class="tw-label tw-flex tw-flex-col tw-gap-2" for="RT">RT
                            <input class="tw-input-enabled tw-placeholder" placeholder="Masukkan RT" type="text"
                                id="RT" name="RT">
                        </label> --}}

                        <x-input.label for="RT" label="RT">
                            <x-input.input disabled type="text" name="RT" placeholder="RT" value="{{Auth::user()->user_id}}"></x-input.input>
                        </x-input.label>

                            {{-- <label class="tw-label tw-flex tw-flex-col tw-gap-2" for="RT">RT
                                <select class="tw-input-enabled tw-placeholder" name="RT" id="RT">
                                    <option value="1">001</option>
                                    <option value="2">002</option>
                                    <option value="3">003</option>
                                    <option value="4">004</option>
                                    <option value="5">005</option>
                                    <option value="6">006</option>
                                    <option value="7">007</option>
                                    <option value="8">008</option>
                                    <option value="9">009</option>
                                    <option value="10">010</option>
                                    <option value="11">011</option>
                                </select>
                            </label> --}}

                            {{-- <label class="tw-label tw-flex tw-flex-col tw-gap-2" for="RW">RW
                                <input class="tw-input-disabled tw-placeholder" placeholder="Masukkan RW" type="text"
                                    id="RW" name="RW" value="{{ $default['rw'] }}" disabled>
                            </label> --}}

                            <x-input.label for="RW" label="RW">
                                <x-input.input disabled type="text" name="RW" placeholder="Masukkan RW"
                                    value="{{ $default['rw'] }}"></x-input.input>
                            </x-input.label>

                            <x-input.label for="kode_pos" label="Kode Pos">
                                <x-input.input disabled type="text" name="kode_pos" placeholder="Masukkan kode_pos"
                                    value="{{ $default['kode_pos'] }}"></x-input.input>
                            </x-input.label>

                            <x-input.label for="kelurahan" label="Kelurahan">
                                <x-input.input disabled type="text" name="kelurahan" placeholder="Masukkan Kelurahan"
                                    value="{{ $default['kelurahan'] }}"></x-input.input>
                            </x-input.label>

                            <x-input.label for="kecamatan" label="Kecamatan">
                                <x-input.input disabled type="text" name="kecamatan" placeholder="Masukkan Kecamatan"
                                    value="{{ $default['kecamatan'] }}"></x-input.input>
                            </x-input.label>

                            <x-input.label for="kota" label="Kota">
                                <x-input.input disabled type="text" name="kota" placeholder="Masukkan Kota"
                                    value="{{ $default['kota'] }}"></x-input.input>
                            </x-input.label>

                            <x-input.label for="provinsi" label="Provinsi">
                                <x-input.input disabled type="text" name="provinsi" placeholder="Masukkan Provinsi"
                                    value="{{ $default['provinsi'] }}"></x-input.input>
                            </x-input.label>

                            <x-input.label for="kartu_keluarga" label="Kartu Keluarga">
                                <x-input.file name="kartu_keluarga"></x-input.file>
                            </x-input.label>

                            {{-- <label class="tw-label tw-flex tw-flex-col tw-gap-2" for="kode_pos">Kode POS
                                <input class="tw-input-disabled tw-placeholder" type="text" id="kode_pos"
                                    name="kode_pos" value="{{ $default['kode_pos'] }}" disabled>
                            </label>

                            <label class="tw-label tw-flex tw-flex-col tw-gap-2" for="kelurahan">Kelurahan
                                <input class="tw-input-disabled tw-placeholder" type="text" id="kelurahan"
                                    name="kelurahan" value="{{ $default['kelurahan'] }}" disabled>
                            </label>

                            <label class="tw-label tw-flex tw-flex-col tw-gap-2" for="kecamatan">Kecamatan
                                <input class="tw-input-disabled tw-placeholder" type="text" id="kecamatan"
                                    name="kecamatan" value="{{ $default['kecamatan'] }}" disabled>
                            </label>

                            <label class="tw-label tw-flex tw-flex-col tw-gap-2" for="kota">Kota
                                <input class="tw-input-disabled tw-placeholder" type="text" id="kota"
                                    name="kota" value="{{ $default['kota'] }}" disabled>
                            </label>

                            <label class="tw-label tw-flex tw-flex-col tw-gap-2" for="provinsi">Provinsi
                                <input class="tw-input-disabled tw-placeholder" type="text" id="provinsi"
                                    name="provinsi" value="{{ $default['provinsi'] }}" disabled>
                            </label> --}}

                            {{-- <label class="tw-label tw-flex tw-flex-col tw-gap-2"
                                for="kartu_keluarga">Kartu Keluarga
                                <div class="tw-relative tw-cursor-pointer tw-input-enabled">
                                    <input
                                        id="kartu_keluarga" name="kartu_keluarga" type="file"
                                        class=" tw-flex tw-py-[9px] file:tw-absolute file:tw-top-1/2 file:-tw-translate-y-1/2 file:tw-right-0 file:tw-h-full file:tw-border-y-0 file: file:tw-border-r-0 file:tw-border-l-[1.5px] file:tw-rounded-r-md file:tw-px-2 file:hover:tw-bg-n200 file:hover:tw-border-n600 file:active:tw-border-n600 file:tw-justify-center tw-cursor-pointer file:tw-cursor-pointer  file:tw-border-n400 file:tw-bg-n100 file:tw-m-0 ">
                                </div>
                            </label> --}}

                        </div>

                    </div>

                    <div class=" tw-flex tw-flex-col tw-gap-2  tw-pt-6">
                        <h2 class="">Data Tambahan</h2>
                        <div class="md:tw-w-80 tw-flex tw-flex-col tw-gap-3">

                            <x-input.label for="tagihan_listrik" label="Tagihan Listrik">
                                <x-input.leadingicon name="tagihan_listrik" type="number" placeholder="Misal: 1000000" value="{{ (int)old('tagihan_listrik', isset($formState['tagihan_listrik']) ? $formState['tagihan_listrik'] : '') }}" icon="rupiah" alt="Rp">
                                </x-input.leadingicon>
                            </x-input.label>

                            {{-- <label class="tw-label tw-flex tw-flex-col tw-gap-2" for="tagihan_listrik">Tagihan Listrik
                                <div class="tw-relative tw-flex tw-w-full">
                                    <input type="number" min="0" id="tagihan_listrik" name="tagihan_listrik" placeholder="1000000"
                                    value="{{ empty(session()->get('formState')['tagihan_listrik']) ? '' : session()->get('formState')['tagihan_listrik'] }}" class="tw-input-enabled tw-pl-8 tw-pr-3" type="text">
                                    </input>
                                    <span
                                        class="tw-absolute tw-top-1/2 -tw-translate-y-1/2 tw-left-[6px] tw-flex tw-items-center tw-cursor-pointer">
                                        <img class="tw-w-7 tw-bg-cover"
                                            src="{{ asset('assets/icons/actionable/rupiah.svg') }}" alt="Rp">
                                    </span>
                                </div>
                            </label> --}}

                            <x-input.label for="luas_bangunan" label="Luas Bangunan (m2)">
                                <x-input.input type="number" name="luas_bangunan" placeholder="Masukkan Luas Bangunan" value="{{ (int)old('luas_bangunan', isset($formState['luas_bangunan']) ? $formState['luas_bangunan'] : '') }}"></x-input.input>
                            </x-input.label>

                            {{-- <label class="tw-label tw-flex tw-flex-col tw-gap-2" for="luas_bangunan">Luas Bangunan (m2)
                                <input class="tw-input-enabled tw-placeholder tw-appearance-none" placeholder="Masukkan Luas Bangunan"
                                    type="number" min="0" id="luas_bangunan" name="luas_bangunan" value="{{ empty(session()->get('formState')['luas_bangunan']) ? '' : session()->get('formState')['luas_bangunan'] }}">
                            </label> --}}

                        </div>
                    </div>


                    <div id="anggota_keluarga"
                        class="tw-flex tw-pt-6 tw-flex-col tw-gap-3 tw-overflow-hidden tw-overflow-x-scroll">
                        <h2 class="">Anggota Keluarga</h2>
                        <div class="tw-flex tw-flex-col tw-gap-3">


                            <table class="tw-w-[702px] md:tw-w-full">
                                {{-- <thead class="tw-rounded-lg"> --}}
                                <tr class="tw-h-11 tw-bg-n300 tw-rounded-lg">
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Status Keluarga</th>
                                    <th class="tw-w-[108px]"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php
                                        // dd($daftarWarga);
                                    @endphp
                                    @foreach ($daftarWarga as $warga)
                                        <tr class="tw-h-16 hover:tw-bg-n300 tw-border-b-[1.5px] tw-border-n400">
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $warga['warga']->NIK }}</td>
                                            <td>{{ $warga['warga']->nama }}</td>
                                            <td>{{ $warga['warga']->status_keluarga }}</td>
                                            <td
                                                class="tw-w-[140px] tw-h-16 tw-flex tw-items-center tw-justify-center tw-gap-2">
                                                <a href=""
                                                    class="tw-h-10 tw-px-4 tw-bg-b500 tw-text-n100 tw-font-sans tw-font-bold tw-text-[14px] tw-rounded-md hover:tw-bg-b600 active:tw-bg-b700 tw-flex tw-items-center">
                                                    Lihat
                                                </a>
                                                <a href="{{ route('removeAnggotaKeluarga', $loop->index) }}"
                                                    class="tw-h-10 tw-px-2 tw-bg-r500 tw-text-n100 tw-font-sans tw-font-bold tw-text-[14px] tw-rounded-md hover:tw-bg-r600 active:tw-bg-r700 tw-flex tw-items-center">
                                                    <img class="tw-h-5 tw-bg-cover"
                                                        src="{{ asset('assets/icons/actionable/trash.svg') }}"
                                                        alt="del">
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr class="tw-h-16 tw-border-b-[1.5px] tw-border-n400 hover:tw-bg-n300">
                                        <td class="tw-h-16 tw-relative" colspan="5">
                                            {{-- <a href="#"
                                                class=" tw-absolute tw-top-1/2 -tw-translate-y-1/2 tw-right-1/2 tw-translate-x-1/2  tw-h-10 tw-w-fit tw-px-4 tw-bg-b500 tw-text-n100 tw-font-sans tw-font-bold tw-text-[14px] tw-rounded-md hover:tw-bg-b600 active:tw-bg-b700 tw-flex tw-items-center"
                                                onclick="tambahAnggotaKeluarga()">
                                                Tambah
                                            </a> --}}
                                            <button type="submit" name="action" value="tambah" class="tw-absolute tw-top-1/2 -tw-translate-y-1/2 tw-right-1/2 tw-translate-x-1/2  tw-h-10 tw-w-fit tw-px-4 tw-bg-b500 tw-text-n100 tw-font-sans tw-font-bold tw-text-[14px] tw-rounded-md hover:tw-bg-b600 active:tw-bg-b700 tw-flex tw-items-center">
                                                Tambah</button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
                <div class="tw-flex tw-justify-between  tw-w-full md:tw-w-fit md:tw-gap-3 md:tw-justify-start">
                    <a href="{{ route('warga') }}" class="tw-btn tw-btn-lg-ilead tw-btn-round tw-btn-outline"
                        type="button">
                        <x-icons.actionable.arrow-left class="" stroke="1.5"
                            color="n1000"></x-icons.actionable.arrow-left>
                        <span class="tw-hidden md:tw-inline-block">
                            Kembali
                        </span>
                    </a>
                    <button class="tw-btn tw-btn-primary tw-btn-lg tw-btn-round" type="submit">Simpan</button>
                </div>
            </form>

        </div>
    </div>
    {{-- {{dd(session()->get('formState'))}} --}}
    <script>
        $('#formdata').submit(function(e) {
            // e.preventDefault();
            $('#RW').prop('disabled', false);
            $('#kode_pos').prop('disabled', false);
            $('#kelurahan').prop('disabled', false);
            $('#kecamatan').prop('disabled', false);
            $('#kota').prop('disabled', false);
            $('#provinsi').prop('disabled', false);
            return true;
        });
        $(document).ready(function() {
            console.log();
            changeJenisData(
                '{{ empty(session()->get('formState')['jenis_data']) ? '' : session()->get('formState')['jenis_data'] }}'
            );
            selectKK(
                '{{ empty(session()->get('formState')['no_kk']) ? '' : session()->get('formState')['no_kk'] }}',
                '{{ empty(session()->get('formState')['jenis_data']) ? '' : session()->get('formState')['jenis_data'] }}'
            );
            selectRT('{{ empty(session()->get('formState')['RT']) ? '' : session()->get('formState')['RT'] }}')
        });

        function getFormData($form) {
            var unindexed_array = $form.serializeArray();
            var indexed_array = {};
            $.map(unindexed_array, function(n, i) {
                indexed_array[n['name']] = n['value'];
            });
            return indexed_array;
        }

        // function tambahAnggotaKeluarga() {
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });

        //     var kk = document.getElementById("no_kk");
        //     var url = "/penduduk/warga/tambah/" + kk.value;

        //     data = $('#formdata');
        //     data = getFormData(data);
        //     $.ajax({
        //         type: "POST",
        //         url: "/penduduk/keluarga/tambah/save-state",
        //         data: JSON.stringify(data),
        //         dataType: "json",
        //         success: function(response) {
        //             window.location.href = url;
        //         }
        //     });
        // }

        function changeJenisData(data) {
            if (data == 'data_lama') {
                console.log('lama');
                $('#formData').attr('action', '{{ route('pindahKK') }}');
                $('#no_kk').removeClass('tw-input-enabled');
                $('#no_kk').attr('type', 'hidden');
                $('#no_kk').prop('disabled', true);

                $('#alamat').removeClass('tw-input-enabled');
                $('#alamat').addClass('tw-input-disabled placeholder:tw-text-n600');
                $('#alamat').attr('placeholder', 'Pilih No KK');
                $('#alamat').prop('disabled', true);

                $('#kepala_keluarga').removeClass('tw-input-enabled');
                $('#kepala_keluarga').addClass('tw-input-disabled placeholder:tw-text-n600');
                $('#kepala_keluarga').attr('placeholder', 'Pilih No KK');
                $('#kepala_keluarga').prop('readonly', true);

                $('#RT').removeClass('tw-input-enabled');
                $('#RT').addClass('tw-input-disabled placeholder:tw-text-n600');
                $('#RT').attr('placeholder', 'Pilih No KK');
                $('#RT').prop('disabled', true);

                $('#tagihan_listrik').removeClass('tw-input-enabled');
                $('#tagihan_listrik').addClass('tw-input-disabled placeholder:tw-text-n600');
                $('#tagihan_listrik').attr('placeholder', 'Pilih No KK');
                $('#tagihan_listrik').prop('disabled', true);

                $('#luas_bangunan').removeClass('tw-input-enabled');
                $('#luas_bangunan').addClass('tw-input-disabled placeholder:tw-text-n600');
                $('#luas_bangunan').attr('placeholder', 'Pilih No KK');
                $('#luas_bangunan').prop('disabled', true);

                $('#no_kk-list').addClass('tw-input-enabled');
                $('#no_kk-list').parent().removeClass('tw-hidden');
                $('#no_kk-list').prop('disabled', false);
                // $('#no_kk-list').val('no').change();
                $.ajax({
                    type: "GET",
                    url: "/api/keluarga",
                    success: function(response) {
                        // console.log(response);
                        response.forEach(keluarga => {
                            let optionHTML =
                                `<option value="${keluarga.no_kk}">${keluarga.no_kk} - ${keluarga.kepala_keluarga}</option>`;
                            $('#no_kk-list').append(optionHTML);
                        });
                        $('#no_kk-list').val(
                            '{{ empty(session()->get('formState')['no_kk']) ? 'no' : (session()->get('formState')['jenis_data'] == 'data_baru' ? 'no' : session()->get('formState')['no_kk']) }}'
                        ).change();
                        // $('#no_kk-list').val('no').change();
                        // console.log('{{ empty(session()->get('formState')['no_kk']) ? 'no' : session()->get('formState')['no_kk'] }}');
                    }
                });
            }
            if (data == 'data_baru') {
                $('#formData').attr('action', '{{ route('tambah-warga-post') }}');
                $('#no_kk').addClass('tw-input-enabled');
                $('#no_kk').attr('type', 'text');
                $('#no_kk').prop('disabled', false);


                $('#alamat').addClass('tw-input-enabled');
                $('#alamat').removeClass('tw-input-disabled placeholder:tw-text-n600');
                $('#alamat').attr('placeholder', 'Masukkan Alamat');
                $('#alamat').prop('disabled', false);

                $('#kepala_keluarga').addClass('tw-input-enabled');
                $('#kepala_keluarga').removeClass('tw-input-disabled placeholder:tw-text-n600');
                $('#kepala_keluarga').attr('placeholder', 'Masukkan Kepala Keluarga');
                $('#kepala_keluarga').prop('readonly', false);

                $('#RT').val('001');
                $('#RT').addClass('tw-input-enabled');
                $('#RT').removeClass('tw-input-disabled placeholder:tw-text-n600');
                $('#RT').attr('placeholder', 'Masukkan Tempat Lahir');
                $('#RT').prop('disabled', false);

                $('#tagihan_listrik').val('001');
                $('#tagihan_listrik').addClass('tw-input-enabled');
                $('#tagihan_listrik').removeClass('tw-input-disabled placeholder:tw-text-n600');
                $('#tagihan_listrik').attr('placeholder', 'Masukkan Tempat Lahir');
                $('#tagihan_listrik').prop('disabled', false);

                $('#luas_bangunan').val('001');
                $('#luas_bangunan').addClass('tw-input-enabled');
                $('#luas_bangunan').removeClass('tw-input-disabled placeholder:tw-text-n600');
                $('#luas_bangunan').attr('placeholder', 'Masukkan Tempat Lahir');
                $('#luas_bangunan').prop('disabled', false);

                $('#no_kk-list').removeClass('tw-input-enabled');
                $('#no_kk-list').parent().addClass('tw-hidden');
                $('#no_kk-list').prop('disabled', true);
            }
        }

        function resetNonDefaultValues() {
            $('#no_kk').val('');
            $('#alamat').val('');
            $('#kepala_keluarga').val('');
            $('#RT').val('');
            $('#tagihan_listrik').val('');
            $('#luas_bangunan').val('');
        }

        function selectRT(rt) {
            console.log(rt);
            $('select#RT').val(rt).change();
        }

        function selectKK(no_kk, jenis_data) {
            console.log(jenis_data);
            if (jenis_data == 'data_lama') {
                if (no_kk != '') {
                    console.log(no_kk);
                    $.ajax({
                        type: "GET",
                        url: "/api/keluarga/" + no_kk,
                        success: function(response) {
                            $.each(response, function(key, val) {
                                if (val === null) {
                                    // console.log(val);
                                    $('#' + key).attr('placeholder', '-');
                                }
                                $('#' + key).val(val);
                            });
                            selectRT(response.RT);
                        }
                    });
                }
            }
        }

        $('#jenis_data').on('change', function() {
            changeJenisData(this.value);
            resetNonDefaultValues();
        });

        $('#no_kk-list').on('change', function() {
            selectKK(this.value, 'data_lama');
        });

        // $('#kartu_keluarga').change(function (e) {
        //     var kk = $('#kartu_keluarga').prop('files')[0];
        //     var form_data = new FormData();
        //     form_data.append('image_kk', kk);
        //     alert(form_data);
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });
        //     $.ajax({
        //         url: '',
        //         cache: false,
        //         contentType: false,
        //         processData: false,
        //         data: form_data,
        //         type: 'post',
        //         success: function(php_script_response){
        //             alert(php_script_response); // <-- display response from the PHP script, if any
        //         }
        //     });
        // });
    </script>
@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Form Penambahan Data</title>
</head>
<body>
    <h2>Form Penambahan Data</h2>
    <form action="{{ route('keluarga-tambah') }}" method="POST" enctype="multipart/form-data" id="formdata">
        @csrf

        <label for="no_kk">Nomor KK:</label><br>
        <input type="text" id="no_kk" name="no_kk" value="{{empty(session()->get('formState')['no_kk']) ? "" : session()->get('formState')['no_kk'] }}"><br>

        <label for="kepala_keluarga">Kepala Keluarga:</label><br>
        <input type="text" id="kepala_keluarga" name="kepala_keluarga" value="{{empty(session()->get('formState')['kepala_keluarga']) ? "" : session()->get('formState')['kepala_keluarga'] }}"><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" value="{{empty(session()->get('formState')['alamat']) ? "" : session()->get('formState')['alamat'] }}"></textarea><br>

        <label for="RT">RT:</label><br>
        <input type="number" id="RT" name="RT" value="{{$default['rt']}}"><br>

        <label for="RW">RW:</label><br>
        <input type="number" id="RW" name="RW" value="{{$default['rw']}}"><br>

        <label for="kode_pos">Kode Pos:</label><br>
        <input type="text" id="kode_pos" name="kode_pos" value="{{$default['kode_pos']}}"><br>

        <label for="kelurahan">Kelurahan:</label><br>
        <input type="text" id="kelurahan" name="kelurahan" value="{{$default['kelurahan']}}"><br>

        <label for="kecamatan">Kecamatan:</label><br>
        <input type="text" id="kecamatan" name="kecamatan" value="{{$default['kecamatan']}}"><br>

        <label for="kota">Kota:</label><br>
        <input type="text" id="kota" name="kota" value="{{$default['kota']}}"><br>

        <label for="provinsi">Provinsi:</label><br>
        <input type="text" id="provinsi" name="provinsi" value="{{$default['provinsi']}}"><br>

        <label for="image_kk">Foto KK:</label><br>
        <input type="file" id="image_kk" name="image_kk"><br>

        <label for="tagihan_listrik">Tagihan Listrik:</label><br>
        <input type="number" id="tagihan_listrik" name="tagihan_listrik" value="{{empty(session()->get('formState')['tagihan_listrik']) ? "" : session()->get('formState')['tagihan_listrik'] }}"><br>

        <label for="luas_bangunan">Luas Bangunan:</label><br>
        <input type="number" id="luas_bangunan" name="luas_bangunan" value="{{empty(session()->get('formState')['luas_bangunan']) ? "" : session()->get('formState')['luas_bangunan'] }}"><br>

        <br><br>
        <input type="submit" value="Submit">
    </form>
    <h2>Daftar Warga</h2>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Status Keluarga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daftarWarga as $warga)
            <tr>
                <td>{{$loop->index}}</td>
                <td>{{$warga->NIK}}</td>
                <td>{{$warga->nama}}</td>
                <td>{{$warga->status_keluarga}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <button onclick="tambahAnggotaKeluarga()">Tambah Anggota Keluarga</button>
    <script>
        function getFormData($form){
            var unindexed_array = $form.serializeArray();
            var indexed_array = {};
            $.map(unindexed_array, function(n, i){
                indexed_array[n['name']] = n['value'];
            });
            return indexed_array;
        }
        function tambahAnggotaKeluarga(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var kk = document.getElementById("no_kk");
            var url = "/penduduk/warga/tambah/"+kk.value;

            data = $('#formdata');
            data = getFormData(data);
            $.ajax({
                type: "POST",
                url: "/penduduk/keluarga/tambah/save-state",
                data: JSON.stringify(data),
                dataType: "json",
                success: function (response) {
                    if (kk.value != '') {
                        window.location.href = url;
                    } else {
                        alert('Nomor KK Harus diisi');
                    }
                }
            });
        }
    </script>
    // {{dd($daftarWarga)}}
</body>
</html> --}}
