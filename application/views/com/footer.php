</body>
<footer>
    <div class="row">
        <div class="container">
            <div class="col-sm-4 text-center">
                &copy; Navnet På Sjappa <?=date('Y');?> <br>
                <a href="#">Site map</a>
            </div>
            <div id="footer-middle" class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12 text-center text-uppercase">
                        Follow us on <br> <a href="#">Facebook</a> and <a href="#">Instagram</a>
                    </div>
                </div>
                <div id="footer-links" class="row">
                    <div class="col-sm-12 text-center">
                        <a href="#"><i class="fa fa-facebook-square fa-3x"></i></a>
                        <a href="#"><i class="fa fa-instagram fa-3x"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                Loading time: <?=$this->benchmark->elapsed_time();?><br>
                Target time: 0.0001 <br>
                Memory usage: <?=$this->benchmark->memory_usage();?>
            </div>
        </div>
    </div>
</footer>
</html>