<?php 
$title = "Success";
$style = [
  'assets/css/style.css',
  './success.css'
];

include('./layout/header.php') 
?>

  <div class="success">
    <div class='content'>
      <div class='fa fa-check-circle-o symbol'></div>
      <div class='title'>
        <p>Terima Kasih</p>
      </div>
      <div class='text'>
        <p>Pesan anda sudah kami terima</p>
      </div>
      <a href="index.php"><button class="btn">halaman awal</button></a>
    </div>
  </div>
<?php include('layout/footer.php') ?>