<?php namespace Laminate\Dropdown\Repos\Dropdowns;

interface DropdownRepositoryInterface {

	public function getList($key);

	public function addItem($request);
}