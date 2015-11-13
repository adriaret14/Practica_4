<?php
	/**
	*
	*	Content : Generates the page content
	*
	*@package lib 
	*@subpackage constructs
	*@author Fret
	*
	*
	*
	**/

	class content
	{
		private $section;
		private $article;

			public function __construct($section, $article)
			{
				$this->section=$section;
				$this->article=$article;
			}
			public function show()
			{
				echo '<div id="cuerpo"';

				echo '<h2>'.$this->section.'</h2>';
				echo '<p>'.$this->article.'</p>';

				echo '</div>';
			}
	}
?>