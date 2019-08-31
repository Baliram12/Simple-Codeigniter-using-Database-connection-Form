<?php 
class Usermodel extends CI_model
{


	public function getUsersdata()
	{

    $this-> load-> database();
    $q=$this-> db-> get("customer");
    $result =$q-> result();
    return $q-> result_array(); 


		
	}
}




?>