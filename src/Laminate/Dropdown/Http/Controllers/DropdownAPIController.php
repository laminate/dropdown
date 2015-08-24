<?php namespace Laminate\Dropdown\Http\Controllers;

use Laminate\Dropdown\Http\Requests\DropdownRequest;
use Laminate\Dropdown\Repos\Dropdowns\DropdownRepositoryInterface;

class DropdownAPIController extends Controller {

	protected $dropdown;

	public function __construct(DropdownRepositoryInterface $dropdown) {
		$this->dropdown = $dropdown;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(DropdownRequest $request) {
		$code = $this->dropdown->addItem($request);

		return response()->json(['name' => $code->name, 'id' => $code->id], 200);
	}

}
