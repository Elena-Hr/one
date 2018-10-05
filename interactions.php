<?php
  include "header.php";
?>

    <main role="main">
     <div class="container mt-4">
       <div class="row">
         <div class="col-md-12">
           <h3 class="text-center">Draggable</h3>
         </div>
         <div class="col-md-4">
           <img src="images/Koala.jpg" class="img-fluid drag" alt="">
         </div>
         <div class="col-md-4">
           <img src="images/Hydrangeas.jpg" class="img-fluid drag" alt="">
         </div>
         <div class="col-md-4">
           <img src="images/Jellyfish.jpg" class="img-fluid drag" alt="">
         </div>
       </div>
     </div>
     <div class="container mt-4">
       <div class="row">
         <div class="col-md-12">
           <h3 class="text-center">Droppable and Draggable</h3>
         </div>
         <div class="col-md-8">
           <img src="images/Koala.jpg" class="drag1" alt="" width="200">
           <img src="images/Jellyfish.jpg" width="200" class="drag1" alt="">
           <img src="images/Chrysanthemum.jpg" class="drag1" width="200" alt="">
         </div>
         <div class="col-md-3 offset-md-1">
           <img src="images/trashcan-empty-icon.png" class="trash ml-4" alt="">
         </div>
       </div>
     </div>
     <div class="container mt-4">
       <div class="row">
         <div class="col-md-12">
           <h3 class="text-center">Sortable</h3>
         </div>
         <div class="col-md-6">
           <ul class="sort1">
             <li class="ui-state-default"><a href="#">Punkt 1</a></li>
             <li class="ui-state-default"><a href="#">Punkt 2</a></li>
             <li class="ui-state-default"><a href="#">Punkt 3</a></li>
             <li class="ui-state-default" ><a href="#">Punkt 4</a></li>
             <li class="ui-state-default"><a href="#">Punkt 5</a></li>
           </ul>
         </div>
         <div class="col-md-6">
           <ul class="sort2">
             <li class="ui-state-default"><a href="#">Punkt 2.1</a></li>
             <li class="ui-state-default"><a href="#">Punkt 2.2</a></li>
             <li class="ui-state-default"><a href="#">Punkt 2.3</a></li>
             <li class="ui-state-default"><a href="#">Punkt 2.4</a></li>
             <li class="ui-state-default"><a href="#">Punkt 2.5</a></li>
           </ul>
         </div>
       </div>
     </div>
     <div class="container mt-4">
       <div class="row">
         <div class="col-md-12">
           <h3 class="text-center">Resizable</h3>
         </div>
          <div class="col-md-4">
            <div class="card resize">
              <img src="images/Koala.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta omnis, aperiam reprehenderit ullam, aut saepe, earum repellat quisquam mollitia ut quae explicabo alias est fugit laudantium officiis quis iure tempora!</p>
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

      