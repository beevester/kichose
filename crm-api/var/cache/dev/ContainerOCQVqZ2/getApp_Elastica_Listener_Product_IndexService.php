<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'app.elastica.listener.product.index' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/EventListener/ElasticaProductListener.php';

return $this->privates['app.elastica.listener.product.index'] = new \App\EventListener\ElasticaProductListener(($this->privates['App\\Service\\Elastica\\Client\\ElasticaClientProduct'] ?? $this->load('getElasticaClientProductService.php')));
