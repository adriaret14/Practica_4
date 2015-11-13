<?php
	/**
	*
	*	Foot : Generates the page footer
	*
	*@package lib 
	*@subpackage constructs
	*@author Fret
	*
	*
	*
	**/

	class foot
	{
		private $end;

			public function __construct($end)
			{
				$this->end=$end;
			}
			public function show()
			{
				echo '<div id="pie">';

				echo '<p id="autor">'.$this->end.'</p>';

				echo '</div>';

				echo '</body>';
				
			}
	}
?>