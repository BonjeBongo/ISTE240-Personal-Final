    <!-- footer -->
    <button class="btn btn-lg" onclick="toTop()" id="topBtn" title="Go to top">
      <img src="<?php echo $currentPath;?>assets/images/up-arrow.svg" class="img-fluid" alt="Back To Top"/>
    </button>
    <footer class="footer container-fluid py-5 text-center">
      <div class="row">
        <div class="col-xl-3 mx-md-auto col-lg-4 col-sm-12">
          <a href="<?php echo $goHome;?>">
            <img src="<?php echo $currentPath;?>assets/images/denv-co-lg.svg" width=250 height=100 alt="Logo of Denver Colorado">
          </a>
          <small class="d-block mb-3 text-muted">2018</small>
        </div>
        <div class="col-xl-3 mx-md-auto col-lg-4 col-sm-12">
          <h5>Featured</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted btn" href="<?php echo $goHist;?>">About Denver</a></li>
            <li><a class="text-muted btn" href="<?php echo $goLand;?>">Places of Interest</a></li>
            <li><a class="text-muted btn" href="<?php echo $goRest;?>">Restaurants</a></li>
            <li><a class="text-muted btn" href="<?php echo $goEvt;?>">Events</a></li>
            <li><a class="text-muted btn" href="<?php echo $goHtl;?>">Hotels</a></li>
            <li><a class="text-muted btn" href="<?php echo $goSrv;?>">Survey</a></li>
            <li><a class="text-muted btn" href="<?php echo $goComm;?>">Comment</a></li>
          </ul>
        </div>
        <div class="col-xl-3 mx-md-auto col-lg-4 col-sm-12">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted btn" href="<?php echo $goRess;?>">Resources Used</a></li>
            <li><a class="text-muted btn" href="<?php echo $goRoob;?>">Rubric</a></li>
            <li><a class="text-muted btn" href="http://validator.w3.org/check/referer" rel="nofollow" title="Validate as HTML5">HTML5 Validation</a></li>
            <li><a class="text-muted btn" href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" rel="nofollow" title="Validate as CSS3">CSS3 Validation</a></li>
          </ul>
        </div>
        <div class="col-xl-3 mx-md-auto col-lg-4 col-sm-12">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted btn" target="_blank" href="https://people.rit.edu/stv9643/iste240/">Development Team</a></li>
            <li><a class="text-muted btn" href="<?php echo $goCont;?>">Contact Us</a></li>
            <li><p class="text-muted">
                <?php
                    if (file_exists(__FILE__)) {
                        echo "Last Modified: " . date ("l, F d Y h:ia", filemtime(__FILE__));
                    }
                ?>
            </p></li>
          </ul>
        </div>
      </div>
    </footer>
    <!-- Bootstrap JS CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- my js -->
    <script src="assets/js/toTop.js"></script>
  </body>
</html>
