<?php

/** 
	* Clase Controlador del Formulario principal
**/

class ControllerMainForm {
		var $string_origin;
		var $string_transformed;


		function __construct($string_origin) {
			$this->string_transformed = $string_origin;
		}

		function show_table() {
			echo htmlentities($this->string_transformed);
		}

}

		$result_table = new ControllerMainForm($_POST['text-to-convert']);

		echo $result_table->show_table();


/**
htmlentities 
nl2br() 
htmlspecialchars() 
get_html_translation_table() 
html_entity_decode()
strtr


		**/

?>


