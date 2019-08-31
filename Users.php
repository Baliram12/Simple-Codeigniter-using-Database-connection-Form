<?php

class Users extends CI_controller
{
	
  public function index()
  {
  	$this-> load->model('usermodel');
  	$data=$this->usermodel-> getUsersdata();
  	$data['details']=$data;
     $this-> load-> view('Users/userlist',$data);
  }
}







?>