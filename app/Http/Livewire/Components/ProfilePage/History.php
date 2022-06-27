<?php

namespace App\Http\Livewire\Components\ProfilePage;

use Livewire\Component;

class History extends Component
{
    public $texts = 
    [
        'Sejarah perkembangan Kopertis dimulai dengan terbitnya Surat Keputusan Menteri Pendidikan dan Kebudayaan Republik Indonesia Nomor 1/PK/1968 tanggal 17 Februari 1968. Berdasarkan keputusan tersebut dibentuk Koordinator Perguruan Tinggi (KOPERTI) yang mempunyai fungsi sebagai aparatur konsultatif dengan Kepala Kantor Perwakilan Pendidikan dan Kebudayaan setempat. Sehubungan dengan makin bertambahnya pendirian perguruan tinggi terutama Perguruan Tinggi Swasta, maka Menteri Pendidikan dan Kebudayaan mengeluarkan Surat Keputusan Nomor 079/O/1975 tanggal 17 April 1975 yang membatasi ruang lingkup kerja Koordinator Perguruan Tinggi, khususnya untuk memberikan pelayanan kepada Perguruan Tinggi Swasta maka Koordinator Perguruan Tinggi (KOPERTI) di rubah menjadi Koordinator Perguruan Tinggi Swasta (KOPERTIS).',

        'Dalam rangka penyesuaian dengan perkembangan di bidang pengelolaan Perguruan Tinggi Swasta, Menteri Pendidikan dan Kebudayaan menerbitkan Surat Keputusan No. 062/O/1982 dan No. 0135/O/1990 tanggal 15 Maret 1990, tentang Organisasi dan Tata Kerja Koordinator Perguruan Tinggi Swasta yang didalamnya selain mengatur susunan organisasi dan tata kerja Kopertis juga merubah Wilayah kerja menjadi 12 Wilayah terdiri dari KOPERTIS Wilayah I Medan, KOPERTIS Wilayah II Palembang, KOPERTIS Wilayah III Jakarta, KOPERTIS Wilayah IV Bandung, KOPERTIS Wilayah V Yogyakarta, KOPERTIS Wilayah VI Semarang, KOPERTIS Wilayah VII Surabaya, KOPERTIS Wilayah VIII Bali, KOPERTIS Wilayah IX Ujung Pandang, KOPERTIS Wilayah X Padang, KOPERTIS Wilayah XI Banjarmasin, dan KOPERTIS Wilayah XII Ambon.',

        'Dengan semakin berkembangnya Perguruan Tinggi Swasta, Kementerian Pendidikan dan Kebudayaan mengeluarkan Peraturan Menteri Pendidikan dan Kebudayaan Republik Indonesia No. 1 tahun 2013 jo No. 42 tahun 2013. Organisasi dan Tata Kerja Kopertis kembali merubah wilayah kerja menjadi 14 Wilayah dengan bertambahnya Kopertis Wilayah XIII Aceh dan Kopertis Wilayah XIV Papua. Dengan adanya peraturan ini juga beberapa bagian ada yang berubah nama sekaligus merubah uraian tugas bagian tersebut karena sudah tidak sesuai dengan perkembangan pendidikan tinggi sekarang.',

        'Sesuai peraturan Meteri Riset, Teknologi, dan Pendidikan Tinggi Republik Indonesia nomor 15 tahun 2018 tentang Organisasi dan Tata Kerja Lembaga Layanan Pendidikan Tinggi, maka tahun 2018 Kopertis berubah nama menjadi LLDIKTI yang dipimpin oleh seorang Kepala. LLDIKTI berada di bawah dan bertanggung jawab kepada Menteri Riset, Teknologi, dan Pendidikan Tinggi.'
    ];

    public function render()
    {
        return view('livewire.components.profile-page.history');
    }
}
