<?php namespace Laminate\Dropdown\Repos\Dropdowns;

use Illuminate\Support\Facades\Facade;

class DropdownRepo extends Facade {

	protected static function getFacadeAccessor() {
		return 'dropdownrepo';
	}
}
