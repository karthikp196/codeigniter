<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_call extends CI_Controller {
    public function users()
    {
             $this->load->database();
             $sql = "SELECT * FROM upcoming_event";
             $res = $this->db->query($sql);       
    }

}

?>