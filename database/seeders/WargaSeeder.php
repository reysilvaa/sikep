<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('warga')->insert([
            [
                'NIK' => '2468013579246801',
                'no_kk' => '1234567890123456',
                'nama' => 'Budi Santoso',
                'tempat_lahir' => 'Malang',
                'tanggal_lahir' => '1980-01-01',
                'jenis_kelamin' => 'L',
                'agama' => 'Islam',
                'status_perkawinan' => 'Kawin',
                'status_keluarga' => 'Kepala Keluarga',
                'status_warga' => 'Aktif',
                'jenis_pekerjaan' => 'Karyawan Swasta',
                'penghasilan' => 5000000,
                'kewarganegaraan' => 'WNI',
                'pendidikan' => 'Diploma IV/Strata 1',
                'no_paspor' => NULL,
                'no_kitas' => NULL,
                'nama_ayah' => 'Sutrisno',
                'nama_ibu' => 'Sulastri',
            ],
            [
                'NIK' => '0246801357924680',
                'no_kk' => '1234567890123456',
                'nama' => 'Indah Rahayu',
                'tempat_lahir' => 'Malang',
                'tanggal_lahir' => '1982-06-23',
                'jenis_kelamin' => 'P',
                'agama' => 'Islam',
                'status_perkawinan' => 'Kawin',
                'status_keluarga' => 'Istri',
                'status_warga' => 'Aktif',
                'jenis_pekerjaan' => 'Mengurus Rumah Tangga',
                'penghasilan' => 0,
                'kewarganegaraan' => 'WNI',
                'pendidikan' => 'Diploma IV/Strata 1',
                'no_paspor' => NULL,
                'no_kitas' => NULL,
                'nama_ayah' => 'Suhendro',
                'nama_ibu' => 'Rini',
            ],
            [
                'NIK' => '3579246801357924',
                'no_kk' => '1234567890123456',
                'nama' => 'Amira Putri',
                'tempat_lahir' => 'Malang',
                'tanggal_lahir' => '2007-08-30',
                'jenis_kelamin' => 'P',
                'agama' => 'Islam',
                'status_perkawinan' => 'Belum Kawin',
                'status_keluarga' => 'Anak',
                'status_warga' => 'Aktif',
                'jenis_pekerjaan' => 'Pelajar/Mahasiswa',
                'penghasilan' => 0,
                'kewarganegaraan' => 'WNI',
                'pendidikan' => 'SLTA/Sederajat',
                'no_paspor' => NULL,
                'no_kitas' => NULL,
                'nama_ayah' => 'Budi Santoso',
                'nama_ibu' => 'Indah Rahayu',
            ],
            [
                'NIK' => '4680135792468013',
                'no_kk' => '1234567890123456',
                'nama' => 'Bima Ananta',
                'tempat_lahir' => 'Malang',
                'tanggal_lahir' => '2011-11-27',
                'jenis_kelamin' => 'L',
                'agama' => 'Islam',
                'status_perkawinan' => 'Belum Kawin',
                'status_keluarga' => 'Anak',
                'status_warga' => 'Aktif',
                'jenis_pekerjaan' => 'Pelajar/Mahasiswa',
                'penghasilan' => 0,
                'kewarganegaraan' => 'WNI',
                'pendidikan' => 'Tamat SD/Sederajat',
                'no_paspor' => NULL,
                'no_kitas' => NULL,
                'nama_ayah' => 'Budi Santoso',
                'nama_ibu' => 'Indah Rahayu',
            ],
            [
                'NIK' => '1357924680135792',
                'no_kk' => '2109876543210987',
                'nama' => 'Eko Wahyudi',
                'tempat_lahir' => 'Malang',
                'tanggal_lahir' => '1987-09-04',
                'jenis_kelamin' => 'L',
                'agama' => 'Islam',
                'status_perkawinan' => 'Kawin',
                'status_keluarga' => 'Kepala Keluarga',
                'status_warga' => 'Aktif',
                'jenis_pekerjaan' => 'Karyawan Swasta',
                'penghasilan' => 4300000,
                'kewarganegaraan' => 'WNI',
                'pendidikan' => 'Diploma IV/Strata 1',
                'no_paspor' => NULL,
                'no_kitas' => NULL,
                'nama_ayah' => 'Bambang',
                'nama_ibu' => 'Rini',
            ],
            [
                'NIK' => '6801357924680135',
                'no_kk' => '2109876543210987',
                'nama' => 'Wulan Anggraini',
                'tempat_lahir' => 'Blitar',
                'tanggal_lahir' => '1989-04-19',
                'jenis_kelamin' => 'P',
                'agama' => 'Islam',
                'status_perkawinan' => 'Kawin',
                'status_keluarga' => 'Istri',
                'status_warga' => 'Aktif',
                'jenis_pekerjaan' => 'Mengurus Rumah Tangga',
                'penghasilan' => 0,
                'kewarganegaraan' => 'WNI',
                'pendidikan' => 'Diploma IV/Strata 1',
                'no_paspor' => NULL,
                'no_kitas' => NULL,
                'nama_ayah' => 'Surya',
                'nama_ibu' => 'Sukarti',
            ],
            [
                'NIK' => '5792468013579246',
                'no_kk' => '6543210987654321',
                'nama' => 'Ana Sulistyowati',
                'tempat_lahir' => 'Surabaya',
                'tanggal_lahir' => '1985-02-02',
                'jenis_kelamin' => 'P',
                'agama' => 'Islam',
                'status_perkawinan' => 'Cerai Mati',
                'status_keluarga' => 'Kepala Keluarga',
                'status_warga' => 'Aktif',
                'jenis_pekerjaan' => 'Belum/Tidak Bekerja',
                'penghasilan' => 0,
                'kewarganegaraan' => 'WNI',
                'pendidikan' => 'DIPLOMA I/II',
                'no_paspor' => NULL,
                'no_kitas' => NULL,
                'nama_ayah' => 'Slamet',
                'nama_ibu' => 'Siti',
            ],
            [
                'NIK' => '8024680135792468',
                'no_kk' => '4321098765432109',
                'nama' => 'Dini Lestari',
                'tempat_lahir' => 'Sidoarjo',
                'tanggal_lahir' => '1992-11-06',
                'jenis_kelamin' => 'P',
                'agama' => 'Kristen',
                'status_perkawinan' => 'Belum Kawin',
                'status_keluarga' => 'Kepala Keluarga',
                'status_warga' => 'Aktif',
                'jenis_pekerjaan' => 'Belum/Tidak Bekerja',
                'penghasilan' => 0,
                'kewarganegaraan' => 'WNI',
                'pendidikan' => 'Diploma IV/Strata 1',
                'no_paspor' => NULL,
                'no_kitas' => NULL,
                'nama_ayah' => 'Sutomo',
                'nama_ibu' => 'Suparti',
            ],
            [
                'NIK' => '9135792468024680',
                'no_kk' => '9876543210987654',
                'nama' => 'Cipto Adi',
                'tempat_lahir' => 'Malang',
                'tanggal_lahir' => '1988-08-21',
                'jenis_kelamin' => 'L',
                'agama' => 'Islam',
                'status_perkawinan' => 'Kawin',
                'status_keluarga' => 'Kepala Keluarga',
                'status_warga' => 'Aktif',
                'jenis_pekerjaan' => 'Pegawai Negeri Sipil',
                'penghasilan' => 6000000,
                'kewarganegaraan' => 'WNI',
                'pendidikan' => 'Diploma IV/Strata 1',
                'no_paspor' => NULL,
                'no_kitas' => NULL,
                'nama_ayah' => 'Suparjo',
                'nama_ibu' => 'Sri',
            ],
            [
                'NIK' => '7913579246801357',
                'no_kk' => '9876543210987654',
                'nama' => 'Maya Dewi',
                'tempat_lahir' => 'Malang',
                'tanggal_lahir' => '1990-09-29',
                'jenis_kelamin' => 'P',
                'agama' => 'Islam',
                'status_perkawinan' => 'Kawin',
                'status_keluarga' => 'Istri',
                'status_warga' => 'Aktif',
                'jenis_pekerjaan' => 'Mengurus Rumah Tangga',
                'penghasilan' => 0,
                'kewarganegaraan' => 'WNI',
                'pendidikan' => 'Diploma IV/Strata 1',
                'no_paspor' => NULL,
                'no_kitas' => NULL,
                'nama_ayah' => 'Joko',
                'nama_ibu' => 'Tini',
            ],
        ]);
    }
}
