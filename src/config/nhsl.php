<?php

return [

	'prefix' => env('NHSL_PREFIX', 'nhsl'),

	'middleware' => ['web'],

	'alert_banner_on' => env('ALERT_BANNER_ON', false),

	'register_url' => 'https://profile.leadershipacademy.nhs.uk/register',

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
