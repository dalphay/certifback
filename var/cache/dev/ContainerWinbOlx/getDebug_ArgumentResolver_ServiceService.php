<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\ProductController::all' => function () {
    return ($this->privates['.service_locator.d1PLOFT'] ?? $this->load('get_ServiceLocator_D1PLOFTService.php'));
}, 'App\\Controller\\ProductController::del' => function () {
    return ($this->privates['.service_locator.4nPGKhY'] ?? $this->load('get_ServiceLocator_4nPGKhYService.php'));
}, 'App\\Controller\\ProductController::getAll' => function () {
    return ($this->privates['.service_locator.d1PLOFT'] ?? $this->load('get_ServiceLocator_D1PLOFTService.php'));
}, 'App\\Controller\\ProductController::one' => function () {
    return ($this->privates['.service_locator.4nPGKhY'] ?? $this->load('get_ServiceLocator_4nPGKhYService.php'));
}, 'App\\Controller\\ProductController::update' => function () {
    return ($this->privates['.service_locator.4nPGKhY'] ?? $this->load('get_ServiceLocator_4nPGKhYService.php'));
}, 'App\\Controller\\ShoppingCartController::add' => function () {
    return ($this->privates['.service_locator.4nPGKhY'] ?? $this->load('get_ServiceLocator_4nPGKhYService.php'));
}, 'App\\Controller\\ShoppingCartController::del' => function () {
    return ($this->privates['.service_locator.4nPGKhY'] ?? $this->load('get_ServiceLocator_4nPGKhYService.php'));
}, 'App\\Controller\\ShoppingCartController::updateQty' => function () {
    return ($this->privates['.service_locator.4nPGKhY'] ?? $this->load('get_ServiceLocator_4nPGKhYService.php'));
}, 'App\\Controller\\UserController::register' => function () {
    return ($this->privates['.service_locator.DcgCYKP'] ?? $this->load('get_ServiceLocator_DcgCYKPService.php'));
}, 'App\\Controller\\UserController::register2' => function () {
    return ($this->privates['.service_locator.DcgCYKP'] ?? $this->load('get_ServiceLocator_DcgCYKPService.php'));
}, 'App\\Controller\\UserController::update' => function () {
    return ($this->privates['.service_locator.DcgCYKP'] ?? $this->load('get_ServiceLocator_DcgCYKPService.php'));
}, 'App\\Controller\\ProductController:all' => function () {
    return ($this->privates['.service_locator.d1PLOFT'] ?? $this->load('get_ServiceLocator_D1PLOFTService.php'));
}, 'App\\Controller\\ProductController:del' => function () {
    return ($this->privates['.service_locator.4nPGKhY'] ?? $this->load('get_ServiceLocator_4nPGKhYService.php'));
}, 'App\\Controller\\ProductController:getAll' => function () {
    return ($this->privates['.service_locator.d1PLOFT'] ?? $this->load('get_ServiceLocator_D1PLOFTService.php'));
}, 'App\\Controller\\ProductController:one' => function () {
    return ($this->privates['.service_locator.4nPGKhY'] ?? $this->load('get_ServiceLocator_4nPGKhYService.php'));
}, 'App\\Controller\\ProductController:update' => function () {
    return ($this->privates['.service_locator.4nPGKhY'] ?? $this->load('get_ServiceLocator_4nPGKhYService.php'));
}, 'App\\Controller\\ShoppingCartController:add' => function () {
    return ($this->privates['.service_locator.4nPGKhY'] ?? $this->load('get_ServiceLocator_4nPGKhYService.php'));
}, 'App\\Controller\\ShoppingCartController:del' => function () {
    return ($this->privates['.service_locator.4nPGKhY'] ?? $this->load('get_ServiceLocator_4nPGKhYService.php'));
}, 'App\\Controller\\ShoppingCartController:updateQty' => function () {
    return ($this->privates['.service_locator.4nPGKhY'] ?? $this->load('get_ServiceLocator_4nPGKhYService.php'));
}, 'App\\Controller\\UserController:register' => function () {
    return ($this->privates['.service_locator.DcgCYKP'] ?? $this->load('get_ServiceLocator_DcgCYKPService.php'));
}, 'App\\Controller\\UserController:register2' => function () {
    return ($this->privates['.service_locator.DcgCYKP'] ?? $this->load('get_ServiceLocator_DcgCYKPService.php'));
}, 'App\\Controller\\UserController:update' => function () {
    return ($this->privates['.service_locator.DcgCYKP'] ?? $this->load('get_ServiceLocator_DcgCYKPService.php'));
}))), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));