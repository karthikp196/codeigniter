<?php
include('header.php')
?>

<div class="w-100">


<div class="w-75 mx-auto">
<!--events-->
<div class="alert alert-danger" id="err_f" role="alert">
  
</div>

<div class="alert alert-success" id="succ_f" role="alert">
  
</div>
<!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Testimonials</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
    <a href="" class="btn btn-default btn-rounded mb-4 float-right" data-toggle="modal" data-target="#modalContactForm">Add Testimonials</a>
    
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Person Name</th>
            <th class="text-center">Year</th>
            <th class="text-center">Month</th>
            <th class="text-center">Month no</th>
            <th class="text-center">Day</th>
            <th class="text-center">Date</th>
            <th class="text-center">Details</th>
            
            <th class="text-center">Remove</th>
            <th class="text-center">update</th>
          </tr>
        </thead>
        <tbody>

      <?php
      foreach($testimonials->result() as $row)
      {
      ?>

          <tr>
            <td class="pt-3-half" id="event_name_" contenteditable="true"><?php echo $row->person_name; ?></td>
            <td class="pt-3-half" id="event_time_" contenteditable="true"><?php echo $row->year; ?></td>
            <td class="pt-3-half" id="event_brief_" contenteditable="true"><?php echo $row->month; ?></td>
            <td class="pt-3-half" id="event_days_" contenteditable="true"><?php echo $row->monthno; ?></td>
            <td class="pt-3-half" id="event_end_" contenteditable="true"><?php echo $row->day; ?></td>
            <td class="pt-3-half" id="event_end_" contenteditable="true"><?php echo $row->date_d; ?></td>
            <td class="pt-3-half" id="event_end_" contenteditable="true"><?php echo $row->details; ?></td>
            
            <td>
              <span class="table-remove">
                <button id="<?php echo $row->tid; ?>" type="button"
                    class="btn btn-danger btn-rounded btn-sm my-0 rem_tstm">Remove
                    </button>
              </span>
            </td>
            <td>
              <span class="table-remove"><button id="<?php echo $row->tid; ?>" type="button"
                  class="btn btn-primary btn-rounded btn-sm my-0 upd_tstm">Update</button></span>
            </td>
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
<!-- Editable table -->
<!-- end of events -->
</div>
</div>

<!--model -->

<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Testimonials</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-calendar-week prefix grey-text"></i>
          <input type="text" id="form34" class="form-control validate tstm_name">
          <label data-error="wrong" data-success="right" for="form34">Person Name</label>
        </div>

        <div class="md-form mb-5">
        <i class="fas fa-calendar-week prefix grey-text"></i>
          <input type="text" id="form35" class="form-control validate tstm_year">
          <label data-error="wrong" data-success="right" for="form35">Year</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-tag prefix grey-text"></i>
          <input type="text" id="form32" class="form-control validate tstm_month">
          <label data-error="wrong" data-success="right" for="form32">Month</label>
        </div>

        <div class="md-form">
        <i class="fas fa-clock prefix grey-text"></i>
          <input type="text" id="form36" class="form-control validate tstm_monthno">
          <label data-error="wrong" data-success="right" for="form36">Month No</label>
        </div>

        <div class="md-form">
        <i class="fas fa-clock prefix grey-text"></i>
          <input placeholder="Selected day" type="text" id="date-picker-example" class="form-control datepicker tstm_day">
          <label for="date-picker-example">Day</label>
        </div>

        <div class="md-form">
        <i class="fas fa-clock prefix grey-text"></i>
          <input placeholder="Selected date" type="text" id="date-picker-example" class="form-control datepicker tstm_date">
          <label for="date-picker-example">Date</label>
        </div>

        <div class="md-form">
        <i class="fas fa-clock prefix grey-text"></i>
          <input placeholder="enter details" type="text" id="date-picker-example" class="form-control datepicker tstm_detail">
          <label for="date-picker-example">Details</label>
        </div>


      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-unique" id="add_tstm">Add Testimonials <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>



<!-- end of model -->

<?php
include('footer.php');
?>