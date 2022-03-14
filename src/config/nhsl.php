<?php

return [

	'prefix' => 'nhsl',

	'middleware' => ['web'],

	'alert_banner_on' => false,

	'components' => [
		'default' => 'components',
	],

	'footer'     => [
		'default' => 'elements.footer',
	],

	'header'     => [
		'default' => 'elements.header',
	],

	'layouts'    => [
		'default' => 'layouts.app',
		'fluid'   => 'layouts.app-fluid',
	],

	'nav'        => [
		'default' => 'elements.nav',
	],

	/*
	|--------------------------------------------------------------------------
	| Global options, eg: date and date time display formats
	|--------------------------------------------------------------------------
	*/
	'options'    => [
		'global_date_format' => 'd/m/Y',
		'global_date_short_format' => 'd M Y',
		'global_datetime_format' => 'd/m/Y H:i',
		'global_date_format_javascript' => 'DD/MM/YYYY',
	]
];
