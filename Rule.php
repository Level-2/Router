<?php 
namespace Level2\Router;
interface Rule {
	public function find(array $route);
}