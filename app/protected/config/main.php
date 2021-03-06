<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Eco Ridge Apparel, Inc.',

	// preloading 'log' component
	'preload'=>array(
		'log',
		'booster'
	),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'05059292',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'generatorPaths'=>array(
			'booster.gii', // boostrap generator
    ),
			'ipFilters'=>array('203.215.118.231','127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'joModule' => array(
            'class' => 'ext.joModule.components.JoModule',
        ),
		'booster'=>array(
       			'class'=>'ext.booster.components.Booster',
       			'responsiveCss'=>true,
    		),
		'user'=>array(
			// enable cookie-based authentication
			//'allowAutoLogin'=>true,
			//UPDATED for customized user roles
			'class'=>'WebUser',
			'loginUrl'=>array('admin/login'),
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'showScriptName'=>false,
			'urlFormat'=>'path',
			'rules'=>array(
				
				'jo/'=>'jo/index',
				'jo/done'=>'jo/done',
				'jo/sewing'=>'joSewing/index',
				'jo/sewing/edit'=>'joSewing/edit',
				'jo/sewing/<action:\w+>'=>'joSewing/<action>',
				'jo/finishing'=>'joFinishing/index',
				'jo/finishing/<action:\w+>'=>'joFinishing/<action>',
//				'<controller:\w+>/<view:\w+>'=>'<controller>/page',

//				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
//				'<controller:\w+>/<view:\w+>'=>'<controller>/page',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				'<controller:\w+>/<view:\w+>'=>'<controller>/page',
			),
		),
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=jo_manager',
			'emulatePrepare' => true,
			'username' => 'jo_app',
			'password' => '!69w%%8-3f355*X',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
