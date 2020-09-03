<?php namespace Core;

use App\Models;
class Controllers{

	public function __construct(){
		$this->views = new Views();
		$this->loadModel();
	}

	public function loadModel(){
		//HomeModel
		$model = get_class($this).'Model';
		$modelRoute = $model.'.php';
		if(file_exists($modelRoute)){
			require_once($modelRoute);
			$this->model = new $model();
		}
	}
}