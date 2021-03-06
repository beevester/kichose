<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'lexik_jwt_authentication.handler.authentication_success' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Security/Http/Authentication/AuthenticationSuccessHandler.php';

return $this->privates['lexik_jwt_authentication.handler.authentication_success'] = new \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler(($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->load('getLexikJwtAuthentication_JwtManagerService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
