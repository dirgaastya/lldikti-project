<?php

namespace App\Http\Livewire\Components\ProfilePage;

use Livewire\Component;

class Biography extends Component
{
    public $texts = 
    [
        'Lahir di Tanjung Ratu – Lampung,14 Januari 1979. sebagai putra dari keluarga petani transmigran menghabiskan masa pendidikan dasar s.d menengah di lingkungan Madrasah/Pesantren, Kemudian menamatkan Sarjana Pendidikan Kimia di Universitas Lampung pada tahun 2001, dan melanjutkan menyelesaikan  gelar Magister Teknik (2006) dan Doktor (2009) di Universitas Indonesia dengan riset di Kyoto University, Jepang. Serta pernah menjadi visiting researcher bidang perencanaan dan evaluasi di KISTEP Korea 2010-2011.',

        'Mengawali karir di Kementerian Riset dan Teknologi pada Desember 2003, menjabat sebagai Kepala Sub Bidang Analisis Iptek Industrial Material pada tahun 2012-2013, menjabat Kepala Bidang Transfer Iptek Masyarakat (2013). Kepala Bagian Program & Anggaran pada Kementerian Riset dan Teknologi (2013-2015), Selanjutnya saat perubahan nomenklatur Kementerian Riset Teknologi dan Pendidikan Tinggi (Kemenristekdikti) dipercaya untuk menjabat sebagai Kepala Bagian Monitoring dan Evaluasi Program & Anggaran Kemenristekdikti (2015-2018).',

        'Selanjutnya mendapat promosi menjadi Sekretaris LLDIKTI Wilayah III Jakarta pada (Juli 2018 – April 2020), dan menjadi Plt.Kepala LLDIKTI Wilayah III Jakarta (Sept 2019 – April 2020).',

        'Pada April 2020 sampai dengan 2022 menjabat sebagai Kepala Biro Perencanaan pada Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi. Sejak 6 Januari 2022 kembali dipercaya dan dilantik menjadi Kepala LLDIKTI Wilayah IV Jawa Barat dan Banten Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi  hingga saat ini.',   
    ];
    public function render()
    {
        return view('livewire.components.profile-page.biography');
    }
}
