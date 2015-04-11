<?php
class EZ_Template {
	//variables in our template to replace with content
	private $vars = array();
	private $eval = false;
	
	/**
	 * sets private variable $eval to TRUE to evaluate conditional statements
	 */
	public function evaluate() {
		$this->eval = true;
	}

	/**
	 * Assigns content to template variables
	 * @param string $key the variable name
	 * @param string $value the variable content
	 */
	public function assign($key, $value) {
		$this->vars[$key] = $value;
	}
	
	/**
	 * Expands the contents of variable which has already being assigned content
	 * @param string $key the variable name
	 * @param string $value the variable content
	 */
	public function expand($key, $value) {
		$this->vars[$key] = $this->vars[$key] . $value;
	}
	
	/**
	 * Renders the template
	 * @param string $template_name the file name of the template file
	 * @param bool $echo echo the content, set to FALSE to RETURN it
	 * @param boll $compress removes white space
	 * @return string the content if $echo is TRUE
	 */
	public function render($template_name = null, $echo = true, $compress = true) {
		
		//you might want to modify this
		//maybe to something like 'root/templates/$template_name.html'
		$path = "$template_name.html";

		//todo - have more useful error messages/checking
		
		if (file_exists($path)) {
			//get contents of the template file
			$contents = file_get_contents($path);
			//replace variables [name] with its contents
			foreach($this->vars as $key => $value) {
				$contents = preg_replace("/\[$key\]/", $value, $contents);
			}
			//replace remaining [] with ''
			$contents = preg_replace('/\[(.*)\]/', '', $contents);
			//remove whitespaces
			if ($compress && !$this->eval) {
				$contents = preg_replace('/\s\s+/', '', $contents);
			}
			//if we have conditional statements in our template, evaluate them
			if ($this->eval) {
				$contents = preg_replace('/\<\!\-\- if (.*) \-\-\>/', '<?php if ($1) : ?>', $contents);
				$contents = preg_replace('/\<\!\-\- else \-\-\>/', '<?php else : ?>', $contents);
				$contents = preg_replace('/\<\!\-\- endif \-\-\>/', '<?php endif; ?>', $contents);
				//dangerous?
				eval(' ?>'.$contents.'<?php ');
			} else if ($echo) {
				echo $contents;
			} else {
				return $contents;
			}
		} else {
			exit('<h1>Template Error</h1> '. $template_name);
		}
	}
}
?>