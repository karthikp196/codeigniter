<?php

    Class Main_model extends CI_model
    {
        public function login($data)
        {
            $message = array();
            $this->load->database();
            $username = $data['name'];
            $password = $data['password'];
            $myquery = $this->db->query("SELECT * FROM admin_users WHERE username='$username' AND password='$password'");
            if ($myquery->num_rows() == 1) 
            {
                foreach($myquery->result() as $row){
                    $user_id = $this->session->set_userdata("user_id", $row->id);
                    $user_name = $row->username;
                    $email = $row->email;
                }
               
                $message['user'] = $user_name;
                $message['user_email'] = $email;
                $message['error'] = 0;
                $message['msg'] = "successfully logged in";
            }
            else
            {
                $message['user'] = "no user found";
                $message['user_email'] = "no Email found";
                $message['error'] = 1;
                $message['msg'] = "invalid credentials";
            }
            echo json_encode($message);
        }

        public function apidata()
        {
            $msg = array();
            $this->load->database();
            $qry = $this->db->get('upcoming_event');
            foreach($qry->result() as $row9)
            {
                $eventname = $row9->event_name;
                $time = $row9->time;
                $brief = $row9->brief;
                $msg['event name'] = $eventname;
                $msg['time'] = $time;
                $msg['brief'] = $brief;
                echo json_encode($msg);
            }
            
        }
       
        // events function
        public function events()
        {
            $this->load->database();
            $query = $this->db->get('upcoming_event');
            return $query;
        }

        public function eventdelete($data)
        {
          
            $this->load->database();
            $eventremove_id = $data['eventdelete_id'];
            $query1 = $this->db->query("DELETE FROM upcoming_event WHERE id = '$eventremove_id'");
            if ($query1==TRUE)
            {
                echo '1';
            }
            else
            {
                echo '0';
            }
    
        }

        public function eventupdate($data)
        {
            $this->load->database();
            $event_name = $data['event_name'];
            $timing = $data['timing'];
            $brief = $data['brief'];
            $days = $data['days'];
            $end_date = $data['end_date'];
            $sql = "insert into upcoming_event (event_name, time, brief, days, end_date) values ('$event_name','$timing','$brief','$days','$end_date')";
            $result = $this->db->query($sql);
            if($result == TRUE)
            {
                echo '1';
            }
            else
            {
                echo '2';
            }
        }

        public function videos()
        {
            $this->load->database();
            $query = $this->db->get('carmel_videos');
            return $query;
        }

        public function allevents()
        {

            $this->load->database();
            $sql = "SELECT * FROM eventtable WHERE paidorfree = 'free'";
            $result = $this->db->query($sql);
            return $result;
        }

        public function paidevents()
        {

            $this->load->database();
            $sql = "SELECT * FROM eventtable WHERE paidorfree = 'paid'";
            $result1 = $this->db->query($sql);
            return $result1;
        }

        public function completedevents()
        {

            $this->load->database();
            $sql = "SELECT * FROM eventtable WHERE paidorfree = 'Completed'";
            $result2 = $this->db->query($sql);
            return $result2;
        }

        public function addvideo($data)
        {
            $vid_title = $data['vid_title'];
            $vid_src = $data['vid_src'];
            $sql = "insert into carmel_videos (v_name, v_src) values ('$vid_title','$vid_src')";
            $result = $this->db->query($sql);
            if($result == TRUE)
            {
                echo "1";
            }
            else{
                echo "0";
            }
        }

        public function dltvideo($data)
        {
            $vid_id = $data['vid_id'];
            $sql = "DELETE FROM carmel_videos WHERE v_id=$vid_id";
            $result = $this->db->query($sql);
            if($result == TRUE)
            {
                echo "1";
            }
            else{
                echo "0";
            }
        }

        public function editevent($data)
        {
            $edit_id = $data['event_id'];
            $event_name1 = $data['event_name1'];
            $event_time = $data['event_time'];
            $event_brief = $data['event_brief'];
            $event_days = $data['event_days'];
            $event_end = $data['event_end'];
           
            $sqlquery = "UPDATE upcoming_event SET event_name = '$event_name1', time= '$event_time', brief= '$event_brief', days= '$event_days', end_date= '$event_end' WHERE id =$edit_id";
            $sqlresult = $this->db->query($sqlquery);
            if($sqlresult == TRUE)
            {
                echo "1";
            }
            else
            {
                echo "0";
            }
        }

        public function freedlt($data)
        {
            $dlt_id = $data['d_id'];
            $sql4 = "DELETE FROM eventtable WHERE eventid=$dlt_id";
            $result4 = $this->db->query($sql4);
            if($sql4 == TRUE)
            {
                echo "1";
            }
            else
            {
                echo "0";
            }
        }

        public function freeupd($data)
        {
            $ev_id = $data['ev_id'];
            $ev_name = $data['event_name'];
            $organizer = $data['organizer'];
            $outorin = $data['outorin'];
            $paidorfree = $data['paidorfree'];
            $year = $data['year'];
            $month = $data['month'];
            $sdate = $data['sdate'];
            $edate = $data['edate'];
            $stime = $data['stime'];
            $etime = $data['etime'];
            $address = $data['address'];
            $phone = $data['phone'];
            $email = $data['email'];
            $detail = $data['detail'];
            
            $query5 = "UPDATE eventtable SET event_name = '$ev_name', organiser_name= '$organizer', outorin = '$outorin', paidorfree = 
            '$paidorfree', year='$year', month='$month', start_date='$sdate', end_date = '$edate', start_time = '$stime', end_time = '$etime', 
            event_address = '$address', phone='$phone', email = '$email', event_detail = '$detail' WHERE eventid=$ev_id";
            $result5 = $this->db->query($query5);
            if($result5 == TRUE)
            {
                echo "1";
            }
            else
            {
                echo "0";
            }

        }

        public function testimonials()
        {
            $this->load->database();
            $query = $this->db->get('testimonial');
            return $query;
        }

        public function testimonialsapi()
        {
            $this->load->database();
            $query = $this->db->get('testimonial');
            json_encode($query);
        }

        public function remtestm($data)
        {
            $remtestm_id = $data['rem_testm'];
            $query6 = "DELETE FROM testimonial WHERE tid=$remtestm_id";
            $result6 = $this->db->query($query6);

            if($result6 == TRUE)
            {
                echo "1";
            }
            else
            {
                echo "0";
            }
        }

        public function gallery()
        {
            $this->load->database();
            $query = $this->db->get('gallery');
            return $query;
        }
        
        

    }


?>