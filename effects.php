<?php
  include "header.php";
?>

    <main role="main">

      <div class="container mt-4">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center">Effects</h2>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="images/Jellyfish.jpg"  class="img-fluid pic1" alt="">
              <div class="card-body text-center">
                <button class="btn btn-primary btn-lg puff_effect">Effect puff</button>
              </div>
            </div>
            
          </div>
          <div class="col-md-4">
             <div class="card">
              <img src="images/Hydrangeas.jpg"  class="img-fluid pic2" alt="">
              <div class="card-body text-center">
                <button class="btn btn-primary btn-lg bounce_effect">Effect bounce</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="explode"></div>
              <div class="card-body text-center">
                <button class="btn btn-primary btn-lg explode_effect">Effect explode</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-4">
         <div class="row">
            <div class="col-md-12">
              <h3 class="text-center">Show/Hide</h3>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img src="images/Koala.jpg"  class="img-fluid pic3"  alt="">
                <div class="card-body">
                  <button class="btn btn-warning btn-lg btn_show">Show</button>
                  <button class="btn btn-warning btn-lg btn_hide">Hide</button>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="effect_show"></div>
                <div class="card-body">
                  <button class="btn btn-warning btn-lg btn_show1">Show</button>
                  <button class="btn btn-warning btn-lg btn_hide1">Hide</button>
                </div>
              </div>
            </div>
         </div>
      </div>
      <div class="container mt-4">
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-center">Add Class/Remove Class/Switch Class</h3>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="div">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt accusantium ut, impedit cum soluta natus dolores ab totam molestiae hic, tempora quae voluptatem maxime deleniti praesentium. Maxime possimus, sequi!</p>
              </div>
              <div class="card-body">
                <button class="btn btn-danger btn-lg ad_class">Add Class</button>
                <button class="btn btn-danger btn-lg rm_class">Remove Class</button>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="div1">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt accusantium ut, impedit cum soluta natus dolores ab totam molestiae hic, tempora quae voluptatem maxime deleniti praesentium. Maxime possimus, sequi!</p>
              </div>
              <div class="card-body">
                <button class="btn btn-danger btn-lg sw_class">Switch Class</button>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-center">Color Animation</h3>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="animate">
                <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Собрал lorem сих возвращайся послушавшись запятой даже, дал что! Языком за правилами обеспечивает путь курсивных агенство, снова рыбного рот заглавных!</p>
              </div>
              <div class="card-body">
                <button class="btn btn-default btn-lg btn_anim">Color animate</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing mt-4">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->
      <?php 
      include "footer.php";
      ?>

      