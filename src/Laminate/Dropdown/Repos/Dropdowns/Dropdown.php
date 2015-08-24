<?php namespace Laminate\Dropdown\Repos\Dropdowns;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dropdown extends Eloquent {

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable = [
		'model',
		'name',
		'order',
	];

}