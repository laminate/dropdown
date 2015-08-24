<?php namespace Laminate\Dropdown\Repos\Dropdowns;

use Illuminate\Support\Facades\Cache;

class DbDropdownRepository implements DropdownRepositoryInterface {

	public function __construct(Dropdown $model) {
		$this->model = $model;
	}

	public function getList($key) {
		return Cache::remember($this->getListCacheKey($key), 60, function () use ($key) {
			return $this->model->whereModel($key)->orderBy('order')->orderBy('name')->lists('name', 'id')->all();
		});
	}

	public function addItem($request) {
		Cache::forget($this->getListCacheKey($request->get('model')));
		return $this->model->create($request->all());
	}

	protected function getListCacheKey($key) {
		return 'dd.list.' . $key;
	}

	public function getText($id, $model) {
		if (empty($id)) {
			return '';
		}

		$list = $this->getList($model);

		return $list[$id];
	}
}
