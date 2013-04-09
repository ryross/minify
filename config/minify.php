<?php
return array(
	'enabled' => TRUE,
	'path' => array(
		'js'    => 'js/',
		'css'   => 'css/',
                'less'  => 'less/',
		'media' => 'media/',
	), 
        'driver' => array(
                'js' => 'JShrink',
                'css' => 'cssmin',
                'less' => 'lessphp'
        ),
);