   <!-- footer -->
   <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <a class="logo-txt" href="index.html"><span>code</span>course</a>
                <p class="pt-3">We provide the best courses for the most affordable prices</p>
            </div>

            <div class="footer one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">Contact Us</h5>
                <div>
                    <h6 class="text-uppercase">Address</h6>
                    <p>Jakarta, Indonesia</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Phone Number</h6>
                    <p>+62 838 - 7976 - 5775</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Email</h6>
                    <p>codecourse@gmail.com</p>
                </div>
            </div>

            <!-- instagram link our team of grup 8 -->
            <div class="footer one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">Get Us !</h5>
                <div class="row">
                    <a href="https://www.facebook.com" class="fab fa-facebook"></a>
                    <a href="https://www.instagram.com" class="fab fa-instagram"></a>
                    <a href="https://www.linkedin.com" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="copyright mt-5">
            <div class="row container mx-auto">
                <div class="mx-auto">
                    <p>eCommerce @ 2021 All Right Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        $('.buy-btn').click(function(){
            $('.detail-img').attr('src', 'assets/imgs/' + $(this).data('detail-img'))
            $('.detail-kategori').html($(this).data('detail-kategori'))
            $('.detail-title').html($(this).data('detail-title'))
            $('.detail-desc').html($(this).data('detail-desc'))
            $('.detail-guru').html($(this).data('detail-guru'))
            $('.detail-harga').html($(this).data('detail-harga'))
            $('.detail-bahasa').html($(this).data('detail-bahasa')) 
            $('.detail-siswa').html($(this).data('detail-siswa'))
        })
    </script>
    <!-- <script src="./assets/js/script.js"></script> -->

</body>

</html>