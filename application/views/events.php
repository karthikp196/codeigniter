<?php
include('header.php')
?>


<div class="w-100">


<div class="w-100 mx-auto">
<!--events-->
<div class="alert alert-danger" id="err_f" role="alert">
  
</div>

<div class="alert alert-success" id="succ_f" role="alert">
  
</div>
<!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Free Events</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
    <a href="" class="btn btn-default btn-rounded mb-4 float-right" data-toggle="modal" data-target="#modalContactForm">Add a free Event</a>
    
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th id="" class="text-center">Event Name</th>
            <th class="text-center">Organizer Name</th>
            <th class="text-center">Outorin</th>
            <th class="text-center">Status</th>
            <th class="text-center">Year</th>
            <th class="text-center">Month</th>
            <th class="text-center">Start Date</th>
            <th class="text-center">End Date</th>
            <th class="text-center">Start Time</th>
            <th class="text-center">End Time</th>
            <th class="text-center">Address</th>
            <th class="text-center">Phone</th>
            <th class="text-center">Email</th>
            <th class="text-center">Event Details</th>
            <th class="text-center">Update</th>
            <th class="text-center">Remove</th>
          </tr>
        </thead>
        <tbody>

      <?php

       foreach($allevents->result() as $row)
      {

      ?>

          <tr>
            <td class="pt-3-half" id="free_eventname_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->event_name; ?></td>
            <td class="pt-3-half" id="free_organizername_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->organiser_name; ?></td>
            <td class="pt-3-half" id="free_outorin_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->outorin; ?></td>
            <td class="pt-3-half" id="free_paidorfree_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->paidorfree; ?></td>
            <td class="pt-3-half" id="free_year_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->year; ?></td>
            <td class="pt-3-half" id="free_month_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->month; ?></td>
            <td class="pt-3-half" id="free_sdate_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->start_date; ?></td>
            <td class="pt-3-half" id="free_edate_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->end_date; ?></td>
            <td class="pt-3-half" id="free_stime_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->start_time; ?></td>
            <td class="pt-3-half" id="free_etime_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->end_time; ?></td>
            <td class="pt-3-half" id="free_address_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->event_address; ?></td>
            <td class="pt-3-half" id="free_phone_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->phone; ?></td>
            <td class="pt-3-half" id="free_email_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->email; ?></td>
            <td class="pt-3-half" id="free_detail_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->event_detail; ?></td>
            <td>
              <span class="table-remove"><button id="<?php echo $row->eventid; ?>" type="button"
                  class="btn btn-primary btn-rounded btn-sm my-0 ed_eventfree">Update</button></span>
            </td>
            <td>
              <span class="table-remove"><button id="<?php echo $row->eventid; ?>" type="button"
                  class="btn btn-danger btn-rounded btn-sm my-0 dlt_eventfree">Remove</button></span>
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

<!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Paid Events</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
    <a href="" class="btn btn-default btn-rounded mb-4 float-right" data-toggle="modal" data-target="#modalContactForm">Add a Paid Event</a>
    
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Event Name</th>
            <th class="text-center">Organizer Name</th>
            <th class="text-center">Outorin</th>
            <th class="text-center">Status</th>
            <th class="text-center">Year</th>
            <th class="text-center">Month</th>
            <th class="text-center">Start Date</th>
            <th class="text-center">End Date</th>
            <th class="text-center">Start Time</th>
            <th class="text-center">End Time</th>
            <th class="text-center">Address</th>
            <th class="text-center">Phone</th>
            <th class="text-center">Email</th>
            <th class="text-center">Event Details</th>
            <th class="text-center">Update</th>
            <th class="text-center">Remove</th>
          </tr>
        </thead>
        <tbody>

      <?php

       foreach($paidevents->result() as $row)
      {

      ?>

          <tr>
            <td class="pt-3-half" id="free_eventname_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->event_name; ?></td>
            <td class="pt-3-half" id="free_organizername_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->organiser_name; ?></td>
            <td class="pt-3-half" id="free_outorin_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->outorin; ?></td>
            <td class="pt-3-half" id="free_paidorfree_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->paidorfree; ?></td>
            <td class="pt-3-half" id="free_year_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->year; ?></td>
            <td class="pt-3-half" id="free_month_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->month; ?></td>
            <td class="pt-3-half" id="free_sdate_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->start_date; ?></td>
            <td class="pt-3-half" id="free_edate_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->end_date; ?></td>
            <td class="pt-3-half" id="free_stime_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->start_time; ?></td>
            <td class="pt-3-half" id="free_etime_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->end_time; ?></td>
            <td class="pt-3-half" id="free_address_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->event_address; ?></td>
            <td class="pt-3-half" id="free_phone_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->phone; ?></td>
            <td class="pt-3-half" id="free_email_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->email; ?></td>
            <td class="pt-3-half" id="free_detail_<?php echo $row->eventid ?>" contenteditable="true"><?php echo $row->event_detail; ?></td>
            <td>
              <span class="table-remove"><button id="<?php echo $row->eventid; ?>" type="button"
                  class="btn btn-primary btn-rounded btn-sm my-0 ed_eventfree">Update</button></span>
            </td>
            <td>
              <span class="table-remove"><button id="<?php echo $row->eventid; ?>" type="button"
                  class="btn btn-danger btn-rounded btn-sm my-0 dlt_eventfree">Remove</button></span>
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


<!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Completed Events</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
   
    
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Event Name</th>
            <th class="text-center">Organizer Name</th>
            <th class="text-center">Outorin</th>
            <th class="text-center">Status</th>
            <th class="text-center">Year</th>
            <th class="text-center">Month</th>
            <th class="text-center">Start Date</th>
            <th class="text-center">End Date</th>
            <th class="text-center">Start Time</th>
            <th class="text-center">End Time</th>
            <th class="text-center">Address</th>
            <th class="text-center">Phone</th>
            <th class="text-center">Email</th>
            <th class="text-center">Event Details</th>
            <th class="text-center">Remove</th>
          </tr>
        </thead>
        <tbody>

      <?php

       foreach($completedevents->result() as $row)
      {

      ?>

          <tr>
            <td class="pt-3-half" contenteditable="true"><?php echo $row->event_name; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row->organiser_name; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row->outorin; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row->paidorfree; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row->year; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row->month; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row->start_date; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row->end_date; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row->start_time; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row->end_time; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row->event_address; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row->phone; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row->email; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row->event_detail; ?></td>
            
            <td>
              <span class="table-remove"><button id="<?php echo $row->eventid; ?>" type="button"
                  class="btn btn-danger btn-rounded btn-sm my-0 dlt_eventfree">Remove</button></span>
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



<!-- end of model -->

<?php
include('footer.php');
?>

