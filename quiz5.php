<<?php 

/**
* 
*/
class Robben
{
	
public $flopper;
public $allstar;
public $bald;

	function __construct($flopper, $allstar, $bald)
	{
	$this->flopper = $flopper;
    $this->allstar = $allstar;
    $this->bald = $bald;

	}
function soccerplayer(){
     return "Robben is a flopper" . $this->$flopper . "flopper" . "Play's for bayern" . $this->$allstar .
     "and i am" . $this->$bald ".";
  }
}

$Robben = new soccerplayer("good", "0 trophies");
echo $Robben->flops();
echo "<br>";
echo $Robben->bald;

 ?>