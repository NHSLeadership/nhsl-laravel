<?php

namespace Nhsl\NhslLaravel\Test\Feature;

use Illuminate\Support\Facades\Route;
use Nhsl\NhslLaravel\Test\TestCase;

class AccessNhslRouteTest extends TestCase
{
	/**
	 * Page accessibility test.
	 */
	public function test_has_nhsl_route() : void
	{
		$this->assertEquals(Route::has('nhsl.index'), true);
	}
}
