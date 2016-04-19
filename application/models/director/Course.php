<?php
class Course extends CI_Model {


	private $name;



	  public function  getname()
        {
                echo $this->name;
        }      
   
      public function  setname($name)
        {
                $this->name=$name;
        }      
   

}
