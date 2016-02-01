# Router

Router for the level 2 framework. This is an extensible router, the router does not provide any routing rules and needs to be extended with rules that use the `Level2\Router\Rule` interface.

## Usage


Create an instance of the router and load any rules into it

```php

//Create an instance of a class that implements \Level2\Router\Rule
$rule = new Rule;

$router = new \Level2\Router\Router;
$router->addRule($rule);

$url = $_SERVER['REQUEST_URI']

$route = $router->find(explode('/', $url))

```


The router will return a `Route` object that has methods for returning the matched model, view and controller. It is up to the loaded rule to create this instance.