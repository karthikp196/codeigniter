<?php
include('header.php')
?>

<div class="container-fluid">

<h3 class="text-center mt-3">Caramel Gallery</h3>

<div class="alert alert-success" id="succ_f" role="alert">
  
</div>


<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4"> Gallery</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
    <a href="" class="btn btn-default btn-rounded mb-4 float-right" data-toggle="modal" data-target="#modalContactForm">Add Image</a>
    
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Image Year</th>
            <th class="text-center">Image Month</th>
            <th class="text-center">Image Details</th>
            <th class="text-center">Image</th>
            <th class="text-center">Choose Image</th>
            
            <th class="text-center">Remove</th>
            <th class="text-center">update</th>
          </tr>
        </thead>
        <tbody>

      <?php
      foreach($gallery->result() as $row)
      {
      ?>

          <tr>
          
          <form method="post" action="http://localhost/caramel/admin/controller/gallery">
            <td> <input type="text" value="<?php echo $row->img_year; ?>"> </td>
            <td> <input type="text" value="<?php echo $row->img_month; ?>"></td>
            <td><input type="text" value="<?php echo $row->img_detail; ?>"></td>
            <td> <div style="width:100px; height:auto;"><img class="responsive" src="http://localhost/caramel/<?php echo $row->img_src ?>.jpg" alt=""></div> </td>
            <td> <input type="file"></td>
            <td> <input class="btn btn-primary btn-rounded btn-sm my-0  waves-effect waves-light" value="update" type="submit"></td>
            
            <td>
              <span class="table-remove"><button id="" type="button"
                  class="btn btn-danger btn-rounded btn-sm my-0 rem_event">Remove</button></span>
            </td>
           
          </form>

          </tr>
      <?php
      }
      ?>
          <!-- This is our clonable table line -->
        </tbody>
      </table>
    </div>
  </div>
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
