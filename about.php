<!-- HEADER -->
<?php 
$title = 'About';
$style = [
    'assets/css/style.css'
];
// $style = 'assets/css/style.css';
include("layout/header.php") 
?>

<main>
    <section id="about">
        <div class="about" data-aos="fade-in">
            <div class="container">
                <h2 class="title">Tentang Kami</h2>
            </div>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="assets/imgs/bg.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <p>
                        Hadirnya codecourse di Indonesia diharapkan bisa menjadi alternatif pilihan untuk para lulusan
                        baru untuk meningkatkan keterampilan mereka yang mungkin saja tidak mereka dapatkan di perguruan
                        tinggi.
                        Codecourse hadir untuk membantu masyarakat Indonesia terutama lulusan baru dengan berbagai
                        pilihan kursus yang berbayar dengan kualitas pembelajaran yang mudah dimengerti. <br><br>
                        Codecourse diharapkan dapat meningkatkan keterampilan para lulusan baru di bidang Teknologi
                        Informasi dan juga mempersiapkan mereka untuk memenuhi kebutuhan dunia kerja dan juga diharapkan
                        bisa bersaing dengan tenaga kerja asing yang bekerja di Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- FOOTER -->
<?php include('layout/footer.php'); ?>