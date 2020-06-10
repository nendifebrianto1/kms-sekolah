<?php 

include "../init.php";
?>
<style>
.main {
    padding: 0px 20px;
}
</style>
<div class="container">
    <div class="card">
        <div class="card-header">
            Profile SMP Islam Al Muntaaz
        </div>
        <div class="main">

            <center>
                <h2>SMP ISLAM AL MUMTAAZ</h2>
            </center>

            <dl>
                <dt><b>I. Visi dan Misi Unit Sekolah Menengah Pertama Islam Al Mumtaaz</b></dt>
                <dd>VISI</dd>
                <dd>Menjadi Penyelenggara pendidikan di Tingkat Menengah Pertama, yang bekerja dengan semangat
                    keikhlasan
                    untuk membangun generasi Robbani kader pemimpin masa depan yang akan mewujudkan peradaban Islam
                    sebagai
                    rahmatan lil’alamin.
                </dd>

                <br>
                <dd>MISI</dd>
                <dd>
                    <ul type=''>
                        <li>Terselenggaranya Pendidikan inklusif berkesinambungan yang ramah fitrah (fitrah Ilahiah,
                            belajar, perkembangan dan bakat), dengan pendekatan belajar berbasis proyek untuk siswa usia
                            13-15 tahun.</li>
                        <li>Terbangunnya 10 Sifat Pribadi Muslim (Muwashofat Tarbiyah) pada diri peserta didik yaitu :
                            <ul>
                                <li>Akidah yang lurus</li>
                                <li>Ibadah yang benar</li>
                                <li>Akhlak yang kokoh</li>
                                <li>Jasmani yang kuat</li>
                                <li>Wawasan yang luas</li>
                                <li>Mandiri</li>
                                <li>Teratur urusannya</li>
                                <li>Pandai menjaga waktu</li>
                                <li>Bermanfaat bagi sesama</li>
                            </ul>
                        </li>

                        <li>Terwujudnya Sifat Kepemimpinan dan kemampuan membangun kerjasama efektif pada siswa.</li>
                        <li>Tercapainya kemampuan tahsin dan tahfizd dengan standar bacaan yang faseh dan bersanad.</li>
                        <li>Terbangunnya pemahaman Siswa tentang makna dan pesan-pesan Al Qur’an.</li>
                        <li>Terbangunnya pribadi yang mencintai dan mengamalkan Al Qur’an dalam kehidupan.</li>
                        <li>Membangun SDM guru yang ikhlas, berkepribadian Muslim (10 Muwashofat Tarbiyah), memenuhi
                            standar
                            kompetensi guru Al Mumtaaz, dan profesional.</li>
                    </ul>
                </dd>

                <br>
                <dt><b>II. Struktur Organisasi Unit SMP 5-8</b></dt>
                <?php 
                $data = $admin->tampil('profile','ket','smp');
                while ($row = $data->fetch_object()) {
                ?>
                <img src="../assets/uploads/organisasi/<?= $row->struktur ?>" width="100%">
                <?php }?>

        </div>
    </div>
</div>