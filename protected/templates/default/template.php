<?php
$__templateConfig=array(
	
	'developer'=>array(//Developer contact info ;)
		'name'=>'Carlos Balderrama',//Name
		'email'=>'cbalderrama73790@gmail.com',//Email address
		'website'=>'https://www.github.com/cbalderrama'//Website (if doesn't exists, just leave it as "#")
	),
		
	'template'=>array(//Template info
		'name'=>'default',//Template name
		'description'=>'Seshare\'s default template',//Template description
		'bootstrap'=>array(//Bootstrap filenames (public/css/{template->name}/{filename})
			'uncompressed'=>'default.css',//Uncompressed bootstrap template css filename
			'compressed'=>'default.min.css'//Compressed (minified) bootstrap template css filename
		),
		'dependencies'=>array(//Template dependencies (for example, a bootstrap plugin). Put all the dependencies in the 'public/templates/{template->name}/dependencies/' css or js folder
			'css'=>array(),
			'js'=>array()
		)
	)
);
?>