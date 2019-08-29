<?php
include('header.php')
?>

<div class="container">

<h3 class="text-center mt-3">Caramel Videos</h3>

<div class="alert alert-success" id="succ_f" role="alert">
  
</div>

<div class="text-center mt-2 mb-2">
<!-- Button trigger modal-->
<button type="button" class="btn blue-gradient"  data-toggle="modal" data-target="#modalSocial">Add New Video</button>
</div>


<div class="row">

<?php
      foreach($videos->result() as $row)
      {
?>

<div class="col-lg-4 col-sm-3 col-xs-12">
<!-- Card Narrower -->
<div class="card card-cascade narrower mb-2">

  <!-- Card image -->
  <div class="view view-cascade">
  <iframe class="card-img-top" width="369.984" height="294.469" src="<?php echo $row->v_src; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <!-- <img  class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" alt="Card image cap"> -->
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade">

    <!-- Label -->
    <h5 class="pink-text pb-2 pt-1"><i class="fas fa-video"></i> Videos</h5>
    <!-- Title -->
    <h4 class="font-weight-bold card-title"><?php echo $row->v_name; ?></h4>
    <!-- Text -->
    <p class="card-text"><?php echo $row->v_name; ?></p>
    <!-- Button -->
    <a id="<?php echo $row->v_id; ?>" class="btn btn-danger dlt_v">Delete</a>

  </div>


</div>
<!-- Card Narrower -->
</div>

<?php
      }
?>

</div>
 
</div>

<!-- Add video popup -->



<!--Modal: modalSocial-->
<div class="modal fade" id="modalSocial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">

    <!--Content--> 
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header light-blue darken-3 white-text">
        <h4 class="title"><i class="fas fa-video"></i> Add a New Video!</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>

      <!--Body-->
      <div class="modal-body mb-0 text-center">

      <div class="md-form">
        <input type="text" id="vid_name" class="form-control">
        <label for="vid_name">Video Title</label>
      </div>

      <div class="md-form">
        <input type="text" id="vid_src" class="form-control">
        <label for="vid_src">Youtube Link</label>
      </div>

      <button id="upld_video" class="btn aqua-gradient">upload Video</button>
      </div>

    </div>
    <!--/.Content-->

  </div>
</div>
<!--Modal: modalSocial-->

<!--popup end -->

<?php
include('footer.php')
?>
