<?php namespace Laminate\Dropdown\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DropdownRequest extends FormRequest {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'name' => 'required',
		];
	}

	/**
	 * Get the sanitized input for the request.
	 *
	 * @return array
	 */
	public function sanitize() {
		return $this->all();
	}

}
