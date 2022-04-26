<?php
  
/*   extends AnotherClass implements Interface */

class ClassName 
{
	public $a,$b,$c;

	function __construct( $a = 0, $b=0)
	{
		
echo "step 3 <Br>";


		$this->a = $a;
		$this->b = $b;

	}

	public function sum(){
		return $this->a+$this->b;
	}

	public function sum2(){
		return $this->a+$this->b;
	}


	function __destruct()
	{
		
		echo "step 3 <Br>";
	} 
 
	
}

$ClassName = new ClassName(6,7);
 
echo $ClassName->sum();
echo " <Br>";
echo " <Br>";
echo $ClassName->sum2();
 


?>