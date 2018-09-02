<?php 

/**
 * 
 */
class hello 
{
    public $name = 'guest';

	public function getName($name = null){

	  if($name != null && $name != ' ' && $name != 'guest'){	
		$this->name = $name;
		if($name == ' '){
			echo "Value Is Null";
		}
	  }else{
	  }
	  	
	}
	public function sayHello(){
		if($this->name != 'guest'){
			return'<h3 style="text-align:center;padding:5px 3px;">Hey '.$this->name.' You Are Welcome</h3>';
		}	
	}
}

