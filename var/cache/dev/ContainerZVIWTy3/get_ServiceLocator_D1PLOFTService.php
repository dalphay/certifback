<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.d1PLOFT' shared service.

return $this->privates['.service_locator.d1PLOFT'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('repo' => function (): \App\Repository\ProductRepository {
    return ($this->privates['App\Repository\ProductRepository'] ?? $this->load('getProductRepositoryService.php'));
}));