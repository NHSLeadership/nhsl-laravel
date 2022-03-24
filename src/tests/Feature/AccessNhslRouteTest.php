<?php

namespace Nhsl\NhslLaravel\Tests\Feature;

use Tests\TestCase;

class AccessNhslRouteTest extends TestCase
{
	/**
	 * A basic test example.
	 *
	 * @return void
	 */
	public function access_routes_test()
	{
		$response = $this->get('/nhsl');

		$response->assertStatus(200);
	}
}
