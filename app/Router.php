<?php


namespace App;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

class Router
{
    public function __invoke(RouteCollection $routes)
    {
        $context = new RequestContext('/');
        $request = Request::createFromGlobals();
        $context->fromRequest($request);

        // Routing can match routes with incoming requests
        $matcher = new UrlMatcher($routes, $context);
        try {
            $matcher = $matcher->match($_SERVER['REQUEST_URI']);

            // Cast params to int if numeric
            array_walk($matcher, function (&$param) {
                if (is_numeric($param)) {
                    $param = (int)$param;
                }
            });
            $className = '\\App\\Controllers\\' . $matcher['_controller'];
            $classInstance = new $className();

            // Add routes as paramaters to the next class
            $params = array_merge((array)array_slice($matcher, 2, -1), array('routes' => $routes));

            call_user_func_array(array($classInstance, $matcher['_route']), $params);

        } catch (MethodNotAllowedException $e) {
            echo 'Route method is not allowed.';
        } catch (ResourceNotFoundException $e) {
            echo 'Route does not exists.';
        }
    }
}

$router = new Router();
$router($routes);