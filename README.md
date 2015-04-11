![Screenshot](http://i.imgur.com/nuIFwxr.png)
#(Para Español leer mas abajo)
EZ Template is a very simple PHP class developed to make the creation of simple websites with dinamic content very easy.

##How to use
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

##[Download](https://github.com/OverStruck/EZ-Template/releases)

*Any feedback is appreciated. If you have any suggestions to improve this extension, don't hesitate to let me know.*

#EZ Template (Spanish)
EZ Template es una clase de PHP desarrollada para hacer la creación de paginas web simples con contenido dinámico fácil y rápido.

##Como usar
*Ve la carpeta de *example* en este repositorio para un ejemplo completo*

EZ Template es extremadamente fácil de usar.
Necesitas al menos **dos** archivos:
* Tu archivo principal php
* Un archivo de plantilla (con .html como extensión)

Configura el archivo de plantilla con "variables" que contendrán tu contenido dinámico:

```html
	<title>[titulo] | Mi sitio web</title>
	<meta name="description" content="[descripcion]" />
```

En el ejemplo de arriba ```[titulo]``` y ```[descripcion]``` son nuestras variables.
Tus variables *deben* de estar envuelvas en ```[]``` pero el nombre puede ser lo que quieras.
Puedes añadir tantas variables como quieras en tu archivo de plantilla, lo que le apetezca o sea conveniente.

Básicamente, EZ Template reemplaza las variables con contenido real e ignora el resto del archivo.

Para tu archivo PHP, sólo tienes que incluir la clase:

```php
	require 'EZ_Template.class.php';
	//create object
	$tem = new EZ_Template;
```

Después, simplemente configura el contenido de la variable usando el método ```assign()```

```php
	$tem->assign('titulo', 'Ez Template');
	$tem->assign('descripcion', 'Bienvenido a mi pagina');
```

Y, por último, llama al método ```render()``` que toma como parámetro un *string*
El parámetro debe ser el nombre de tu archivo de plantilla.

```php
	$nombre_de_plantilla = 'plantilla';
	$tem->render($nombre_de_plantilla);
```

También puede añadir declaraciones ```if``` en tu archivo de plantilla, consulta la carpeta *example*

##[Descargar](https://github.com/OverStruck/EZ-Template/releases)

*Cualquier comentario es apreciado. Si usted tiene alguna sugerencia para mejorar esta extensión, no dude en hacérmelo saber.*
