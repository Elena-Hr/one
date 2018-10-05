<?php
  include "header.php";
?>

    <main role="main">
     <div class="container mt-4">
       <div class="row">
         <div class="col-md-6">
           <h3 class="text-center">Accordion</h3>
           <div class="accord">
             <h3><a href="#">Section 1</a></h3>
             <div>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repudiandae molestiae sunt fugit sit, quidem, repellendus hic deserunt quae aliquam ut ad, deleniti quibusdam reiciendis voluptates illum excepturi, maxime vitae.</p>
             </div>
             <h3><a href="#">Section 2</a></h3>
             <div>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
             </div>
             <h3><a href="#">Section 3</a></h3>
             <div>
               <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Рыбными журчит ручеек, заголовок ведущими над ты? Снова речью там инициал раз рот заглавных родного рукописи бросил, лучше! Подпоясал, раз?</p>
             </div>
           </div>
         </div>
         <div class="col-md-6">
           <h3 class="text-center">Tabs</h3>
           <div class="tabs">
             <ul>
               <li><a href="#tab1">Vkladka1</a></li>
               <li><a href="#tab2">Vkladka2</a></li>
               <li><a href="#tab3">Vkladka3</a></li>
             </ul>
             <div id="tab1">
               <img src="images/Koala.jpg" class="img-fluid" alt="">
             </div>
             <div id="tab2">
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus fugit, eveniet nesciunt, accusamus recusandae quasi id nulla asperiores dolorem rem a, numquam facilis mollitia porro nihil odio similique, ratione vero.</p>
             </div>
             <div id="tab3">
               <ul>
                 <li>Punkt 1</li>
                 <li>Punkt 2</li>
                 <li>Punkt 3</li>
                 <li>Punkt 4</li>
               </ul>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="container mt-4">
       <div class="row">
         <div class="col-md-6">
           <h3 class="text-center">Menu</h3>
           <div class="row">
             <div class="col-md-6">
               <ul class="menu">
             <li><a href="#">Punkt 1</a></li>
             <li><a href="#">Punkt 2</a>
                 <ul>
                   <li><a href="#">Punkt 2.1</a></li>
                   <li><a href="#">Punkt 2.2</a></li>
                 </ul>
             </li>
             <li><a href="#">Punkt 3</a></li>
             <li><a href="#">Punkt 4</a></li>
           </ul>
             </div>
           </div>
           
         </div>
         <div class="col-md-6">
           <h3 class="text-center">Button</h3>
           <button class="btn-jquery">Button</button>
           <a href="#" class="btn-jquery">Link</a>
         </div>
       </div>
     </div>
     <div class="container mt-4">
       <div class="row">
         <div class="col-md-6">
           <h3 class="text-center">Datepicker</h3>
           <form>
             <div class="form-group">
               <label for="datepic">Введите дату</label>
               <input  id="datepic" type="text" class="datepic form-control">
             </div>
          </form>
           
         </div>
         <div class="col-md-6">
           <h3 class="text-center">Slider</h3>
            <label for="amount">Price range:</label>
            <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
           <div class="slider-jquery"></div>
         </div>
       </div>
     </div>
     <div class="container mt-4">
       <div class="row">
         <div class="col-md-6">
           <h3 class="text-center">Dialog</h3>
           <div class="hide" title="Dialog Window">
             <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Образ парадигматическая взгляд эта приставка домах заголовок, повстречался мир переписали, коварных злых, последний то, предупредила текста. Языкового агенство щеке, выйти.</p>
           </div>
           <button class="btn-jquery btn-dial">Open Dialog</button>
         </div>
         <div class="col-md-6">
           <h3 class="text-center">Dialog Form</h3>
           <form class="hide">
             <div class="form-group">
               <label for="login">Login</label>
               <input type="text" id="login" class="form-control">
             </div>
             <div class="form-group">
               <label for="password">Password</label>
               <input type="text" id="password" class="form-control">
             </div>
             <input type="submit" class="btn btn-warning btn-lg" value="Войти">
           </form>

         </div>
       </div>
     </div>
     <div class="container mt-4">
       <div class="row">
         <div class="col-md-6">
           <h3 class="text-center">Autocomplete</h3>
           <form>
             <div class="form-group">
               <label for="lang">Введите язык программирования</label>
               <input type="text" id="lang" class="form-control lang">
             </div>
           </form>
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

      