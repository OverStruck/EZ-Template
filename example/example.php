<?php 
	require 'EZ_Template.class.php';

	$tem = new EZ_Template; //initiate Ez template object

	//assign content to our template variables
	$tem->assign('title', 'Ez Template');
	$tem->assign('css', '');
	$tem->assign('js', '<script src="script.js"></script>');
	$tem->assign('description', 'Welcome to this example page');
	$tem->assign('keywords', 'scripts, templates, php, ez template');

	//"expand" method adds content to a variable which has already assigned assined content
	$tem->expand('js', '<script>setTimeout(function(){alert("Hello");}, 3000);</script>');

	/*
		There are many ways to add content to our template
		You could have just done: $tem->assign('content', '<h1>Hello World</h1>');
		or use a variable:
		$html = '<h1>Hello World</h1>';
		$tem->assign('content', $html);

		in our case to make this example code short, we just get the html from another file
	*/
	$html = file_get_contents('example-body.html');
	$tem->assign('content', $html);

	/*
		We can also have conditional statements like:
		<!-- if [show-img] -->
			<img src="img.png" />
		<!-- else -->
			<img src="img2.png" />
		<!-- endif -->

		but for that we need to "evaluate" the template
		do this by calling evaluate() and make sure you pass the variable
		value: either TRUE/FALSE as a STRING... see the next two lines and template.html

	*/
	$tem->assign('show-img', 'false');
	$tem->evaluate();

	$tem->render('template');

?>