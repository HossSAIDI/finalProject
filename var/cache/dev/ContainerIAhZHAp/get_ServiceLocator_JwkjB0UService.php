<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.JwkjB0U' shared service.

return $this->privates['.service_locator.JwkjB0U'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'unavailablePeriod' => ['privates', '.errored..service_locator.JwkjB0U.App\\Entity\\UnavailablePeriod', NULL, 'Cannot autowire service ".service_locator.JwkjB0U": it references class "App\\Entity\\UnavailablePeriod" but no such service exists.'],
], [
    'unavailablePeriod' => 'App\\Entity\\UnavailablePeriod',
]);
