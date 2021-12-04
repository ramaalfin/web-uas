<!-- HEADER -->
<?php 
$title = 'Home';
$style = [
    'assets/css/style.css'
];
// $style = 'assets/css/style.css';
include("layout/header.php") 
?>

<?php
$data = file_get_contents('data/kursus.json');
$kursus = json_decode($data, true);

$kursus = $kursus["kursus"];
?>

<!-- MAIN -->
<section id="home" data-aos="fade-in">
    <div class="container" data-aos="fade-right">
        <h5 class="text-uppercase">pendatang baru</h5>
        <h1 class="text-capitalize"><span>harga terbaik</span> untuk tahun ini</h1>
        <p>codecourse menyediakan kursus terbaik dengan harga yang terjangkau</p>
    </div>
</section>

<!-- COURSES -->
<section id="webdev" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5" data-aos="fade-in">
        <h3>Pengembangan Web</h3>
        <hr class="mx-auto">
        <p>dibawah ini adalah kumpulan kursus pengembangan web</p>
    </div>

    <div class="row mx-auto container-fluid" data-aos="fade-left">

        <?php foreach($kursus as $row) { ?>

        <?php if($row && $row['kategori'] == "Pengembangan Web"){ ?>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <div class="img">
                <img src="assets/imgs/<?= $row['gambar'] ?>" alt="<?= $row['nama'] ?>" class="img-fluid mb-3">
            </div>
            <div class="details">
                <button class="buy-btn" type="button" data-toggle="modal" data-target="#detail"
                    data-detail-title="<?= $row['nama'] ?>" data-detail-desc="<?= $row['keterangan'] ?>"
                    data-detail-img="<?= $row['gambar'] ?>" data-detail-kategori="<?= $row['kategori'] ?>"
                    data-detail-harga="<?= $row['harga'] ?>" data-detail-siswa="<?= $row['siswa'] ?>"
                    data-detail-guru="<?= $row['guru'] ?>"
                    data-detail-list="<?= implode("", $row['list']); ?>">Detail</button>
            </div>
        </div>

        <?php } ?>

        <?php } ?>
    </div>
</section>

<section id="mobdev" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5" data-aos="fade-in">
        <h3>Pengembangan Aplikasi</h3>
        <hr class="mx-auto">
        <p>dibawah ini adalah kumpulan kursus pengembangan aplikasi</p>
    </div>

    <div class="row mx-auto container-fluid" data-aos="fade-right">
        <?php foreach($kursus as $row) { ?>
        <?php if($row && $row['kategori'] == "Pengembangan Aplikasi"){ ?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img src="assets/imgs/<?= $row['gambar'] ?>" alt="<?= $row['nama'] ?>" class="img-fluid mb-3">
            <div class="details">
                <button class="buy-btn" type="button" data-toggle="modal" data-target="#detail"
                    data-detail-title="<?= $row['nama'] ?>" data-detail-desc="<?= $row['keterangan'] ?>"
                    data-detail-img="<?= $row['gambar'] ?>" data-detail-kategori="<?= $row['kategori'] ?>"
                    data-detail-harga="<?= $row['harga'] ?>" data-detail-siswa="<?= $row['siswa'] ?>"
                    data-detail-guru="<?= $row['guru'] ?>" data-detail-list="<?= implode("", $row['list']); ?>">Detail</button>
            </div>
        </div>
        <?php } ?>
        <?php } ?>
    </div>
</section>

<section id="basprog" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5" data-aos="fade-in">
        <h3>Pemrograman Dasar</h3>
        <hr class="mx-auto">
        <p>dibawah ini adalah kumpulan kursus pemrograman dasar</p>
    </div>

    <div class="row mx-auto container-fluid" data-aos="fade-left">
        <?php foreach($kursus as $row) { ?>

        <?php if($row && $row['kategori'] == "Pemrograman Dasar"){ ?>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img src="assets/imgs/<?= $row['gambar'] ?>" alt="<?= $row['nama'] ?>" class="img-fluid mb-3">
            <div class="details">
                <button class="buy-btn" type="button" data-toggle="modal" data-target="#detail"
                    data-detail-title="<?= $row['nama'] ?>" data-detail-desc="<?= $row['keterangan'] ?>"
                    data-detail-img="<?= $row['gambar'] ?>" data-detail-kategori="<?= $row['kategori'] ?>"
                    data-detail-harga="<?= $row['harga'] ?>" data-detail-siswa="<?= $row['siswa'] ?>"
                    data-detail-guru="<?= $row['guru'] ?>" data-detail-list="<?= implode($row['list']); ?>">
                    Detail</button>
            </div>
        </div>

        <?php } ?>

        <?php } ?>
    </div>
</section>

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Kursus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="img">
                                <img alt="" class="img-responsive detail-img">
                                <div class="harga">
                                    <p>Rp <span class="detail-harga"></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="content">
                                <span class="detail-kategori"></span>
                                <h4 class="detail-title font-weight-bold"></h4>
                                <p class="detail-desc"></p>
                                <p class="siswa">Siswa <span class="detail-siswa"></span></p>
                                <p>Dibuat oleh <span class="detail-guru"></span></p>
                                <hr>
                                <h4>Apa yang akan anda pelajari :</h4>
                                <div class="detail-list">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <p class="logo-txt"><span>code</span>course</p>
            </div>
        </div>
    </div>
</div>
<!-- FOOTER -->
<?php include('layout/footer.php'); ?>