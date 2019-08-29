$(document).ready(function()
{
    var base_url = "http://localhost/caramel/admin";    
    $("#submt").click(function(e)
    {
        e.preventDefault();
        var username = $(".uname").val();
        var password = $(".password").val();
        var data = "username="+username+"&password="+password;
        var url = base_url+"/controller/login";
        var success_url = base_url+"/controller/dashboard";
        $.ajax(
            {
                url:url,
                method:"POST",
                data:data,
                dataType:"JSON",
                success:function(data)
                {
                    
                   if(data.error == 0 )
                   {
                    alert(data.session_id);
                    window.location.href = success_url;

                   }
                   else
                   {
                       alert("invalid Credentials");
                   }
                }
            }
        )
    });
    
    $(".rem_event").click(function()
    {
        var remove_id = $(this).attr('id');
        var data = "remove_id="+remove_id;
        var url = base_url+"/controller/eventdelete";
        var success_url = base_url+"/controller/dashboard";
        $.ajax(
            {
                url:url,
                method:"POST",
                data:data,
                dataType:"TEXT",
                success:function(data)
                {
                    $("#err_f").css('display','block');
                    $("#err_f").html("Event deleted successfully");
                    $("#err_f").fadeOut(5000);
                    function error_time(){
                        window.location.href = success_url;
                      }
                      setTimeout(error_time, 1200);
                }
            }
        )
    });

    $("#upd_event").click(function()
    {
       var eventname = $(".ev_name").val();
       var timing = $(".ev_time").val();
       var brief = $(".ev_brief").val();
       var days = $(".ev_days").val();
       var end_d = $(".ev_enddate").val();
       var data = "event_name="+eventname+"&timing="+timing+"&brief="+brief+"&days="+days+"&end_date="+end_d;
       var success_url = base_url+"/controller/dashboard";
       $.ajax(
           {
               url:base_url+"/controller/eventupdate",
               method:"POST",
               data:data,
               dataType:"TEXT",
               success:function(data)
               {
                  if(data == 1)
                  {
                    $("#succ_f").css('display','block');
                    $("#succ_f").html("Event Updated successfully");
                    $("#succ_f").fadeOut(5000);
                    function success_time(){
                        window.location.href = success_url;
                      }
                      setTimeout(success_time, 1200);
                  }

                  else
                  {

                  }
               }
           }
       )
    });

    $("#upld_video").click(function()
    {
       var vid_title = $("#vid_name").val();
       var vid_src = $("#vid_src").val();
       var data = "vid_title="+vid_title+"&vid_src="+vid_src;
       var success_url = base_url+"/controller/videos";
       $.ajax(
        {
            url:base_url+"/controller/addvideo",
            method:"POST",
            data:data,
            dataType:"TEXT",
            success:function(data)
            {
                if(data == 1)
                {
                  $("#succ_f").css('display','block');
                  $("#succ_f").html("Video uploaded Successfully");
                  $("#succ_f").fadeOut(5000);
                  function success_time(){
                      window.location.href = success_url;
                    }
                    setTimeout(success_time, 1200);
                }

                else
                {

                }
            }
        }
    )
    });

    $(".dlt_v").click(function()
    {
        var vid_id = $(this).attr('id');
        var data = "vid_id="+vid_id;
        var success_url = base_url+"/controller/videos";
        $.ajax(
            {
                url:base_url+"/controller/dltvideo",
                method:"POST",
                data:data,
                dataType:"TEXT",
                success:function(data)
                {
                    if(data == 1)
                    {
                      $("#succ_f").css('display','block');
                      $("#succ_f").html("Video Deleted Successfully");
                      $("#succ_f").fadeOut(5000);
                      function success_time(){
                          window.location.href = success_url;
                        }
                        setTimeout(success_time, 1200);
                    }
  
                    else
                    {
  
                    }
                }   
            }
        )
    });

    $(".edit_event").click(function()
    {
        var edit_id = $(this).attr('id');
        var event_name = $("#"+"event_name_"+edit_id).html();
        var event_time = $("#"+"event_time_"+edit_id).html();
        var event_brief = $("#"+"event_brief_"+edit_id).html();
        var event_days = $("#"+"event_days_"+edit_id).html();
        var event_end = $("#"+"event_end_"+edit_id).html();
        var data = "event_id="+edit_id+"&event_name="+event_name+"&event_time="+event_time+"&event_brief="+event_brief+"&event_days="+event_days+"&event_end="+event_end;
        var success_url = base_url+"/controller/dashboard";
        $.ajax(
            {
                url:base_url+"/controller/editevent",
                method:"POST",
                data:data,
                dataType:"TEXT",
                success:function(data)
                {
                   
                    if(data == 1)
                    {
                      $("#succ_f").css('display','block');
                      $("#succ_f").html("Event Updated Successfully");
                      $("#succ_f").fadeOut(5000);
                      function success_time(){
                          window.location.href = success_url;
                        }
                        setTimeout(success_time, 1200);
                    }
  
                    else
                    {
                        alert("unable to update events");
                    }
                }   
            }
        );
    });

    $(".dlt_eventfree").click(function()
    {
        var free_id = $(this).attr('id');
        var data = "d_id="+free_id;
        var success_url = base_url+"/controller/allevents";
        $.ajax(
            {
                url:base_url+"/controller/freedlt",
                method:"POST",
                data:data,
                dataType:"TEXT",
                success:function(data)
                {
                   
                    if(data == 1)
                    {
                      $("#succ_f").css('display','block');
                      $("#succ_f").html("Event deleted Successfully");
                      $("#succ_f").fadeOut(5000);
                      function success_time(){
                          window.location.href = success_url;
                        }
                        setTimeout(success_time, 1200);
                    }
  
                    else
                    {
                        alert("unable to update events");
                    }
                } 
            }
        )
        
    });

    $(".ed_eventfree").click(function()
    {
        var parent_id = $(this).attr('id');
        var event_name = $("#"+"free_eventname_"+parent_id).html();
        var organizer = $("#"+"free_organizername_"+parent_id).html();
        var outorin = $("#"+"free_outorin_"+parent_id).html();
        var paidorfree = $("#"+"free_paidorfree_"+parent_id).html();
        var year = $("#"+"free_year_"+parent_id).html();
        var month = $("#"+"free_month_"+parent_id).html();
        var startdate = $("#"+"free_sdate_"+parent_id).html();
        var enddate = $("#"+"free_edate_"+parent_id).html();
        var starttime = $("#"+"free_stime_"+parent_id).html();
        var endtime = $("#"+"free_etime_"+parent_id).html();
        var address = $("#"+"free_address_"+parent_id).html();
        var phone = $("#"+"free_phone_"+parent_id).html();
        var email = $("#"+"free_email_"+parent_id).html();
        var detail = $("#"+"free_detail_"+parent_id).html();
        var data = "p_id="+parent_id+"&event_name="+event_name+"&organizer="+organizer+"&outorin="+outorin+"&paidorfree="+paidorfree+"&year="+year+"&month="+month+"&sdate="+startdate+"&edate="+enddate+"&stime="+starttime+"&etime="+endtime+"&address="+address+"&phone="+phone+"&email="+email+"&detail="+detail;
        var success_url = base_url+"/controller/allevents";
        $.ajax(
            {
                url:base_url+"/controller/freeupd",
                method:"POST",
                data:data,
                dataType:"TEXT",
                success:function(data)
                {                 
                    if(data == 1)
                    {
                      $("#succ_f").css('display','block');
                      $("#succ_f").html("Event deleted Successfully");
                      $("#succ_f").fadeOut(5000);
                      function success_time(){
                          window.location.href = success_url;
                        }
                        setTimeout(success_time, 1200);
                    }
  
                    else
                    {
                        alert("unable to update events");
                    }
                } 
            }
        )
   
    });

    $(".rem_tstm").click(function()
    {
        var rem_testid = $(this).attr('id');
        var data = "rem_testmid="+rem_testid;
        
        $.ajax(
            {
                url:base_url+"/controller/remtestm",
                method:"POST",
                data:data,
                dataType:"TEXT",
                success:function(data)
                {
                    alert(data);
                }
            }
        )
    });

    $("#add_tstm").click(function()
    {
        var tstm_name = $(".tstm_name").val();
        var tstm_year = $(".tstm_year").val();
        var tstm_month = $(".tstm_month").val();
        var tstm_monthno = $(".tstm_monthno").val();
        var tstm_day = $(".tstm_day").val();
        var tstm_date = $(".tstm_date").val();
        var tstm_detail = $(".tstm_detail").val();
        
    })


    //date picker
    $('.datepicker').pickadate({
        weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
        showMonthsShort: true
    });

   
   
})