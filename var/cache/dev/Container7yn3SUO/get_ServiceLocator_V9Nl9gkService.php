<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.v9Nl9gk' shared service.

return $this->privates['.service_locator.v9Nl9gk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'roomRepository' => ['privates', 'App\\Repository\\RoomRepository', 'getRoomRepositoryService.php', true],
], [
    'roomRepository' => 'App\\Repository\\RoomRepository',
]);
