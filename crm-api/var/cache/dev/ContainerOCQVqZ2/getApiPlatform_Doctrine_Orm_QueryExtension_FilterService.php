<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'api_platform.doctrine.orm.query_extension.filter' shared service.

include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/ContextAwareQueryCollectionExtensionInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/FilterExtension.php';

return $this->privates['api_platform.doctrine.orm.query_extension.filter'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.filter_locator'] ?? $this->getApiPlatform_FilterLocatorService()));
