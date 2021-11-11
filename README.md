# THIS PROJECT HAS BEEN DEPRECATED
![Screenshot](http://i.imgur.com/nuIFwxr.png)

EZ Template is a very simple PHP class developed to make the creation of simple websites with dinamic content very easy.

## How to use
*See the example folder in this repository for a complete example*

EZ Template is extremetely easy to use.
You at least *two* files
* Your main php file
* A template file (with .html as its extension)

You set up the template file with "variables" which will contain your dynamic or programmer-set content:

```html
	<title>[title] | My Website</title>
	<meta name="description" content="[description]" />
```

In the example above ```[title]``` and ```[description]``` are our variables.
They *have* to be enclosed in square brackets ```[]``` but the name can be whatever you like.
You can also add as many as you like in your template file, however you want or see fit.

Basically, EZ Template replaces your variables with actual content and ignores the rest of the file.

For your actual php file, you just need to include the class:

```php
	require 'EZ_Template.class.php';
	//create object
	$tem = new EZ_Template;
```

Then simply setup the variable content using the ```assign()``` method method.

```php
	$tem->assign('title', 'Ez Template');
	$tem->assign('description', 'Welcome to this example page');
```

And finally, just call the ```render()``` method which takes a string as a parameter.
The parameter should be the name of your template file.

```php
	$template_name = 'template';
	$tem->render($template_name);
```

You can also add ```if``` statements in your template file, see the example folder.

## [Download](https://github.com/OverStruck/EZ-Template/releases)

*Any feedback is appreciated. If you have any suggestions to improve this extension, don't hesitate to let me know.*
