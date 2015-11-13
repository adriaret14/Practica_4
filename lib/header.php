<?php
	/**
	*
	*	Header : Generates the page header
	*
	*@package lib 
	*@subpackage constructs
	*@author Fret
	*
	*
	*
	**/

	class header
	{
		private $title;
		private $logo;

			public function __construct($css, $logo, $title)
			{
				$this->css=$css;
				$this->logo=$logo;
				$this->title=$title;
			}
			public function show()
			{
				$html=LAYOUT.$this->css.'</style></head><body>';
				echo $html;
				echo '<div id="cabecera">';
				echo '<img width="100px" src="'.$this->logo.'">';
				echo '<h1>'.$this->title.'</h1>';
				echo '</div>';
			}
	}
?>