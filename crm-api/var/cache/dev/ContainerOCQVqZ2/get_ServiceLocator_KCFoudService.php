<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.k_CFoud' shared service.

return $this->privates['.service_locator.k_CFoud'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'authenticationSuccessHandler' => ['privates', 'lexik_jwt_authentication.handler.authentication_success', 'getLexikJwtAuthentication_Handler_AuthenticationSuccessService.php', true],
    'clientRepository' => ['privates', 'App\\Repository\\ClientRepository', 'getClientRepositoryService.php', true],
], [
    'authenticationSuccessHandler' => '?',
    'clientRepository' => 'App\\Repository\\ClientRepository',
]);
