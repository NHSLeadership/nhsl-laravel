<?php
namespace Nhsl\NhslLaravel\Test;

use Nhsl\NhslLaravel\NhslLaravelServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
	public function setUp(): void
	{
		parent::setUp();
	}

	/**
	 * Load package service provider
	 * @param $app
	 *
	 * @return array
	 */
	protected function getPackageProviders($app): array
	{
		return [
			NhslLaravelServiceProvider::class
		];
	}

	/**
	 * Define environment setup.
	 *
	 * @param  \Illuminate\Foundation\Application  $app
	 * @return void
	 */
	protected function getEnvironmentSetUp($app)
	{
		$app['config']->set('nhsl', [

			'prefix' => env('NHSL_PREFIX', 'nhsl'),

			'middleware' => ['web'],

			'alert_banner_on' => false,

			'register_url' => 'https://leadershipacademy.nhs.uk',

			'options' => [
				'global_date_format' => 'd/m/Y',
				'global_date_short_format' => 'd M Y',
				'global_datetime_format' => 'd/m/Y H:i',
				'global_date_format_javascript' => 'DD/MM/YYYY',
			]
		]);
	}

	/**
	 * Config test.
	 */
	public function test_config()
	{
		$this->assertEquals(config('nhsl.prefix'), 'nhsl');
		$this->assertEquals(config('nhsl.middleware'), ['web']);
		$this->assertEquals(config('nhsl.alert_banner_on'), false);
		$this->assertEquals(config('nhsl.register_url'), 'https://leadershipacademy.nhs.uk');

		$this->assertEquals(config('nhsl.options.global_date_format'), 'd/m/Y');
		$this->assertEquals(config('nhsl.options.global_date_short_format'), 'd M Y');
		$this->assertEquals(config('nhsl.options.global_datetime_format'), 'd/m/Y H:i');
		$this->assertEquals(config('nhsl.options.global_date_format_javascript'), 'DD/MM/YYYY');
	}
}
