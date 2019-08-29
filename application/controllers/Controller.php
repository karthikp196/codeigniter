<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	public function index()
	{
        $this->load->view('header');
        $this->load->view('index');
        $this->load->view('footer');
   
    }
    public function login()
    {
        $username = $this->input->post("username");
		$password = $this->input->post("password");
		$data=array('name'=>$username, 'password'=> $password);
		$this->load->model("main_model");
        $result = $this->main_model->login($data);
    }
    public function apidata()
    {
        $this->load->model("main_model");
        $result = $this->main_model->apidata();
        
    }
    public function dashboard()
    {
        $this->load->model('main_model');
        $this->main_model->events();
        $data['events'] = $this->main_model->events();
        $this->load->view('dashboard',$data);       
    }
  
    public function eventdelete()
    {
        $eventremove_id = $this->input->post("remove_id");
        $data=array('eventdelete_id'=>$eventremove_id); 
        $this->load->model("main_model");   
        $result = $this->main_model->eventdelete($data);
        echo $data;
    }
    public function eventupdate()
   {
       $event_name = $this->input->post("event_name");
       $timing = $this->input->post("timing");
       $brief = $this->input->post("brief");
       $days = $this->input->post("days");
       $end_date = $this->input->post("end_date");
       $data = array('event_name'=>$event_name,'timing'=>$timing,'brief'=>$brief,'days'=>$days,'end_date'=>$end_date);
       $this->load->model("main_model");
       $result = $this->main_model->eventupdate($data);
   }

   public function videos()
   {
    $this->load->model('main_model');
    $this->main_model->videos();
    $data['videos'] = $this->main_model->videos();
    $this->load->view('videos',$data);    
   }

   public function allevents()
   {
    $this->load->model('main_model');
    $this->main_model->allevents();
    $data['allevents'] = $this->main_model->allevents();
    $data['paidevents'] = $this->main_model->paidevents();
    $data['completedevents'] = $this->main_model->completedevents();
    $this->load->view('events',$data);
   }

   public function addvideo()
   {
    $vid_title = $this->input->post("vid_title");
    $vid_src = $this->input->post("vid_src");
    $data=array('vid_title'=>$vid_title, 'vid_src'=> $vid_src);
    $this->load->model("main_model");
    $result = $this->main_model->addvideo($data);
   }

   public function dltvideo()
   {
       $vid_id = $this->input->post("vid_id");
       $data = array('vid_id'=>$vid_id);
       $this->load->model("main_model");
       $result = $this->main_model->dltvideo($data);
   }

   public function editevent()
   {
       $event_id = $this->input->post("event_id");
       $event_name = $this->input->post("event_name");
       $event_time = $this->input->post("event_time");
       $event_brief = $this->input->post("event_brief");
       $event_days = $this->input->post("event_days");
       $event_end = $this->input->post("event_end");
       $data=array('event_id'=>$event_id, 'event_name1'=>$event_name, 'event_time'=>$event_time,'event_brief'=>$event_brief, 'event_days'=>$event_days, 'event_end'=>$event_end);
       $this->load->model("main_model");
       $result = $this->main_model->editevent($data);
   }
   public function freedlt()
   {
       $d_id = $this->input->post("d_id");
       $data = array('d_id'=>$d_id);
       $this->load->model("main_model");
       $result = $this->main_model->freedlt($data);
   }

   public function freeupd()
   {
       $parent_id = $this->input->post("p_id");
       $event_name = $this->input->post("event_name");
       $organizer = $this->input->post("organizer");
       $outorin = $this->input->post("outorin");
       $paidorfree = $this->input->post("paidorfree");
       $year = $this->input->post("year");
       $month = $this->input->post("month");
       $sdate = $this->input->post("sdate");
       $edate = $this->input->post("edate");
       $stime = $this->input->post("stime");
       $etime = $this->input->post("etime");
       $address = $this->input->post("address");
       $phone = $this->input->post("phone");
       $email = $this->input->post("email");
       $detail = $this->input->post("detail");
       $data = array('ev_id'=>$parent_id, 'event_name'=>$event_name, 'organizer'=>$organizer, 'outorin'=>$outorin, 'paidorfree'=>$paidorfree, 'year'=>$year, 'month'=>$month, 'sdate'=>$sdate, 'edate'=>$edate, 'stime'=>$stime, 'etime'=>$etime, 'address'=>$address, 'phone'=>$phone, 'email'=>$email, 'detail'=>$detail);
       $this->load->model("main_model");
       $result = $this->main_model->freeupd($data);
   }

  public function testimonials()
  {
    $this->load->model('main_model');
    $this->main_model->testimonials();
    $data['testimonials'] = $this->main_model->testimonials();
    $this->load->view('testimonials',$data);
  }

  public function testimoinialsapi()
  {
    $data = array("message"=>"RESTfull API");
    $this->response($data);
  }

  public function remtestm()
  {
      $rem_testmid= $this->input->post("rem_testmid");
      $data = array('rem_testm'=>$rem_testmid);
      $this->load->model("main_model");
      $result = $this->main_model->remtestm($data);
  }

  public function gallery()
  {
      $this->load->model('main_model');
      $this->main_model->gallery();
      $data['gallery'] = $this->main_model->gallery();
      $this->load->view('gallery',$data);
  }

 
}
