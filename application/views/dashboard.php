<?php
if(!($this->session->userdata('user_id'))){
  header('Location: http://localhost/caramel/admin');
}

else
{
  include('header.php');
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
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Upcoming Events</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
    <a href="" class="btn btn-default btn-rounded mb-4 float-right" data-toggle="modal" data-target="#modalContactForm">Add Event</a>
    
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Event Name</th>
            <th class="text-center">Time</th>
            <th class="text-center">Brief</th>
            <th class="text-center">Days</th>
            <th class="text-center">End Date</th>
            
            <th class="text-center">Remove</th>
            <th class="text-center">update</th>
          </tr>
        </thead>
        <tbody>

      <?php
      foreach($events->result() as $row)
      {
      ?>

          <tr>
            <td class="pt-3-half" id="event_name_<?php echo $row->id; ?>" contenteditable="true"><?php echo $row->event_name; ?></td>
            <td class="pt-3-half" id="event_time_<?php echo $row->id; ?>" contenteditable="true"><?php echo $row->time; ?></td>
            <td class="pt-3-half" id="event_brief_<?php echo $row->id; ?>" contenteditable="true"><?php echo $row->brief; ?></td>
            <td class="pt-3-half" id="event_days_<?php echo $row->id; ?>" contenteditable="true"><?php echo $row->days; ?></td>
            <td class="pt-3-half" id="event_end_<?php echo $row->id; ?>" contenteditable="true"><?php echo $row->end_date; ?></td>
            
            <td>
              <span class="table-remove"><button id="<?php echo $row->id; ?>" type="button"
                  class="btn btn-danger btn-rounded btn-sm my-0 rem_event">Remove</button></span>
            </td>
            <td>
              <span class="table-remove"><button id="<?php echo $row->id; ?>" type="button"
                  class="btn btn-primary btn-rounded btn-sm my-0 edit_event">Update</button></span>
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
        <h4 class="modal-title w-100 font-weight-bold">Add Events</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-calendar-week prefix grey-text"></i>
          <input type="text" id="form34" class="form-control validate ev_name">
          <label data-error="wrong" data-success="right" for="form34">Event Name</label>
        </div>

        <div class="md-form mb-5">
        <i class="fas fa-calendar-week prefix grey-text"></i>
          <input type="text" id="form35" class="form-control validate ev_time">
          <label data-error="wrong" data-success="right" for="form35">Event Timing</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-tag prefix grey-text"></i>
          <input type="text" id="form32" class="form-control validate ev_brief">
          <label data-error="wrong" data-success="right" for="form32">Brief</label>
        </div>

        <div class="md-form">
        <i class="fas fa-clock prefix grey-text"></i>
          <input type="text" id="form36" class="form-control validate ev_days">
          <label data-error="wrong" data-success="right" for="form36">Days</label>
        </div>

        <div class="md-form">
        <i class="fas fa-clock prefix grey-text"></i>
          <input placeholder="Selected date" type="text" id="date-picker-example" class="form-control datepicker ev_enddate">
          <label for="date-picker-example">End Date</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-unique" id="upd_event">Add Event <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>

<?php
}
?>


<!-- end of model -->

<?php
include('footer.php');
?>