<?php 
namespace Level2\Router;
class Router {
	private $rules = array();
	 
	public function addRule(Rule $rule) {
		$this->rules[] = $rule;
	}

	public function find(array $route) {
		foreach ($this->rules as $rule) {
			if ($found = $rule->find($route)) return $found;
		}		 
		throw new \Exception('No matching route found');
	}
}