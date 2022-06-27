<?php

namespace App\Http\Livewire\Components\ProfilePage;

use Livewire\Component;

class Sambutan extends Component
{
    public $texts = 
    [
        'Kami ucapkan selamat datang di website LLDIKTI Wilayah IV Jawa Barat dan Banten,  dalam rangka meningkatkan kualitas pelayanan publik dan pemanfaatan teknologi internet di LLDIKTI Wilayah IV agar menjadi efektif, efisien, transparan dan akuntabel kepada masyarakat, Alhamdulillah website LLDIKTI Wilayah IV kini dapat menghadirkan dan menyajikan sumber informasi online sebagai sarana unutk menyampaikan informasi terkini yang dapat diakses langsung oleh masyarakat luas.',
        'Dalam mengakomodir aspirasi masyarakat untuk memperoleh informasi yang dapat diandalkan, terpercaya, mudah didapat, dan tersaji secara interaktif, keberadaan internet ini merupakan sarana untuk lebih mempermudah dan mempercepat komunikasi kami dengan 489 Perguruan Tinggi Swasta (PTS) yang tersebar di wilayah Jawa Barat dan Banten khususnya dan juga dengan masyarakat pada umumnya.',
        'Secara struktural LLDIKTI Wilayah IV Jawa Barat dan Banten merupakan unit pelaksana teknis Direktorat Jenderal Pendidikan Tinggi yang melaksanakan tugas Pembinaan, Pengendalian, dan Pengawasan (BINDALWAS) kepada PTS berdasarkan Peraturan Menteri Pendidikan dan Kebudayaan RI Nomor 1 Tahun 2013 tentang Organisasi dan Tata Kerja Koordinasi Perguruan Tinggi Swasta, dan saat ini berubah bentuk menjadi Lembaga Layanan Pendidikan Tinggi (LLDIKTI) berdasarkan Pemenristekdikti no.15 tahun 2018. LLDIKTI berfungsi membantu meningkatkan mutu penyelenggaraan Pendidikan Tinggi.',
        'Indikator mutu penyelenggaraan pendidikan merupakan satuan kerja pemerintah yang berfungsi membantu meningkatkan mutu penyelenggaraan Pendidikan Tinggi. Indikator mutu penyelenggaraan pendidikan tinggi yaitu terlampauinya Standard Nasional Pendidikan Tinggi yang dilaksanakan oleh setiap perguruan tinggi swasta',
        'Salah satu kewajiban yang harus dipenuhi oleh perguruan tinggi adalah menyampaikan data dan informasi penyelenggaraan perguruan tinggi setiap akhir semester yang dapat di input langsung melalui aplikasi Feeder Online Pangkalan Data Pendidikan Tinggi (PDDIKTI) yang menjadi dasar dan sumber informasi perguruan tinggi secara nasional.',
        'Website ini disediakan sebagai sarana edukasi, publikasi dan informasi kegiatan LLDIKTI Wilayah IV yang terkait dengan BINDALWAS, oleh karena itu, kami berharap agar semua stakeholders dapat memanfaatkan fasilitas yang kami sediakan untuk kemajuan dunia pendidikan tinggi di wilayah Jawa Barat dan Banten.',
        'Kami menyadari bahwa website LLDIKTI Wilayah IV masih banyak kekurangan, oleh karena itu masukan dan saran dapat disampaikan untuk peningkatan kualitas website maupun contents yang perlu ditampilan. Akhirnya kami mengucapkan terima kasih kepada semua pihak yang terlibat atas partisipasi yang telah di berikan.'
    ];

    public function render()
    {
        return view('livewire.components.profile-page.sambutan');
    }
}
