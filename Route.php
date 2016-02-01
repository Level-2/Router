<?php 
namespace Level2\Router;
class Route {
    private $view;
    private $controller;
	private $model;
	private $baseDir;

    public function __construct($model = null, $view = null, $controller = null, $baseDir = null) {
    	$this->model = $model;
        $this->view = $view;
        $this->controller = $controller;
        $this->baseDir = $baseDir;
    }

    public function getModel() {
    	return $this->model;
    }
    
    public function getView() {
        return $this->view;
    }

    public function getController() {
        return $this->controller;
    }

    public function getBaseDir() {
        return $this->baseDir;
    }
}