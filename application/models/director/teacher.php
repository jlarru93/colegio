<?php
class Teacher extends CI_Model {


	private $names;
	private $last_name;
	private $mother_last_name;
	private $course= array();

	  public function  getnombre()
        {
                echo $this->nombre;
        }      
   
      public function  setnombre($nombre)
        {
                $this->nombre=$nombre;
        }      
   

}
