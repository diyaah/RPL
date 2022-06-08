<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'nama_beasiswa' => 'KIP Kuliah',
                'penyelenggara' => 'Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi',
                'deskripsi' => 'KIPK singkatan dari Kartu Indonesia Pintar Kuliah merupakan bantuan pendidikan perkuliahan yang bertujuan membebaskan pendaftaran seleksi masuk perguruan tinggi dan biaya kuliah atau pendidikan. Di samping itu, sejak tahun akademik 2020/2021 lalu, kamu yang berkesempatan memiliki KIP kuliah juga akan mendapat bantuan biaya hidup. Kabar baiknya lagi, Kemendikbud Ristek telah mengubah skema KIP Kuliah dengan memberikan bantuan biaya pendidikan (uang kuliah) dan biaya hidup yang jauh lebih tinggi. Sebagai informasi, tahun lalu, KIP Kuliah disalurkan kepada 200.000 mahasiswa baru perguruan tinggi negeri (PTN) dan perguruan tinggi swasta (PTS) di bawah naungan Kemendikbud Ristek.',
                'persyaratan' => 'Selain berprestasi dan memiliki keterbatasan kemampuan ekonomi, untuk bisa menjadi penerima KIP Kuliah, diberlakukan sejumlah persyaratan sebagai berikut: <br>
                1. Siswa SMA atau sederajat yang akan lulus  <br>
                2. Nomor Induk Siswa Nasional (NISN), Nomor Pokok Sekolah Nasional (NPSN), dan Nomor Induk Kependudukan (NIK) yang valid <br>
                3. Memiliki potensi akademik baik tetapi memiliki keterbatasan ekonomi yang didukung bukti dokumen yang sah <br>
                4. Siswa SMA atau sederajat yang lulus pada tahun berjalan dengan potensi akademik baik dan mempunyai Kartu KIP atau memiliki Kartu Keluarga Sejahtera atau terdata di Data Terpadu Kesejahteraan Sosial (DTKS) Kementeriam Sosial <br>
                5. Lulus seleksi penerimaan mahasiswa baru, dan diterima di PTN atau PTS pada Prodi dengan Akreditasi A atau B, dan dimungkinkan dengan pertimbangan tertentu pada Prodi dengan Akreditasi C',
                'lokasi_foto' => 'public/img/KIPK.png',
            ],
            [
                'nama_beasiswa' => 'Beasiswa BI',
                'penyelenggara' => 'Bank Indonesia',
                'deskripsi' => 'Beasiswa Bank Indonesia adalah beasiswa yang dari Bank Indonesia (BI) untuk mahasiswa S-1, D-4, dan D-3 di berbagai PTN dan PTS terpilih. Melalui program beasiswa ini, BI memberikan bantuan biaya kuliah, tunjangan studi, dan biaya hidup untuk GenBI (sebutan untuk penerima beasiswa).',
                'persyaratan' => '- merupakan mahasiswa aktif program S-1, D-4, dan D-3 yang dibuktikan dengan kartu tanda mahasiswa atau surat keterangan aktif <br>
                - sekurang-kurangnya telah menyelesaikan 40 SKS (S-1) serta 24 SKS (D-4 dan D-3) <br>
                - setiap mahasiswa menerima beasiswa paling lama hanya empat semester (S-1) dan dua semester (D-4 dan D-3) sepanjang memenuhi kriteria yang ada <br>
                - maksimal berusia 23 tahun atau belum berusia 24 tahun (S-1) dan maksimal berusia 22 tahun atau belum berusia 23 tahun (D-4 dan D-3) pada saat penetapan penerima beasiswa <br>
                - memiliki Indeks Prestasi Kumulatif (IPK) semester terakhir minimal 3.5 (Beasiswa S-1 Unggulan), IPK minimal 3.00 (Beasiswa S-1 Reguler, D-4, dan D-3) <br>
                - memiliki TOEFL Score (PBT atau ITP) sebesar 500; atau TOEFL iBT sebesar 61; atau TOEFL CBT sebesar 173; ataupun IELTS sebesar 6.0 dengan melampirkan dokumen pendukung (Khusus Beasiswa S-1 Unggulan) <br>
                - membuat motivation letter dan rencana karier setelah menyelesaikan studi sarjana dalam bahasa Inggris (Beasiswa S-1 Unggulan) serta dalam bahasa Indonesia (Beasiswa S-1 Reguler, D-4, dan D-3) <br>
                - tidak sedang menerima beasiswa dari lembaga lain dan/atau berada dalam status ikatan dinas dari lembaga/instansi lain <br>
                - mempunyai pengalaman menjalankan aktivitas sosial yang memiliki dampak kebermanfaatan bagi masyarakat <br>
                - bersedia untuk berperan aktif dalam mengelola dan mengembangkan Generasi Baru Indonesia (GenBI) serta berpartisipasi dalam kegiatan yang diselenggarakan oleh Bank Indonesia <br>',
                'lokasi_foto' => 'public/img/bi.jpeg',
            ],
            [
                'nama_beasiswa' => 'Djarum Beasiswa Plus',
                'penyelenggara' => 'Djarum Foundation',
                'deskripsi' => 'Program Djarum Beasiswa Plus merupakan beasiswa prestasi yang memberikan kesempatan bagi mahasiswa dari berbagai jurusan yang tengah menempuh program studi Strata 1/ Diploma 4 di perguruan tinggi negeri maupun swasta yang memiliki kerja sama (bermitra) dengan Djarum Foundation. Yang membedakan Djarum Beasiswa Plus dengan program beasiswa lain adalah, selain mendapatkan dana beasiswa selama satu tahun, Beswan Djarum (sebutan bagi penerima program Djarum Beasiswa Plus) juga mendapatkan berbagai macam pelatihan soft skills (keterampilan lunak) mengembangkan wawasan kebangsaan, membentuk karakter serta melatih kepemimpinan',
                'persyaratan' => '- Sedang menempuh pendidikan Strata 1/Diploma 4 di semester IV, dari semua disiplin ilmu <br>
                - IPK minimum 3.20 pada semester III, serta dapat mempertahankan IPK minimum 3.20 hingga akhir semester IV <br>
                - Aktif mengikuti kegiatan organisasi baik di dalam maupun luar kampus <br>
                - Tidak sedang menerima beasiswa dari pihak lain <br>
                - Kuliah di mitra Perguruan Tinggi Program Djarum Beasiswa Plus <br>',
                'lokasi_foto' => 'public/img/Djarum.jpg',
            ],
        ]);

        // Employee::factory(100)
        //     ->create();
    }
}
