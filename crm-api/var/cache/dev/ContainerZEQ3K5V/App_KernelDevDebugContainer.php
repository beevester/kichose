<?php

namespace ContainerZEQ3K5V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class App_KernelDevDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'cache.app' => 'getCache_AppService',
            'cache.doctrine.orm.default.metadata' => 'getCache_Doctrine_Orm_Default_MetadataService',
            'cache.doctrine.orm.default.query' => 'getCache_Doctrine_Orm_Default_QueryService',
            'cache.doctrine.orm.default.result' => 'getCache_Doctrine_Orm_Default_ResultService',
            'cache.system' => 'getCache_SystemService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'http_kernel' => 'getHttpKernelService',
            'liip_imagine.cache.manager' => 'getLiipImagine_Cache_ManagerService',
            'liip_imagine.cache.resolver.default' => 'getLiipImagine_Cache_Resolver_DefaultService',
            'liip_imagine.cache.resolver.no_cache_web_path' => 'getLiipImagine_Cache_Resolver_NoCacheWebPathService',
            'liip_imagine.cache.signer' => 'getLiipImagine_Cache_SignerService',
            'oneup_flysystem.file_filesystem_filesystem' => 'getOneupFlysystem_FileFilesystemFilesystemService',
            'oneup_flysystem.image_filesystem_filesystem' => 'getOneupFlysystem_ImageFilesystemFilesystemService',
            'oneup_flysystem.mount_manager' => 'getOneupFlysystem_MountManagerService',
            'profiler' => 'getProfilerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'serializer' => 'getSerializerService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'validator' => 'getValidatorService',
            'vich_uploader.upload_handler' => 'getVichUploader_UploadHandlerService',
        ];
        $this->fileMap = [
            'App\\Controller\\Category\\CategoryFrontendGetCollectionAction' => 'getCategoryFrontendGetCollectionActionService.php',
            'App\\Controller\\Category\\CategoryFrontendGetItemAction' => 'getCategoryFrontendGetItemActionService.php',
            'App\\Controller\\Client\\ClientGetItemAction' => 'getClientGetItemActionService.php',
            'App\\Controller\\Client\\ClientLoginByTokenCollectionAction' => 'getClientLoginByTokenCollectionActionService.php',
            'App\\Controller\\Client\\ClientPutItemController' => 'getClientPutItemControllerService.php',
            'App\\Controller\\Client\\ClientRemindPasswordCollectionController' => 'getClientRemindPasswordCollectionControllerService.php',
            'App\\Controller\\Client\\ClientSignupPostCollectionController' => 'getClientSignupPostCollectionControllerService.php',
            'App\\Controller\\CompanyLastAction' => 'getCompanyLastActionService.php',
            'App\\Controller\\CreateFileAction' => 'getCreateFileActionService.php',
            'App\\Controller\\CreateImageAction' => 'getCreateImageActionService.php',
            'App\\Controller\\DashboardAction' => 'getDashboardActionService.php',
            'App\\Controller\\DownloadFileAction' => 'getDownloadFileActionService.php',
            'App\\Controller\\History\\HistoryGetEntityCollectionAction' => 'getHistoryGetEntityCollectionActionService.php',
            'App\\Controller\\Product\\ProductFrontendGetItemAction' => 'getProductFrontendGetItemActionService.php',
            'App\\Controller\\SearchAction' => 'getSearchActionService.php',
            'App\\Controller\\TaskDeadlineAction' => 'getTaskDeadlineActionService.php',
            'App\\Controller\\Text\\TextFrontendGetItemAction' => 'getTextFrontendGetItemActionService.php',
            'App\\Controller\\User\\UserPostCollectionController' => 'getUserPostCollectionControllerService.php',
            'App\\Controller\\User\\UserPutItemController' => 'getUserPutItemControllerService.php',
            'Liip\\ImagineBundle\\Controller\\ImagineController' => 'getImagineControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'Vich\\UploaderBundle\\Naming\\Base64Namer' => 'getBase64NamerService.php',
            'Vich\\UploaderBundle\\Naming\\CurrentDateTimeDirectoryNamer' => 'getCurrentDateTimeDirectoryNamerService.php',
            'Vich\\UploaderBundle\\Naming\\HashNamer' => 'getHashNamerService.php',
            'Vich\\UploaderBundle\\Naming\\OrignameNamer' => 'getOrignameNamerService.php',
            'Vich\\UploaderBundle\\Naming\\PropertyDirectoryNamer' => 'getPropertyDirectoryNamerService.php',
            'Vich\\UploaderBundle\\Naming\\PropertyNamer' => 'getPropertyNamerService.php',
            'Vich\\UploaderBundle\\Naming\\SmartUniqueNamer' => 'getSmartUniqueNamerService.php',
            'Vich\\UploaderBundle\\Naming\\SubdirDirectoryNamer' => 'getSubdirDirectoryNamerService.php',
            'Vich\\UploaderBundle\\Naming\\UniqidNamer' => 'getUniqidNamerService.php',
            'Vich\\UploaderBundle\\Naming\\UniqidNamer.file' => 'getUniqidNamer_FileService.php',
            'Vich\\UploaderBundle\\Naming\\UniqidNamer.image' => 'getUniqidNamer_ImageService.php',
            'api_platform.action.documentation' => 'getApiPlatform_Action_DocumentationService.php',
            'api_platform.action.entrypoint' => 'getApiPlatform_Action_EntrypointService.php',
            'api_platform.action.exception' => 'getApiPlatform_Action_ExceptionService.php',
            'api_platform.action.not_found' => 'getApiPlatform_Action_NotFoundService.php',
            'api_platform.action.placeholder' => 'getApiPlatform_Action_PlaceholderService.php',
            'api_platform.jsonld.action.context' => 'getApiPlatform_Jsonld_Action_ContextService.php',
            'api_platform.swagger.action.ui' => 'getApiPlatform_Swagger_Action_UiService.php',
            'cache.app_clearer' => 'getCache_AppClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command.public_alias.App\\Command\\ElasticaIndexProductCommand' => 'getElasticaIndexProductCommandService.php',
            'console.command.public_alias.App\\Command\\ElasticaIndexSearchCommand' => 'getElasticaIndexSearchCommandService.php',
            'console.command.public_alias.App\\Command\\GoogleAuthCommand' => 'getGoogleAuthCommandService.php',
            'console.command.public_alias.api_platform.json_schema.json_schema_generate_command' => 'getConsole_Command_PublicAlias_ApiPlatform_JsonSchema_JsonSchemaGenerateCommandService.php',
            'console.command.public_alias.api_platform.swagger.command.swagger_command' => 'getConsole_Command_PublicAlias_ApiPlatform_Swagger_Command_SwaggerCommandService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService.php',
            'error_controller' => 'getErrorControllerService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'form.type.file' => 'getForm_Type_FileService.php',
            'gesdinet.jwtrefreshtoken' => 'getGesdinet_JwtrefreshtokenService.php',
            'gesdinet.jwtrefreshtoken.refresh_token_manager' => 'getGesdinet_Jwtrefreshtoken_RefreshTokenManagerService.php',
            'jms_serializer' => 'getJmsSerializerService.php',
            'jms_serializer.deserialization_context_factory' => 'getJmsSerializer_DeserializationContextFactoryService.php',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService.php',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService.php',
            'jms_serializer.serialization_context_factory' => 'getJmsSerializer_SerializationContextFactoryService.php',
            'jms_serializer.twig_extension.serializer_runtime_helper' => 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php',
            'lexik_jwt_authentication.check_config_command' => 'getLexikJwtAuthentication_CheckConfigCommandService.php',
            'lexik_jwt_authentication.encoder' => 'getLexikJwtAuthentication_EncoderService.php',
            'lexik_jwt_authentication.generate_token_command' => 'getLexikJwtAuthentication_GenerateTokenCommandService.php',
            'lexik_jwt_authentication.jwt_manager' => 'getLexikJwtAuthentication_JwtManagerService.php',
            'lexik_jwt_authentication.key_loader' => 'getLexikJwtAuthentication_KeyLoaderService.php',
            'liip_imagine.binary.loader.default' => 'getLiipImagine_Binary_Loader_DefaultService.php',
            'liip_imagine.config.stack_collection' => 'getLiipImagine_Config_StackCollectionService.php',
            'liip_imagine.data.manager' => 'getLiipImagine_Data_ManagerService.php',
            'liip_imagine.filter.loader.downscale' => 'getLiipImagine_Filter_Loader_DownscaleService.php',
            'liip_imagine.filter.loader.fixed' => 'getLiipImagine_Filter_Loader_FixedService.php',
            'liip_imagine.filter.loader.flip' => 'getLiipImagine_Filter_Loader_FlipService.php',
            'liip_imagine.filter.loader.grayscale' => 'getLiipImagine_Filter_Loader_GrayscaleService.php',
            'liip_imagine.filter.loader.interlace' => 'getLiipImagine_Filter_Loader_InterlaceService.php',
            'liip_imagine.filter.loader.resample' => 'getLiipImagine_Filter_Loader_ResampleService.php',
            'liip_imagine.filter.loader.rotate' => 'getLiipImagine_Filter_Loader_RotateService.php',
            'liip_imagine.filter.manager' => 'getLiipImagine_Filter_ManagerService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session' => 'getSessionService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService.php',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService.php',
            'swiftmailer.transport' => 'getSwiftmailer_TransportService.php',
            'vich_uploader.download_handler' => 'getVichUploader_DownloadHandlerService.php',
            'vich_uploader.form.type.file' => 'getVichUploader_Form_Type_FileService.php',
            'vich_uploader.form.type.image' => 'getVichUploader_Form_Type_ImageService.php',
            'web_profiler.controller.exception_panel' => 'getWebProfiler_Controller_ExceptionPanelService.php',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService.php',
        ];
        $this->aliases = [
            'ApiPlatform\\Core\\Action\\NotFoundAction' => 'api_platform.action.not_found',
            'api_platform.action.delete_item' => 'api_platform.action.placeholder',
            'api_platform.action.get_collection' => 'api_platform.action.placeholder',
            'api_platform.action.get_item' => 'api_platform.action.placeholder',
            'api_platform.action.get_subresource' => 'api_platform.action.placeholder',
            'api_platform.action.patch_item' => 'api_platform.action.placeholder',
            'api_platform.action.post_collection' => 'api_platform.action.placeholder',
            'api_platform.action.put_item' => 'api_platform.action.placeholder',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'liip_imagine.controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController',
            'mailer' => 'swiftmailer.mailer.default',
            'vich_uploader.directory_namer_subdir' => 'Vich\\UploaderBundle\\Naming\\SubdirDirectoryNamer',
            'vich_uploader.namer_base64' => 'Vich\\UploaderBundle\\Naming\\Base64Namer',
            'vich_uploader.namer_directory_current_date_time' => 'Vich\\UploaderBundle\\Naming\\CurrentDateTimeDirectoryNamer',
            'vich_uploader.namer_directory_property' => 'Vich\\UploaderBundle\\Naming\\PropertyDirectoryNamer',
            'vich_uploader.namer_hash' => 'Vich\\UploaderBundle\\Naming\\HashNamer',
            'vich_uploader.namer_origname' => 'Vich\\UploaderBundle\\Naming\\OrignameNamer',
            'vich_uploader.namer_property' => 'Vich\\UploaderBundle\\Naming\\PropertyNamer',
            'vich_uploader.namer_smart_unique' => 'Vich\\UploaderBundle\\Naming\\SmartUniqueNamer',
            'vich_uploader.namer_uniqid' => 'Vich\\UploaderBundle\\Naming\\UniqidNamer',
        ];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernelInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/KernelInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/RebootableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/TerminableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Kernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php';
            include_once \dirname(__DIR__, 4).'/src/Kernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/aws/aws-sdk-php/src/AwsClientInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/aws/aws-sdk-php/src/AwsClientTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/aws/aws-sdk-php/src/AwsClient.php';
            include_once \dirname(__DIR__, 4).'/vendor/aws/aws-sdk-php/src/S3/S3ClientInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/aws/aws-sdk-php/src/Api/Parser/PayloadParserTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/aws/aws-sdk-php/src/S3/S3ClientTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/aws/aws-sdk-php/src/S3/S3Client.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/DisallowRobotsIndexingListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ErrorListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/FrozenParameterBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/container/src/ContainerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/TraceableControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/TraceableArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestStack.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ResetInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/TraceableAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/SessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ServiceLocator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilder.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Validation.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ContainerConstraintValidatorFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ObjectInitializerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/LoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/AutoMappingTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/PropertyInfoLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Validator/DoctrineLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/TranslatorBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Translator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Translation/Translator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/IntlFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/IdentityTranslator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Profiler/Profiler.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Profiler/FileProfilerStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Logger.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Log/DebugLoggerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Logger.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/DataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/DataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataCollector/RequestDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/LateDataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/TimeDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/MemoryDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/DataCollector/ValidatorDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/AjaxDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/ExceptionDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/LoggerDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/EventDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/DataCollector/CacheDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/DataCollector/SecurityDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/DataCollector/TwigDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/DataCollector/DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/DataCollector/DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/DataCollector/MessageDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/DataCollector/MappingCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/ConfigDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ProfilerListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/RequestDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/DataCollector/RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/FormDataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/FormDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/FormDataExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/FormDataExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/stopwatch/Stopwatch.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Processor/DebugProcessor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RequestContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/ArrayAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ContextAwareNormalizerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ContextAwareDenormalizerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/EncoderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/ContextAwareEncoderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/DecoderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/ContextAwareDecoderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Serializer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/ContextTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/Serializer/JsonLdContextTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerAwareTrait.php';
            include_once \dirname(__DIR__, 4).'/src/Service/Normalizer/ElasticaCollectionNormalizer.php';
            include_once \dirname(__DIR__, 4).'/src/Service/Normalizer/ElasticaItemNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Swagger/Serializer/ApiGatewayNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/FilterLocatorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Swagger/Serializer/DocumentationNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/PathResolver/OperationPathResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouterOperationPathResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/AbstractConstraintViolationListNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/ConstraintViolationListNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Problem/Serializer/ConstraintViolationListNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/DocumentationNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/EntrypointNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Problem/Serializer/ErrorNormalizerTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/ErrorNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Problem/Serializer/ErrorNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ProblemNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ObjectToPopulateTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/AbstractNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/AbstractObjectNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Util/ClassInfoTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/InputOutputMetadataTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/AbstractItemNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/Serializer/ItemNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/ItemNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/JsonSerializableNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateTimeNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateTimeZoneNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateIntervalNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DataUriNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/CollectionFiltersNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/PartialCollectionViewNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/CollectionNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ArrayDenormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/Serializer/ObjectNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ObjectNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/ClassDiscriminatorResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/NormalizationAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/XmlEncoder.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/JsonEncoder.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/YamlEncoder.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/CsvEncoder.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/JsonEncoder.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/ClassResolverTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Loader/LoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Loader/LoaderChain.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Loader/AnnotationLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/NameConverter/NameConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/NameConverter/AdvancedNameConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/NameConverter/MetadataAwareNameConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyTypeExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyDescriptionExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyAccessExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyListExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInfoExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInitializableExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInfoExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-link/EventListener/AddLinkHeaderListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypeGuesserInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypesInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypes.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Environment.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/LoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/FilesystemLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/AbstractExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CsrfExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/AssetExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Packages.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PackageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Package.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PathPackage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/EmptyVersionStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Context/ContextInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Context/RequestStackContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/UrlHelper.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/WebLinkExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/FormExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/SecurityExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/DebugExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Twig/Extension/UploaderExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Templating/Helper/UploaderHelper.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Twig/SerializerRuntimeExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Twig/WebProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/DataDumperInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Cloner/DumperInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/AbstractDumper.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/CliDumper.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/HtmlDumper.php';
            include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Templating/FilterTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Templating/FilterExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/AppVariable.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/RuntimeLoader/RuntimeLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/RuntimeLoader/ContainerRuntimeLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Profiler/Profile.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AuthorizationCheckerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AuthorizationChecker.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/UsageTrackingTokenStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationProviderManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/expression-language/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Role/RoleHierarchyInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Role/RoleHierarchy.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/FirewallMapInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallMap.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutUrlGenerator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RememberMe/ResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AccessDecisionManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/TraceableAccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/EventListener/FirewallListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Debug/TraceableFirewallListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ConnectionRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/AbstractManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Registry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/SQLLogger.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Logger/DbalLogger.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/BaseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/CleanListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Adapter/AdapterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Adapter/ORM/DoctrineORMAdapter.php';
            include_once \dirname(__DIR__, 4).'/src/EventListener/Logger/EntityLoggerSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/RemoveListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/UploadListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Mapping/MappedEventSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/AbstractTrackingListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Timestampable/TimestampableListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Sluggable/SluggableListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/DoctrineProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriverChain.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/FileDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/XmlDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/FileLocator.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/SymfonyFileLocator.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/ResourceClassResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/ResourceClassResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RouterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/IriConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Util/ResourceClassInfoTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/OperationDataProviderTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/IriConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouteNameResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Cache/CachedTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/CachedRouteNameResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouteNameResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/SerializerContextBuilderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/SerializerFilterContextBuilder.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/SerializerContextBuilder.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/PathResolver/CustomOperationPathResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/PathResolver/OperationPathResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Operation/PathSegmentNameGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Operation/UnderscorePathSegmentNameGenerator.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/AddFormatListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/willdurand/negotiation/src/Negotiation/AbstractNegotiator.php';
            include_once \dirname(__DIR__, 4).'/vendor/willdurand/negotiation/src/Negotiation/Negotiator.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Util/CloneTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/ToggleableOperationAttributeTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/ReadListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/DeserializeListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/IdentifiersExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/CachedIdentifiersExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/IdentifiersExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Identifier/IdentifierConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Identifier/ContextAwareIdentifierConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Identifier/IdentifierConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Operation/Factory/SubresourceOperationFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Operation/Factory/CachedSubresourceOperationFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Operation/Factory/SubresourceOperationFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/ResourceNameCollectionFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/CachedResourceNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/ExtractorResourceNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/ResourceMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/CachedResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/FormatsResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/OperationResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Util/AnnotationFilterExtractorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceFilterMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/ShortNameResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/PhpDocResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/InputOutputResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/ExtractorResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/PropertyNameCollectionFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/CachedPropertyNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/ExtractorPropertyNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/InheritedPropertyNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/PropertyInfo/Metadata/Property/PropertyInfoPropertyNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/PropertyMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/CachedPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Validator/Metadata/Property/ValidatorPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/ExtractorPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/AnnotationPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/AnnotationSubresourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/SerializerPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Metadata/Property/DoctrineOrmPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/InheritedPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/PropertyInfo/Metadata/Property/PropertyInfoPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Extractor/ExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Extractor/AbstractExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Extractor/XmlExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Extractor/YamlExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonSchema/TypeFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonSchema/TypeFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/EventListener/SwaggerUiListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/ContextBuilderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/AnonymousContextBuilderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/ContextBuilder.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Util/CorsTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/EventListener/AddLinkHeaderListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonSchema/SchemaFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/JsonSchema/SchemaFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonSchema/SchemaFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/HttpCache/EventListener/AddHeadersListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Filter/QueryParameterValidateListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/CollectionDataProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/ContextAwareCollectionDataProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataProvider/TraceableChainCollectionDataProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/ChainCollectionDataProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/ItemDataProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataProvider/TraceableChainItemDataProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/ChainItemDataProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/SubresourceDataProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataProvider/TraceableChainSubresourceDataProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/ChainSubresourceDataProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/DataPersisterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/ContextAwareDataPersisterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataPersister/TraceableChainDataPersister.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/ChainDataPersister.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Security/EventListener/DenyAccessListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Security/ResourceAccessCheckerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Security/ResourceAccessChecker.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/expression-language/ExpressionFunctionProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Security/Core/Authorization/ExpressionLanguageProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/EventListener/CorsListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/Options/ResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/Options/Resolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/Options/ProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/Options/ConfigProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Metadata/MetadataReader.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/MetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/AdvancedMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/MetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/DriverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AdvancedDriverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/DriverChain.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AbstractFileDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Metadata/Driver/XmlDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/FileLocatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AdvancedFileLocatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/FileLocator.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Metadata/Driver/AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Metadata/Driver/YamlDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Cache/CacheInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Cache/FileCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Mapping/PropertyMappingFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Handler/AbstractHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Handler/UploadHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Injector/FileInjectorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Injector/FileInjector.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Storage/StorageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Storage/AbstractStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Storage/FlysystemStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/ControllerListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/ParamConverterListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DoctrineParamConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DateTimeParamConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/TemplateListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Templating/TemplateGuesser.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/HttpCacheListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/SecurityListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Security/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/IsGrantedListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ArgumentNameConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/Handler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/ProcessableHandlerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/FormattableHandlerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/ProcessableHandlerTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/FormattableHandlerTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Processor/ProcessorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Handler/ConsoleHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Csp/ContentSecurityPolicyHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Csp/NonceGenerator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/EventListener/WebDebugToolbarListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/Resolver/ResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/Resolver/WebPathResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/CacheManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/FilterConfiguration.php';
            include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/Resolver/NoCacheWebPathResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/SignerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/Signer.php';
            include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/FilesystemInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/Plugin/PluggableTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/MountManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/ConfigAwareTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/Filesystem.php';
            include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/ReadInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/AdapterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/Adapter/AbstractAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/Adapter/CanOverwriteFiles.php';
            include_once \dirname(__DIR__, 4).'/vendor/league/flysystem-aws-s3-v3/src/AwsS3Adapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Blameable/BlameableListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/antishov/doctrine-extensions-bundle/EventListener/BlameListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollectorTranslator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Validator/ValidatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Validator/TraceableValidator.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/event-dispatcher/src/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher-contracts/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventDispatcher.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/NullHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('aqN3InANu1', 0, ($this->targetDir.''.'/pools'), new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL));
        $a->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_MetadataService()
    {
        return $this->services['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_QueryService()
    {
        return $this->services['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_ResultService()
    {
        return $this->services['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('FplKveb610', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Configuration();

        $b = new \Doctrine\DBAL\Logging\LoggerChain();

        $c = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $c->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $c->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($c);

        $b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($c, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
        $b->addLogger(($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));

        $a->setSQLLogger($b);
        $d = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\EventListener\\EntityRemoveListener' => ['privates', 'App\\EventListener\\EntityRemoveListener', 'getEntityRemoveListenerService.php', true],
            'app.elastica.listener.product.index' => ['privates', 'app.elastica.listener.product.index', 'getApp_Elastica_Listener_Product_IndexService.php', true],
            'app.elastica.listener.search.index' => ['privates', 'app.elastica.listener.search.index', 'getApp_Elastica_Listener_Search_IndexService.php', true],
            'app.elastica.listener.task' => ['privates', 'app.elastica.listener.task', 'getApp_Elastica_Listener_TaskService.php', true],
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php', true],
        ], [
            'App\\EventListener\\EntityRemoveListener' => '?',
            'app.elastica.listener.product.index' => '?',
            'app.elastica.listener.search.index' => '?',
            'app.elastica.listener.task' => '?',
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
        ]));

        $e = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter();
        $f = ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService());
        $g = ($this->services['vich_uploader.upload_handler'] ?? $this->getVichUploader_UploadHandlerService());
        $h = new \Gedmo\Timestampable\TimestampableListener();

        $i = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        $h->setAnnotationReader($i);
        $j = new \Gedmo\Sluggable\SluggableListener();
        $j->setAnnotationReader($i);

        $d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('file', $e, $f, $g));
        $d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('image', $e, $f, $g));
        $d->addEventSubscriber(new \App\EventListener\Logger\EntityLoggerSubscriber(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService())));
        $d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('file', $e, $f, $g));
        $d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('file', $e, $f, $g));
        $d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('image', $e, $f, $g));
        $d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('image', $e, $f, $g));
        $d->addEventSubscriber($h);
        $d->addEventSubscriber(($this->privates['stof_doctrine_extensions.listener.blameable'] ?? $this->getStofDoctrineExtensions_Listener_BlameableService()));
        $d->addEventSubscriber($j);
        $d->addEventListener([0 => 'preRemove'], 'App\\EventListener\\EntityRemoveListener');
        $d->addEventListener([0 => 'postPersist'], 'app.elastica.listener.search.index');
        $d->addEventListener([0 => 'postUpdate'], 'app.elastica.listener.search.index');
        $d->addEventListener([0 => 'preRemove'], 'app.elastica.listener.search.index');
        $d->addEventListener([0 => 'postPersist'], 'app.elastica.listener.product.index');
        $d->addEventListener([0 => 'postUpdate'], 'app.elastica.listener.product.index');
        $d->addEventListener([0 => 'preRemove'], 'app.elastica.listener.product.index');
        $d->addEventListener([0 => 'postPersist'], 'app.elastica.listener.task');
        $d->addEventListener([0 => 'postUpdate'], 'app.elastica.listener.task');
        $d->addEventListener([0 => 'preRemove'], 'app.elastica.listener.task');
        $d->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['driver' => $this->getEnv('resolve:DATABASE_DRIVER'), 'host' => $this->getEnv('resolve:DATABASE_HOST'), 'port' => $this->getEnv('resolve:DATABASE_PORT'), 'dbname' => $this->getEnv('resolve:DATABASE_NAME'), 'user' => $this->getEnv('resolve:DATABASE_USER'), 'password' => $this->getEnv('resolve:DATABASE_PASSWORD'), 'charset' => 'UTF8', 'driverOptions' => [], 'serverVersion' => 11.4, 'defaultTableOptions' => []], $a, $d, []);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();

        $c = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).'/src/Entity'), 1 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Entity'), 2 => (\dirname(__DIR__, 4).'/vendor/gesdinet/jwt-refresh-token-bundle/Entity')]);
        $d = new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/gesdinet/jwt-refresh-token-bundle/Resources/config/orm/doctrine-orm') => 'Gesdinet\\JWTRefreshTokenBundle\\Entity', (\dirname(__DIR__, 4).'/vendor/gesdinet/jwt-refresh-token-bundle/Resources/config/orm/doctrine-entity') => 'Gesdinet\\JWTRefreshTokenBundle\\Entity'], '.orm.xml'));

        $b->addDriver($c, 'App\\Entity');
        $b->addDriver($c, 'Vich\\UploaderBundle\\Entity');
        $b->addDriver($c, 'Gesdinet\\JWTRefreshTokenBundle\\Entity');
        $b->addDriver($d, 'Gesdinet\\JWTRefreshTokenBundle\\Entity');
        $b->addDriver($d, 'Gesdinet\\JWTRefreshTokenBundle\\Entity');

        $a->setEntityNamespaces(['App' => 'App\\Entity', 'VichUploaderBundle' => 'Vich\\UploaderBundle\\Entity', 'GesdinetJWTRefreshTokenBundle' => 'Gesdinet\\JWTRefreshTokenBundle\\Entity']);
        $a->setMetadataCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService())));
        $a->setQueryCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService())));
        $a->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService())));
        $a->setMetadataDriverImpl($b);
        $a->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(true);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Repository\\AddressRepository' => ['privates', 'App\\Repository\\AddressRepository', 'getAddressRepositoryService.php', true],
            'App\\Repository\\BrandRepository' => ['privates', 'App\\Repository\\BrandRepository', 'getBrandRepositoryService.php', true],
            'App\\Repository\\CategoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService.php', true],
            'App\\Repository\\CategoryTranslationRepository' => ['privates', 'App\\Repository\\CategoryTranslationRepository', 'getCategoryTranslationRepositoryService.php', true],
            'App\\Repository\\ChannelRepository' => ['privates', 'App\\Repository\\ChannelRepository', 'getChannelRepositoryService.php', true],
            'App\\Repository\\ClientRepository' => ['privates', 'App\\Repository\\ClientRepository', 'getClientRepositoryService.php', true],
            'App\\Repository\\CompanyProductRepository' => ['privates', 'App\\Repository\\CompanyProductRepository', 'getCompanyProductRepositoryService.php', true],
            'App\\Repository\\CompanyRepository' => ['privates', 'App\\Repository\\CompanyRepository', 'getCompanyRepositoryService.php', true],
            'App\\Repository\\ContactRepository' => ['privates', 'App\\Repository\\ContactRepository', 'getContactRepositoryService.php', true],
            'App\\Repository\\ContactTypeRepository' => ['privates', 'App\\Repository\\ContactTypeRepository', 'getContactTypeRepositoryService.php', true],
            'App\\Repository\\CountryRepository' => ['privates', 'App\\Repository\\CountryRepository', 'getCountryRepositoryService.php', true],
            'App\\Repository\\CurrencyRepository' => ['privates', 'App\\Repository\\CurrencyRepository', 'getCurrencyRepositoryService.php', true],
            'App\\Repository\\DealTypeRepository' => ['privates', 'App\\Repository\\DealTypeRepository', 'getDealTypeRepositoryService.php', true],
            'App\\Repository\\DivisionRepository' => ['privates', 'App\\Repository\\DivisionRepository', 'getDivisionRepositoryService.php', true],
            'App\\Repository\\DocumentRepository' => ['privates', 'App\\Repository\\DocumentRepository', 'getDocumentRepositoryService.php', true],
            'App\\Repository\\GroupRepository' => ['privates', 'App\\Repository\\GroupRepository', 'getGroupRepositoryService.php', true],
            'App\\Repository\\HistoryRepository' => ['privates', 'App\\Repository\\HistoryRepository', 'getHistoryRepositoryService.php', true],
            'App\\Repository\\InvoiceHeaderRepository' => ['privates', 'App\\Repository\\InvoiceHeaderRepository', 'getInvoiceHeaderRepositoryService.php', true],
            'App\\Repository\\InvoiceLineRepository' => ['privates', 'App\\Repository\\InvoiceLineRepository', 'getInvoiceLineRepositoryService.php', true],
            'App\\Repository\\InvoiceStatusRepository' => ['privates', 'App\\Repository\\InvoiceStatusRepository', 'getInvoiceStatusRepositoryService.php', true],
            'App\\Repository\\InvoiceTypeRepository' => ['privates', 'App\\Repository\\InvoiceTypeRepository', 'getInvoiceTypeRepositoryService.php', true],
            'App\\Repository\\LabelRepository' => ['privates', 'App\\Repository\\LabelRepository', 'getLabelRepositoryService.php', true],
            'App\\Repository\\LanguageRepository' => ['privates', 'App\\Repository\\LanguageRepository', 'getLanguageRepositoryService.php', true],
            'App\\Repository\\ModuleRepository' => ['privates', 'App\\Repository\\ModuleRepository', 'getModuleRepositoryService.php', true],
            'App\\Repository\\OpportunityRepository' => ['privates', 'App\\Repository\\OpportunityRepository', 'getOpportunityRepositoryService.php', true],
            'App\\Repository\\OpportunityStatusRepository' => ['privates', 'App\\Repository\\OpportunityStatusRepository', 'getOpportunityStatusRepositoryService.php', true],
            'App\\Repository\\OrderHeaderRepository' => ['privates', 'App\\Repository\\OrderHeaderRepository', 'getOrderHeaderRepositoryService.php', true],
            'App\\Repository\\OrderLineRepository' => ['privates', 'App\\Repository\\OrderLineRepository', 'getOrderLineRepositoryService.php', true],
            'App\\Repository\\OrderLineStatusRepository' => ['privates', 'App\\Repository\\OrderLineStatusRepository', 'getOrderLineStatusRepositoryService.php', true],
            'App\\Repository\\OrderStatusRepository' => ['privates', 'App\\Repository\\OrderStatusRepository', 'getOrderStatusRepositoryService.php', true],
            'App\\Repository\\PaymentTypeRepository' => ['privates', 'App\\Repository\\PaymentTypeRepository', 'getPaymentTypeRepositoryService.php', true],
            'App\\Repository\\ProductRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService.php', true],
            'App\\Repository\\ProductSellPriceRepository' => ['privates', 'App\\Repository\\ProductSellPriceRepository', 'getProductSellPriceRepositoryService.php', true],
            'App\\Repository\\ProductTranslationRepository' => ['privates', 'App\\Repository\\ProductTranslationRepository', 'getProductTranslationRepositoryService.php', true],
            'App\\Repository\\ProjectRepository' => ['privates', 'App\\Repository\\ProjectRepository', 'getProjectRepositoryService.php', true],
            'App\\Repository\\ProjectStatusRepository' => ['privates', 'App\\Repository\\ProjectStatusRepository', 'getProjectStatusRepositoryService.php', true],
            'App\\Repository\\ProjectTypeRepository' => ['privates', 'App\\Repository\\ProjectTypeRepository', 'getProjectTypeRepositoryService.php', true],
            'App\\Repository\\PurchaseOrderHeaderRepository' => ['privates', 'App\\Repository\\PurchaseOrderHeaderRepository', 'getPurchaseOrderHeaderRepositoryService.php', true],
            'App\\Repository\\PurchaseOrderLineRepository' => ['privates', 'App\\Repository\\PurchaseOrderLineRepository', 'getPurchaseOrderLineRepositoryService.php', true],
            'App\\Repository\\PurchaseOrderLineStatusRepository' => ['privates', 'App\\Repository\\PurchaseOrderLineStatusRepository', 'getPurchaseOrderLineStatusRepositoryService.php', true],
            'App\\Repository\\PurchaseOrderStatusRepository' => ['privates', 'App\\Repository\\PurchaseOrderStatusRepository', 'getPurchaseOrderStatusRepositoryService.php', true],
            'App\\Repository\\RoleRepository' => ['privates', 'App\\Repository\\RoleRepository', 'getRoleRepositoryService.php', true],
            'App\\Repository\\ShipmentMethodRepository' => ['privates', 'App\\Repository\\ShipmentMethodRepository', 'getShipmentMethodRepositoryService.php', true],
            'App\\Repository\\ShippingNoticeHeaderRepository' => ['privates', 'App\\Repository\\ShippingNoticeHeaderRepository', 'getShippingNoticeHeaderRepositoryService.php', true],
            'App\\Repository\\ShippingNoticeLineRepository' => ['privates', 'App\\Repository\\ShippingNoticeLineRepository', 'getShippingNoticeLineRepositoryService.php', true],
            'App\\Repository\\ShippingNoticeLineStatusRepository' => ['privates', 'App\\Repository\\ShippingNoticeLineStatusRepository', 'getShippingNoticeLineStatusRepositoryService.php', true],
            'App\\Repository\\ShippingNoticeStatusRepository' => ['privates', 'App\\Repository\\ShippingNoticeStatusRepository', 'getShippingNoticeStatusRepositoryService.php', true],
            'App\\Repository\\StockLineRepository' => ['privates', 'App\\Repository\\StockLineRepository', 'getStockLineRepositoryService.php', true],
            'App\\Repository\\StockLineStatusRepository' => ['privates', 'App\\Repository\\StockLineStatusRepository', 'getStockLineStatusRepositoryService.php', true],
            'App\\Repository\\TaskRepository' => ['privates', 'App\\Repository\\TaskRepository', 'getTaskRepositoryService.php', true],
            'App\\Repository\\TaskStatusRepository' => ['privates', 'App\\Repository\\TaskStatusRepository', 'getTaskStatusRepositoryService.php', true],
            'App\\Repository\\TemplateRepository' => ['privates', 'App\\Repository\\TemplateRepository', 'getTemplateRepositoryService.php', true],
            'App\\Repository\\TemplateTypeRepository' => ['privates', 'App\\Repository\\TemplateTypeRepository', 'getTemplateTypeRepositoryService.php', true],
            'App\\Repository\\TextRepository' => ['privates', 'App\\Repository\\TextRepository', 'getTextRepositoryService.php', true],
            'App\\Repository\\TextTranslationRepository' => ['privates', 'App\\Repository\\TextTranslationRepository', 'getTextTranslationRepositoryService.php', true],
            'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
            'App\\Repository\\VatRepository' => ['privates', 'App\\Repository\\VatRepository', 'getVatRepositoryService.php', true],
            'App\\Repository\\WarehouseRepository' => ['privates', 'App\\Repository\\WarehouseRepository', 'getWarehouseRepositoryService.php', true],
        ], [
            'App\\Repository\\AddressRepository' => '?',
            'App\\Repository\\BrandRepository' => '?',
            'App\\Repository\\CategoryRepository' => '?',
            'App\\Repository\\CategoryTranslationRepository' => '?',
            'App\\Repository\\ChannelRepository' => '?',
            'App\\Repository\\ClientRepository' => '?',
            'App\\Repository\\CompanyProductRepository' => '?',
            'App\\Repository\\CompanyRepository' => '?',
            'App\\Repository\\ContactRepository' => '?',
            'App\\Repository\\ContactTypeRepository' => '?',
            'App\\Repository\\CountryRepository' => '?',
            'App\\Repository\\CurrencyRepository' => '?',
            'App\\Repository\\DealTypeRepository' => '?',
            'App\\Repository\\DivisionRepository' => '?',
            'App\\Repository\\DocumentRepository' => '?',
            'App\\Repository\\GroupRepository' => '?',
            'App\\Repository\\HistoryRepository' => '?',
            'App\\Repository\\InvoiceHeaderRepository' => '?',
            'App\\Repository\\InvoiceLineRepository' => '?',
            'App\\Repository\\InvoiceStatusRepository' => '?',
            'App\\Repository\\InvoiceTypeRepository' => '?',
            'App\\Repository\\LabelRepository' => '?',
            'App\\Repository\\LanguageRepository' => '?',
            'App\\Repository\\ModuleRepository' => '?',
            'App\\Repository\\OpportunityRepository' => '?',
            'App\\Repository\\OpportunityStatusRepository' => '?',
            'App\\Repository\\OrderHeaderRepository' => '?',
            'App\\Repository\\OrderLineRepository' => '?',
            'App\\Repository\\OrderLineStatusRepository' => '?',
            'App\\Repository\\OrderStatusRepository' => '?',
            'App\\Repository\\PaymentTypeRepository' => '?',
            'App\\Repository\\ProductRepository' => '?',
            'App\\Repository\\ProductSellPriceRepository' => '?',
            'App\\Repository\\ProductTranslationRepository' => '?',
            'App\\Repository\\ProjectRepository' => '?',
            'App\\Repository\\ProjectStatusRepository' => '?',
            'App\\Repository\\ProjectTypeRepository' => '?',
            'App\\Repository\\PurchaseOrderHeaderRepository' => '?',
            'App\\Repository\\PurchaseOrderLineRepository' => '?',
            'App\\Repository\\PurchaseOrderLineStatusRepository' => '?',
            'App\\Repository\\PurchaseOrderStatusRepository' => '?',
            'App\\Repository\\RoleRepository' => '?',
            'App\\Repository\\ShipmentMethodRepository' => '?',
            'App\\Repository\\ShippingNoticeHeaderRepository' => '?',
            'App\\Repository\\ShippingNoticeLineRepository' => '?',
            'App\\Repository\\ShippingNoticeLineStatusRepository' => '?',
            'App\\Repository\\ShippingNoticeStatusRepository' => '?',
            'App\\Repository\\StockLineRepository' => '?',
            'App\\Repository\\StockLineStatusRepository' => '?',
            'App\\Repository\\TaskRepository' => '?',
            'App\\Repository\\TaskStatusRepository' => '?',
            'App\\Repository\\TemplateRepository' => '?',
            'App\\Repository\\TemplateTypeRepository' => '?',
            'App\\Repository\\TextRepository' => '?',
            'App\\Repository\\TextTranslationRepository' => '?',
            'App\\Repository\\UserRepository' => '?',
            'App\\Repository\\VatRepository' => '?',
            'App\\Repository\\WarehouseRepository' => '?',
        ])));

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('event');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(new \Monolog\Handler\NullHandler());
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\EventDispatcher(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), $a, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->addListener('lexik_jwt_authentication.on_jwt_created', [0 => function () {
            return ($this->privates['api.event.jwt_created_listener'] ?? ($this->privates['api.event.jwt_created_listener'] = new \App\EventListener\JWTCreatedListener()));
        }, 1 => 'onJWTCreated'], 0);
        $instance->addListener('lexik_jwt_authentication.on_authentication_success', [0 => function () {
            return ($this->privates['api.event.authentication_success_listener'] ?? $this->load('getApi_Event_AuthenticationSuccessListenerService.php'));
        }, 1 => 'onAuthenticationSuccessResponse'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.listener.request.add_format'] ?? $this->getApiPlatform_Listener_Request_AddFormatService());
        }, 1 => 'onKernelRequest'], 7);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.listener.request.read'] ?? $this->getApiPlatform_Listener_Request_ReadService());
        }, 1 => 'onKernelRequest'], 4);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['api_platform.listener.view.write'] ?? $this->load('getApiPlatform_Listener_View_WriteService.php'));
        }, 1 => 'onKernelView'], 32);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.listener.request.deserialize'] ?? $this->getApiPlatform_Listener_Request_DeserializeService());
        }, 1 => 'onKernelRequest'], 2);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['api_platform.listener.view.serialize'] ?? $this->load('getApiPlatform_Listener_View_SerializeService.php'));
        }, 1 => 'onKernelView'], 16);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['api_platform.listener.view.respond'] ?? $this->load('getApiPlatform_Listener_View_RespondService.php'));
        }, 1 => 'onKernelView'], 8);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['api_platform.listener.exception.validation'] ?? $this->load('getApiPlatform_Listener_Exception_ValidationService.php'));
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['api_platform.listener.exception'] ?? $this->load('getApiPlatform_Listener_ExceptionService.php'));
        }, 1 => 'onKernelException'], -96);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.swagger.listener.ui'] ?? ($this->privates['api_platform.swagger.listener.ui'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\EventListener\SwaggerUiListener()));
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['api_platform.hydra.listener.response.add_link_header'] ?? $this->getApiPlatform_Hydra_Listener_Response_AddLinkHeaderService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['api_platform.http_cache.listener.response.configure'] ?? $this->getApiPlatform_HttpCache_Listener_Response_ConfigureService());
        }, 1 => 'onKernelResponse'], -1);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['api_platform.listener.view.validate'] ?? $this->load('getApiPlatform_Listener_View_ValidateService.php'));
        }, 1 => 'onKernelView'], 64);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.listener.view.validate_query_parameters'] ?? $this->getApiPlatform_Listener_View_ValidateQueryParametersService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.security.listener.request.deny_access'] ?? $this->getApiPlatform_Security_Listener_Request_DenyAccessService());
        }, 1 => 'onSecurity'], 3);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.security.listener.request.deny_access'] ?? $this->getApiPlatform_Security_Listener_Request_DenyAccessService());
        }, 1 => 'onSecurityPostDenormalize'], 1);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['nelmio_cors.cors_listener'] ?? $this->getNelmioCors_CorsListenerService());
        }, 1 => 'onKernelRequest'], 250);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['nelmio_cors.cors_listener'] ?? $this->getNelmioCors_CorsListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('lexik_jwt_authentication.on_authentication_success', [0 => function () {
            return ($this->privates['gesdinet.jwtrefreshtoken.send_token'] ?? $this->load('getGesdinet_Jwtrefreshtoken_SendTokenService.php'));
        }, 1 => 'attachRefreshToken'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['disallow_search_engine_index_response_listener'] ?? ($this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener()));
        }, 1 => 'onResponse'], -255);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_link.add_link_header_listener'] ?? ($this->privates['web_link.add_link_header_listener'] = new \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('debug.security.authorization.vote', [0 => function () {
            return ($this->privates['debug.security.voter.vote_listener'] ?? $this->load('getDebug_Security_Voter_VoteListenerService.php'));
        }, 1 => 'onVoterVote'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleTerminate'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_profiler.debug_toolbar'] ?? $this->getWebProfiler_DebugToolbarService());
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['stof_doctrine_extensions.event_listener.blame'] ?? $this->getStofDoctrineExtensions_EventListener_BlameService());
        }, 1 => 'onKernelRequest'], 0);

        return $instance;
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        $a = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));

        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService())), $a), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.argument_resolver.request_attribute'] ?? $this->load('getDebug_ArgumentResolver_RequestAttributeService.php'));
            yield 1 => ($this->privates['debug.argument_resolver.request'] ?? $this->load('getDebug_ArgumentResolver_RequestService.php'));
            yield 2 => ($this->privates['debug.argument_resolver.session'] ?? $this->load('getDebug_ArgumentResolver_SessionService.php'));
            yield 3 => ($this->privates['debug.security.user_value_resolver'] ?? $this->load('getDebug_Security_UserValueResolverService.php'));
            yield 4 => ($this->privates['debug.argument_resolver.service'] ?? $this->load('getDebug_ArgumentResolver_ServiceService.php'));
            yield 5 => ($this->privates['debug.argument_resolver.default'] ?? $this->load('getDebug_ArgumentResolver_DefaultService.php'));
            yield 6 => ($this->privates['debug.argument_resolver.variadic'] ?? $this->load('getDebug_ArgumentResolver_VariadicService.php'));
            yield 7 => ($this->privates['debug.argument_resolver.not_tagged_controller'] ?? $this->load('getDebug_ArgumentResolver_NotTaggedControllerService.php'));
        }, 8)), $a));
    }

    /**
     * Gets the public 'liip_imagine.cache.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\CacheManager
     */
    protected function getLiipImagine_Cache_ManagerService()
    {
        $this->services['liip_imagine.cache.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\CacheManager(($this->privates['liip_imagine.filter.configuration'] ?? $this->getLiipImagine_Filter_ConfigurationService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['liip_imagine.cache.signer'] ?? ($this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer($this->getEnv('APP_SECRET')))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), 'default');

        $instance->addResolver('default', ($this->services['liip_imagine.cache.resolver.default'] ?? $this->getLiipImagine_Cache_Resolver_DefaultService()));
        $instance->addResolver('no_cache', ($this->services['liip_imagine.cache.resolver.no_cache_web_path'] ?? $this->getLiipImagine_Cache_Resolver_NoCacheWebPathService()));

        return $instance;
    }

    /**
     * Gets the public 'liip_imagine.cache.resolver.default' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver
     */
    protected function getLiipImagine_Cache_Resolver_DefaultService()
    {
        return $this->services['liip_imagine.cache.resolver.default'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), (\dirname(__DIR__, 4).'/public'), 'media/cache');
    }

    /**
     * Gets the public 'liip_imagine.cache.resolver.no_cache_web_path' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver
     */
    protected function getLiipImagine_Cache_Resolver_NoCacheWebPathService()
    {
        return $this->services['liip_imagine.cache.resolver.no_cache_web_path'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver(($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()));
    }

    /**
     * Gets the public 'liip_imagine.cache.signer' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Signer
     */
    protected function getLiipImagine_Cache_SignerService()
    {
        return $this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer($this->getEnv('APP_SECRET'));
    }

    /**
     * Gets the public 'oneup_flysystem.file_filesystem_filesystem' shared service.
     *
     * @return \League\Flysystem\Filesystem
     */
    protected function getOneupFlysystem_FileFilesystemFilesystemService()
    {
        return $this->services['oneup_flysystem.file_filesystem_filesystem'] = new \League\Flysystem\Filesystem(new \League\Flysystem\AwsS3v3\AwsS3Adapter(($this->privates['app.s3_client'] ?? $this->getApp_S3ClientService()), $this->getEnv('AWS_S3_BUCKET_FILE_NAME'), NULL, []), ['visibility' => 'public', 'disable_asserts' => false]);
    }

    /**
     * Gets the public 'oneup_flysystem.image_filesystem_filesystem' shared service.
     *
     * @return \League\Flysystem\Filesystem
     */
    protected function getOneupFlysystem_ImageFilesystemFilesystemService()
    {
        return $this->services['oneup_flysystem.image_filesystem_filesystem'] = new \League\Flysystem\Filesystem(new \League\Flysystem\AwsS3v3\AwsS3Adapter(($this->privates['app.s3_client'] ?? $this->getApp_S3ClientService()), $this->getEnv('AWS_S3_BUCKET_IMAGE_NAME'), NULL, []), ['visibility' => 'public', 'disable_asserts' => false]);
    }

    /**
     * Gets the public 'oneup_flysystem.mount_manager' shared service.
     *
     * @return \League\Flysystem\MountManager
     */
    protected function getOneupFlysystem_MountManagerService()
    {
        $this->services['oneup_flysystem.mount_manager'] = $instance = new \League\Flysystem\MountManager();

        $instance->mountFilesystem('file_filesystem', ($this->services['oneup_flysystem.file_filesystem_filesystem'] ?? $this->getOneupFlysystem_FileFilesystemFilesystemService()));
        $instance->mountFilesystem('image_filesystem', ($this->services['oneup_flysystem.image_filesystem_filesystem'] ?? $this->getOneupFlysystem_ImageFilesystemFilesystemService()));

        return $instance;
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('profiler');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDir.''.'/profiler')), $a, true);

        $b = ($this->services['kernel'] ?? $this->get('kernel'));
        $c = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $d = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $d->addInstance('cache.app', ($this->services['cache.app'] ?? $this->getCache_AppService()));
        $d->addInstance('cache.system', ($this->services['cache.system'] ?? $this->getCache_SystemService()));
        $d->addInstance('cache.validator', ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()));
        $d->addInstance('cache.serializer', ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()));
        $d->addInstance('cache.annotations', ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
        $d->addInstance('cache.property_info', ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()));
        $d->addInstance('cache.security_expression_language', ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()));
        $d->addInstance('cache.doctrine.orm.default.metadata', ($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService()));
        $d->addInstance('cache.doctrine.orm.default.result', ($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()));
        $d->addInstance('cache.doctrine.orm.default.query', ($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()));
        $d->addInstance('api_platform.cache.route_name_resolver', ($this->privates['api_platform.cache.route_name_resolver'] ?? $this->getApiPlatform_Cache_RouteNameResolverService()));
        $d->addInstance('api_platform.cache.identifiers_extractor', ($this->privates['api_platform.cache.identifiers_extractor'] ?? $this->getApiPlatform_Cache_IdentifiersExtractorService()));
        $d->addInstance('api_platform.cache.subresource_operation_factory', ($this->privates['api_platform.cache.subresource_operation_factory'] ?? $this->getApiPlatform_Cache_SubresourceOperationFactoryService()));
        $d->addInstance('api_platform.cache.metadata.resource', ($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService()));
        $d->addInstance('api_platform.cache.metadata.property', ($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService()));
        $e = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService()));
        $e->addLogger('default', ($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));
        $f = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $f->setKernel($b);
        }

        $instance->add(($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector())));
        $instance->add(new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataCollector\RequestDataCollector(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.filter_locator'] ?? $this->getApiPlatform_FilterLocatorService()), ($this->privates['debug.api_platform.collection_data_provider'] ?? $this->getDebug_ApiPlatform_CollectionDataProviderService()), ($this->privates['debug.api_platform.item_data_provider'] ?? $this->getDebug_ApiPlatform_ItemDataProviderService()), ($this->privates['debug.api_platform.subresource_data_provider'] ?? $this->getDebug_ApiPlatform_SubresourceDataProviderService()), ($this->privates['debug.api_platform.data_persister'] ?? $this->getDebug_ApiPlatform_DataPersisterService())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(($this->services['validator'] ?? $this->getValidatorService())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDir.''.'/App_KernelDevDebugContainer'), $c));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), $c));
        $instance->add(($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())));
        $instance->add($d);
        $instance->add(new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService())));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), ($this->services['twig'] ?? $this->getTwigService())));
        $instance->add($e);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(new \Vich\UploaderBundle\DataCollector\MappingCollector(($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService())));
        $instance->add($f);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService.php', true],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), $a, 'en');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService.php', true],
        ], [
            'session' => '?',
        ]));
    }

    /**
     * Gets the public 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getSerializerService()
    {
        $a = ($this->privates['api_platform.jsonld.context_builder'] ?? $this->getApiPlatform_Jsonld_ContextBuilderService());
        $b = ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService());
        $c = ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService());
        $d = ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService());
        $e = ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService());
        $f = ($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService());
        $g = ($this->privates['api_platform.subresource_operation_factory.cached'] ?? $this->getApiPlatform_SubresourceOperationFactory_CachedService());
        $h = ($this->privates['api_platform.filter_locator'] ?? $this->getApiPlatform_FilterLocatorService());

        $i = new \ApiPlatform\Core\Swagger\Serializer\ApiGatewayNormalizer(new \ApiPlatform\Core\Swagger\Serializer\DocumentationNormalizer($c, $d, $e, ($this->privates['api_platform.hydra.json_schema.schema_factory'] ?? $this->getApiPlatform_Hydra_JsonSchema_SchemaFactoryService()), ($this->privates['api_platform.json_schema.type_factory'] ?? $this->getApiPlatform_JsonSchema_TypeFactoryService()), new \ApiPlatform\Core\Bridge\Symfony\Routing\RouterOperationPathResolver($f, ($this->privates['api_platform.operation_path_resolver.custom'] ?? $this->getApiPlatform_OperationPathResolver_CustomService()), $g), NULL, $h, NULL, false, 'oauth2', 'application', '/oauth/v2/token', '/oauth/v2/auth', [], $this->parameters['api_platform.swagger.api_keys'], $g, true, 'page', true, 'itemsPerPage', $this->parameters['api_platform.formats'], true, 'pagination', $this->parameters['api_platform.swagger.versions']));
        $j = ($this->privates['serializer.name_converter.metadata_aware'] ?? $this->getSerializer_NameConverter_MetadataAwareService());
        $k = ($this->privates['api_platform.iri_converter'] ?? $this->getApiPlatform_IriConverterService());
        $l = ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService());
        $m = ($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService());
        $n = new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($m, $j, $l, ($this->privates['property_info'] ?? $this->getPropertyInfoService()), new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($m), NULL, []);

        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => new \App\Service\Normalizer\ElasticaCollectionNormalizer($a, $b), 1 => new \App\Service\Normalizer\ElasticaItemNormalizer($a, $b), 2 => $i, 3 => new \ApiPlatform\Core\Hydra\Serializer\ConstraintViolationListNormalizer($f, [], $j), 4 => new \ApiPlatform\Core\Problem\Serializer\ConstraintViolationListNormalizer([], $j), 5 => $i, 6 => new \ApiPlatform\Core\Hydra\Serializer\DocumentationNormalizer($c, $d, $e, $b, NULL, $f, $g, $j), 7 => new \ApiPlatform\Core\Hydra\Serializer\EntrypointNormalizer($c, $k, $f), 8 => new \ApiPlatform\Core\Hydra\Serializer\ErrorNormalizer($f, true), 9 => new \ApiPlatform\Core\Problem\Serializer\ErrorNormalizer(true), 10 => new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(true), 11 => new \ApiPlatform\Core\JsonLd\Serializer\ItemNormalizer($c, $d, $e, $k, $b, $a, $l, $j, $m, [], new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), false), 12 => new \ApiPlatform\Core\Serializer\ItemNormalizer($d, $e, $k, $b, $l, $j, $m, ($this->privates['debug.api_platform.item_data_provider'] ?? $this->getDebug_ApiPlatform_ItemDataProviderService()), false, NULL, new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), $c, false), 13 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 14 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 15 => new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], $j), 16 => new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer(), 17 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 18 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(($this->privates['mime_types'] ?? $this->getMimeTypesService())), 19 => new \ApiPlatform\Core\Hydra\Serializer\CollectionFiltersNormalizer(new \ApiPlatform\Core\Hydra\Serializer\PartialCollectionViewNormalizer(new \ApiPlatform\Core\Hydra\Serializer\CollectionNormalizer($a, $b, $k), 'page', 'pagination', $c, $l), $c, $b, $h), 20 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 21 => new \ApiPlatform\Core\JsonLd\Serializer\ObjectNormalizer($n, $k, $a), 22 => $n], [0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder(), 4 => new \ApiPlatform\Core\Serializer\JsonEncoder('jsonld'), 5 => new \ApiPlatform\Core\Serializer\JsonEncoder('jsonproblem')]);
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(($this->privates['translator.default'] ?? $this->getTranslator_DefaultService()));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Twig\Loader\FilesystemLoader([], \dirname(__DIR__, 4));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views'), 'ApiPlatform');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views'), '!ApiPlatform');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/templates'), 'VichUploader');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/templates'), '!VichUploader');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Resources/views'), 'WebProfiler');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Resources/views'), '!WebProfiler');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Resources/views'), 'LiipImagine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Resources/views'), '!LiipImagine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 'email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), '!email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8', 'debug' => true, 'strict_variables' => true]);

        $b = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
        $c = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $d = ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService());
        $e = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $e->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => $d]);
        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('dev');
        $f->setDebug(true);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($c);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), $b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext($c, '', false)), [])));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($d, \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($b, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($c, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Vich\UploaderBundle\Twig\Extension\UploaderExtension(new \Vich\UploaderBundle\Templating\Helper\UploaderHelper(($this->privates['vich_uploader.storage.flysystem'] ?? $this->getVichUploader_Storage_FlysystemService()))));
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerRuntimeExtension());
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($e));
        $instance->addExtension(new \Liip\ImagineBundle\Templating\FilterExtension(($this->services['liip_imagine.cache.manager'] ?? $this->getLiipImagine_Cache_ManagerService())));
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => ['services', 'jms_serializer.twig_extension.serializer_runtime_helper', 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php', true],
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService.php', true],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService.php', true],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService.php', true],
        ], [
            'JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator());
    }

    /**
     * Gets the public 'vich_uploader.upload_handler' shared service.
     *
     * @return \Vich\UploaderBundle\Handler\UploadHandler
     */
    protected function getVichUploader_UploadHandlerService()
    {
        $a = ($this->privates['vich_uploader.storage.flysystem'] ?? $this->getVichUploader_Storage_FlysystemService());

        return $this->services['vich_uploader.upload_handler'] = new \Vich\UploaderBundle\Handler\UploadHandler(($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()), $a, new \Vich\UploaderBundle\Injector\FileInjector($a), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->load('getAnnotations_CacheService.php'), true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'api_platform.cache.identifiers_extractor' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_IdentifiersExtractorService()
    {
        return $this->privates['api_platform.cache.identifiers_extractor'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('BcMqaKB2zX', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'api_platform.cache.metadata.property' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_Metadata_PropertyService()
    {
        return $this->privates['api_platform.cache.metadata.property'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('pZiWSMqne9', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'api_platform.cache.metadata.resource' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_Metadata_ResourceService()
    {
        return $this->privates['api_platform.cache.metadata.resource'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('C+HL4gPVP6', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'api_platform.cache.route_name_resolver' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_RouteNameResolverService()
    {
        return $this->privates['api_platform.cache.route_name_resolver'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('T3Bu2TWjkU', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'api_platform.cache.subresource_operation_factory' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_SubresourceOperationFactoryService()
    {
        return $this->privates['api_platform.cache.subresource_operation_factory'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('tMmApvf1iN', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'api_platform.filter_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getApiPlatform_FilterLocatorService()
    {
        return $this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'annotated_app_entity_address_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_address_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityAddressApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_address_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_address_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityAddressApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_address_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_address_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityAddressApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_brand_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_brand_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityBrandApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_brand_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_brand_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityBrandApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_brand_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_brand_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityBrandApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_category_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_category_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityCategoryApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_category_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_category_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityCategoryApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_category_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_category_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityCategoryApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_category_translation_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_category_translation_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityCategoryTranslationApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_category_translation_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_category_translation_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityCategoryTranslationApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_category_translation_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_category_translation_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityCategoryTranslationApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_channel_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_channel_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityChannelApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_channel_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_channel_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityChannelApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_channel_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_channel_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityChannelApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_client_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_client_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityClientApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_client_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_client_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityClientApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_client_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_client_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityClientApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_company_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_company_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityCompanyApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_company_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_company_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityCompanyApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_company_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_company_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityCompanyApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_company_product_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_company_product_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityCompanyProductApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_company_product_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_company_product_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityCompanyProductApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_company_product_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_company_product_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityCompanyProductApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_contact_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_contact_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityContactApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_contact_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_contact_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityContactApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_contact_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_contact_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityContactApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_contact_type_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_contact_type_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityContactTypeApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_contact_type_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_contact_type_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityContactTypeApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_contact_type_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_contact_type_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityContactTypeApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_country_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_country_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityCountryApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_country_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_country_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityCountryApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_country_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_country_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityCountryApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_currency_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_currency_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityCurrencyApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_currency_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_currency_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityCurrencyApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_currency_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_currency_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityCurrencyApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_deal_type_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_deal_type_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityDealTypeApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_deal_type_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_deal_type_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityDealTypeApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_deal_type_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_deal_type_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityDealTypeApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_division_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_division_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityDivisionApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_division_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_division_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityDivisionApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_division_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_division_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityDivisionApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_document_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_document_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityDocumentApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_document_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_document_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityDocumentApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_document_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_document_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityDocumentApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_group_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_group_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityGroupApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_group_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_group_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityGroupApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_group_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_group_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityGroupApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_history_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_history_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityHistoryApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_history_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_history_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityHistoryApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_history_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_history_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityHistoryApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_invoice_header_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_invoice_header_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityInvoiceHeaderApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_invoice_header_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_invoice_header_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityInvoiceHeaderApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_invoice_header_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_invoice_header_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityInvoiceHeaderApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_invoice_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_invoice_status_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityInvoiceStatusApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_invoice_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_invoice_status_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityInvoiceStatusApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_invoice_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_invoice_status_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityInvoiceStatusApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_invoice_type_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_invoice_type_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityInvoiceTypeApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_invoice_type_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_invoice_type_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityInvoiceTypeApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_invoice_type_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_invoice_type_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityInvoiceTypeApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_label_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_label_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityLabelApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_label_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_label_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityLabelApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_label_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_label_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityLabelApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_language_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_language_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityLanguageApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_language_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_language_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityLanguageApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_language_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_language_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityLanguageApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_module_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_module_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityModuleApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_opportunity_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_opportunity_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityOpportunityApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_opportunity_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_opportunity_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityOpportunityApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_opportunity_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_opportunity_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityOpportunityApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_opportunity_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_opportunity_status_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityOpportunityStatusApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_opportunity_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_opportunity_status_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityOpportunityStatusApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_opportunity_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_opportunity_status_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityOpportunityStatusApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_order_header_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_order_header_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityOrderHeaderApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_order_header_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_order_header_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityOrderHeaderApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_order_header_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_order_header_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityOrderHeaderApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_order_line_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_order_line_status_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityOrderLineStatusApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_order_line_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_order_line_status_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityOrderLineStatusApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_order_line_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_order_line_status_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityOrderLineStatusApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_order_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_order_status_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityOrderStatusApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_order_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_order_status_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityOrderStatusApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_order_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_order_status_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityOrderStatusApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_payment_type_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_payment_type_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityPaymentTypeApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_payment_type_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_payment_type_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityPaymentTypeApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_payment_type_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_payment_type_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityPaymentTypeApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_product_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_product_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityProductApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_product_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_product_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityProductApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_product_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_product_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityProductApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_product_sell_price_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_product_sell_price_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityProductSellPriceApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_product_sell_price_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_product_sell_price_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityProductSellPriceApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_product_sell_price_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_product_sell_price_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityProductSellPriceApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_product_translation_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_product_translation_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityProductTranslationApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_product_translation_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_product_translation_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityProductTranslationApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_product_translation_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_product_translation_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityProductTranslationApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_project_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_project_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityProjectApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_project_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_project_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityProjectApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_project_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_project_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityProjectApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_project_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_project_status_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityProjectStatusApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_project_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_project_status_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityProjectStatusApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_project_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_project_status_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityProjectStatusApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_project_type_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_project_type_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityProjectTypeApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_project_type_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_project_type_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityProjectTypeApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_project_type_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_project_type_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityProjectTypeApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_purchase_order_header_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_purchase_order_header_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityPurchaseOrderHeaderApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_purchase_order_header_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_purchase_order_header_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityPurchaseOrderHeaderApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_purchase_order_header_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_purchase_order_header_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityPurchaseOrderHeaderApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_purchase_order_line_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_purchase_order_line_status_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityPurchaseOrderLineStatusApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_purchase_order_line_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_purchase_order_line_status_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityPurchaseOrderLineStatusApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_purchase_order_line_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_purchase_order_line_status_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityPurchaseOrderLineStatusApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_purchase_order_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_purchase_order_status_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityPurchaseOrderStatusApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_purchase_order_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_purchase_order_status_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityPurchaseOrderStatusApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_purchase_order_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_purchase_order_status_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityPurchaseOrderStatusApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_role_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_role_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityRoleApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_shipment_method_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_shipment_method_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityShipmentMethodApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_shipment_method_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_shipment_method_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityShipmentMethodApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_shipment_method_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_shipment_method_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityShipmentMethodApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_shipping_notice_header_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_shipping_notice_header_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityShippingNoticeHeaderApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_shipping_notice_header_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_shipping_notice_header_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityShippingNoticeHeaderApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_shipping_notice_header_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_shipping_notice_header_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityShippingNoticeHeaderApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_shipping_notice_line_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_shipping_notice_line_status_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityShippingNoticeLineStatusApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_shipping_notice_line_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_shipping_notice_line_status_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityShippingNoticeLineStatusApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_shipping_notice_line_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_shipping_notice_line_status_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityShippingNoticeLineStatusApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_shipping_notice_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_shipping_notice_status_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityShippingNoticeStatusApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_shipping_notice_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_shipping_notice_status_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityShippingNoticeStatusApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_shipping_notice_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_shipping_notice_status_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityShippingNoticeStatusApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_stock_line_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_stock_line_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityStockLineApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_stock_line_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_stock_line_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityStockLineApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_stock_line_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_stock_line_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityStockLineApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_stock_line_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_stock_line_status_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityStockLineStatusApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_stock_line_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_stock_line_status_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityStockLineStatusApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_stock_line_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_stock_line_status_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityStockLineStatusApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_task_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_task_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityTaskApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_task_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_task_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityTaskApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_task_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_task_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityTaskApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_task_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_task_status_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityTaskStatusApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_task_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_task_status_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityTaskStatusApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_task_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_task_status_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityTaskStatusApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_template_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_template_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityTemplateApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_template_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_template_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityTemplateApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_template_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_template_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityTemplateApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_template_type_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_template_type_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityTemplateTypeApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_template_type_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_template_type_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityTemplateTypeApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_template_type_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_template_type_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityTemplateTypeApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_text_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_text_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityTextApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_text_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_text_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityTextApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_text_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_text_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityTextApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_text_translation_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_text_translation_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityTextTranslationApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_text_translation_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_text_translation_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityTextTranslationApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_text_translation_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_text_translation_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityTextTranslationApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_user_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_user_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityUserApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_user_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_user_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityUserApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_user_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_user_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityUserApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_vat_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_vat_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityVatApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_vat_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_vat_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityVatApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_vat_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_vat_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityVatApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
            'annotated_app_entity_warehouse_api_platform_core_bridge_doctrine_orm_filter_date_filter' => ['privates', 'annotated_app_entity_warehouse_api_platform_core_bridge_doctrine_orm_filter_date_filter', 'getAnnotatedAppEntityWarehouseApiPlatformCoreBridgeDoctrineOrmFilterDateFilterService.php', true],
            'annotated_app_entity_warehouse_api_platform_core_bridge_doctrine_orm_filter_order_filter' => ['privates', 'annotated_app_entity_warehouse_api_platform_core_bridge_doctrine_orm_filter_order_filter', 'getAnnotatedAppEntityWarehouseApiPlatformCoreBridgeDoctrineOrmFilterOrderFilterService.php', true],
            'annotated_app_entity_warehouse_api_platform_core_bridge_doctrine_orm_filter_search_filter' => ['privates', 'annotated_app_entity_warehouse_api_platform_core_bridge_doctrine_orm_filter_search_filter', 'getAnnotatedAppEntityWarehouseApiPlatformCoreBridgeDoctrineOrmFilterSearchFilterService.php', true],
        ], [
            'annotated_app_entity_address_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_address_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_address_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_brand_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_brand_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_brand_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_category_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_category_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_category_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_category_translation_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_category_translation_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_category_translation_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_channel_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_channel_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_channel_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_client_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_client_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_client_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_company_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_company_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_company_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_company_product_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_company_product_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_company_product_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_contact_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_contact_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_contact_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_contact_type_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_contact_type_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_contact_type_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_country_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_country_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_country_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_currency_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_currency_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_currency_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_deal_type_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_deal_type_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_deal_type_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_division_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_division_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_division_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_document_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_document_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_document_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_group_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_group_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_group_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_history_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_history_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_history_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_invoice_header_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_invoice_header_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_invoice_header_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_invoice_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_invoice_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_invoice_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_invoice_type_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_invoice_type_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_invoice_type_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_label_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_label_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_label_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_language_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_language_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_language_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_module_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_opportunity_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_opportunity_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_opportunity_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_opportunity_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_opportunity_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_opportunity_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_order_header_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_order_header_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_order_header_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_order_line_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_order_line_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_order_line_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_order_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_order_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_order_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_payment_type_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_payment_type_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_payment_type_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_product_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_product_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_product_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_product_sell_price_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_product_sell_price_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_product_sell_price_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_product_translation_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_product_translation_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_product_translation_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_project_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_project_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_project_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_project_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_project_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_project_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_project_type_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_project_type_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_project_type_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_purchase_order_header_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_purchase_order_header_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_purchase_order_header_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_purchase_order_line_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_purchase_order_line_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_purchase_order_line_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_purchase_order_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_purchase_order_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_purchase_order_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_role_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_shipment_method_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_shipment_method_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_shipment_method_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_shipping_notice_header_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_shipping_notice_header_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_shipping_notice_header_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_shipping_notice_line_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_shipping_notice_line_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_shipping_notice_line_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_shipping_notice_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_shipping_notice_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_shipping_notice_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_stock_line_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_stock_line_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_stock_line_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_stock_line_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_stock_line_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_stock_line_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_task_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_task_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_task_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_task_status_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_task_status_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_task_status_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_template_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_template_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_template_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_template_type_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_template_type_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_template_type_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_text_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_text_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_text_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_text_translation_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_text_translation_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_text_translation_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_user_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_user_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_user_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_vat_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_vat_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_vat_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
            'annotated_app_entity_warehouse_api_platform_core_bridge_doctrine_orm_filter_date_filter' => '?',
            'annotated_app_entity_warehouse_api_platform_core_bridge_doctrine_orm_filter_order_filter' => '?',
            'annotated_app_entity_warehouse_api_platform_core_bridge_doctrine_orm_filter_search_filter' => '?',
        ]);
    }

    /**
     * Gets the private 'api_platform.http_cache.listener.response.configure' shared service.
     *
     * @return \ApiPlatform\Core\HttpCache\EventListener\AddHeadersListener
     */
    protected function getApiPlatform_HttpCache_Listener_Response_ConfigureService()
    {
        return $this->privates['api_platform.http_cache.listener.response.configure'] = new \ApiPlatform\Core\HttpCache\EventListener\AddHeadersListener(true, NULL, NULL, $this->parameters['api_platform.http_cache.vary'], NULL, ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.hydra.json_schema.schema_factory' shared service.
     *
     * @return \ApiPlatform\Core\Hydra\JsonSchema\SchemaFactory
     */
    protected function getApiPlatform_Hydra_JsonSchema_SchemaFactoryService()
    {
        $a = ($this->privates['api_platform.json_schema.type_factory'] ?? $this->getApiPlatform_JsonSchema_TypeFactoryService());

        if (isset($this->privates['api_platform.hydra.json_schema.schema_factory'])) {
            return $this->privates['api_platform.hydra.json_schema.schema_factory'];
        }

        return $this->privates['api_platform.hydra.json_schema.schema_factory'] = new \ApiPlatform\Core\Hydra\JsonSchema\SchemaFactory(new \ApiPlatform\Core\JsonSchema\SchemaFactory($a, ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['serializer.name_converter.metadata_aware'] ?? $this->getSerializer_NameConverter_MetadataAwareService()), ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService())));
    }

    /**
     * Gets the private 'api_platform.hydra.listener.response.add_link_header' shared service.
     *
     * @return \ApiPlatform\Core\Hydra\EventListener\AddLinkHeaderListener
     */
    protected function getApiPlatform_Hydra_Listener_Response_AddLinkHeaderService()
    {
        return $this->privates['api_platform.hydra.listener.response.add_link_header'] = new \ApiPlatform\Core\Hydra\EventListener\AddLinkHeaderListener(($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService()));
    }

    /**
     * Gets the private 'api_platform.identifier.converter' shared service.
     *
     * @return \ApiPlatform\Core\Identifier\IdentifierConverter
     */
    protected function getApiPlatform_Identifier_ConverterService()
    {
        return $this->privates['api_platform.identifier.converter'] = new \ApiPlatform\Core\Identifier\IdentifierConverter(($this->privates['api_platform.identifiers_extractor.cached'] ?? $this->getApiPlatform_IdentifiersExtractor_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.identifier.integer'] ?? ($this->privates['api_platform.identifier.integer'] = new \ApiPlatform\Core\Identifier\Normalizer\IntegerDenormalizer()));
            yield 1 => ($this->privates['api_platform.identifier.date_normalizer'] ?? ($this->privates['api_platform.identifier.date_normalizer'] = new \ApiPlatform\Core\Identifier\Normalizer\DateTimeIdentifierDenormalizer()));
        }, 2));
    }

    /**
     * Gets the private 'api_platform.identifiers_extractor.cached' shared service.
     *
     * @return \ApiPlatform\Core\Api\CachedIdentifiersExtractor
     */
    protected function getApiPlatform_IdentifiersExtractor_CachedService()
    {
        $a = ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService());
        $b = ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService());

        return $this->privates['api_platform.identifiers_extractor.cached'] = new \ApiPlatform\Core\Api\CachedIdentifiersExtractor(($this->privates['api_platform.cache.identifiers_extractor'] ?? $this->getApiPlatform_Cache_IdentifiersExtractorService()), new \ApiPlatform\Core\Api\IdentifiersExtractor(($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), $a, $b), $a, $b);
    }

    /**
     * Gets the private 'api_platform.iri_converter' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter
     */
    protected function getApiPlatform_IriConverterService()
    {
        $a = ($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService());

        return $this->privates['api_platform.iri_converter'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter(($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['debug.api_platform.item_data_provider'] ?? $this->getDebug_ApiPlatform_ItemDataProviderService()), new \ApiPlatform\Core\Bridge\Symfony\Routing\CachedRouteNameResolver(($this->privates['api_platform.cache.route_name_resolver'] ?? $this->getApiPlatform_Cache_RouteNameResolverService()), new \ApiPlatform\Core\Bridge\Symfony\Routing\RouteNameResolver($a)), $a, ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()), ($this->privates['api_platform.identifiers_extractor.cached'] ?? $this->getApiPlatform_IdentifiersExtractor_CachedService()), ($this->privates['debug.api_platform.subresource_data_provider'] ?? $this->getDebug_ApiPlatform_SubresourceDataProviderService()), ($this->privates['api_platform.identifier.converter'] ?? $this->getApiPlatform_Identifier_ConverterService()), ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService()));
    }

    /**
     * Gets the private 'api_platform.json_schema.type_factory' shared service.
     *
     * @return \ApiPlatform\Core\JsonSchema\TypeFactory
     */
    protected function getApiPlatform_JsonSchema_TypeFactoryService()
    {
        $this->privates['api_platform.json_schema.type_factory'] = $instance = new \ApiPlatform\Core\JsonSchema\TypeFactory(($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService()));

        $instance->setSchemaFactory(($this->privates['api_platform.hydra.json_schema.schema_factory'] ?? $this->getApiPlatform_Hydra_JsonSchema_SchemaFactoryService()));

        return $instance;
    }

    /**
     * Gets the private 'api_platform.jsonld.context_builder' shared service.
     *
     * @return \ApiPlatform\Core\JsonLd\ContextBuilder
     */
    protected function getApiPlatform_Jsonld_ContextBuilderService()
    {
        return $this->privates['api_platform.jsonld.context_builder'] = new \ApiPlatform\Core\JsonLd\ContextBuilder(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService()));
    }

    /**
     * Gets the private 'api_platform.listener.request.add_format' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\AddFormatListener
     */
    protected function getApiPlatform_Listener_Request_AddFormatService()
    {
        return $this->privates['api_platform.listener.request.add_format'] = new \ApiPlatform\Core\EventListener\AddFormatListener(new \Negotiation\Negotiator(), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), $this->parameters['api_platform.formats']);
    }

    /**
     * Gets the private 'api_platform.listener.request.deserialize' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\DeserializeListener
     */
    protected function getApiPlatform_Listener_Request_DeserializeService()
    {
        return $this->privates['api_platform.listener.request.deserialize'] = new \ApiPlatform\Core\EventListener\DeserializeListener(($this->services['serializer'] ?? $this->getSerializerService()), ($this->privates['api_platform.serializer.context_builder.filter'] ?? $this->getApiPlatform_Serializer_ContextBuilder_FilterService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.listener.request.read' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\ReadListener
     */
    protected function getApiPlatform_Listener_Request_ReadService()
    {
        return $this->privates['api_platform.listener.request.read'] = new \ApiPlatform\Core\EventListener\ReadListener(($this->privates['debug.api_platform.collection_data_provider'] ?? $this->getDebug_ApiPlatform_CollectionDataProviderService()), ($this->privates['debug.api_platform.item_data_provider'] ?? $this->getDebug_ApiPlatform_ItemDataProviderService()), ($this->privates['debug.api_platform.subresource_data_provider'] ?? $this->getDebug_ApiPlatform_SubresourceDataProviderService()), ($this->privates['api_platform.serializer.context_builder.filter'] ?? $this->getApiPlatform_Serializer_ContextBuilder_FilterService()), ($this->privates['api_platform.identifier.converter'] ?? $this->getApiPlatform_Identifier_ConverterService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.listener.view.validate_query_parameters' shared service.
     *
     * @return \ApiPlatform\Core\Filter\QueryParameterValidateListener
     */
    protected function getApiPlatform_Listener_View_ValidateQueryParametersService()
    {
        return $this->privates['api_platform.listener.view.validate_query_parameters'] = new \ApiPlatform\Core\Filter\QueryParameterValidateListener(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.filter_locator'] ?? $this->getApiPlatform_FilterLocatorService()));
    }

    /**
     * Gets the private 'api_platform.metadata.property.metadata_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyMetadataFactory
     */
    protected function getApiPlatform_Metadata_Property_MetadataFactory_CachedService()
    {
        $a = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        return $this->privates['api_platform.metadata.property.metadata_factory.cached'] = new \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyMetadataFactory(($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService()), new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\ValidatorPropertyMetadataFactory(($this->services['validator'] ?? $this->getValidatorService()), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyMetadataFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor([], $this))), new \ApiPlatform\Core\Metadata\Property\Factory\AnnotationPropertyMetadataFactory($a, new \ApiPlatform\Core\Metadata\Property\Factory\AnnotationSubresourceMetadataFactory($a, new \ApiPlatform\Core\Metadata\Property\Factory\SerializerPropertyMetadataFactory(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService()), new \ApiPlatform\Core\Bridge\Doctrine\Orm\Metadata\Property\DoctrineOrmPropertyMetadataFactory(($this->services['doctrine'] ?? $this->getDoctrineService()), new \ApiPlatform\Core\Metadata\Property\Factory\InheritedPropertyMetadataFactory(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), new \ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyMetadataFactory(($this->privates['property_info'] ?? $this->getPropertyInfoService()), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyMetadataFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor([], $this))))))), ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService())))))));
    }

    /**
     * Gets the private 'api_platform.metadata.property.name_collection_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyNameCollectionFactory
     */
    protected function getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()
    {
        return $this->privates['api_platform.metadata.property.name_collection_factory.cached'] = new \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyNameCollectionFactory(($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService()), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor([], $this))), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor([], $this))), new \ApiPlatform\Core\Metadata\Property\Factory\InheritedPropertyNameCollectionFactory(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), new \ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyNameCollectionFactory(($this->privates['property_info'] ?? $this->getPropertyInfoService()))))));
    }

    /**
     * Gets the private 'api_platform.metadata.resource.metadata_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceMetadataFactory
     */
    protected function getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()
    {
        $a = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        return $this->privates['api_platform.metadata.resource.metadata_factory.cached'] = new \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceMetadataFactory(($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService()), new \ApiPlatform\Core\Metadata\Resource\Factory\FormatsResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\OperationResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceFilterMetadataFactory($a, new \ApiPlatform\Core\Metadata\Resource\Factory\ShortNameResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\PhpDocResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\InputOutputResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceMetadataFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor([], $this))), new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceMetadataFactory($a, new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceMetadataFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor([], $this)))))))))), []), $this->parameters['api_platform.formats'], []));
    }

    /**
     * Gets the private 'api_platform.metadata.resource.name_collection_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceNameCollectionFactory
     */
    protected function getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()
    {
        return $this->privates['api_platform.metadata.resource.name_collection_factory.cached'] = new \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceNameCollectionFactory(($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService()), new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor([], $this))), new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceNameCollectionFactory(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), $this->parameters['api_platform.resource_class_directories'], new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor([], $this)))))));
    }

    /**
     * Gets the private 'api_platform.operation_path_resolver.custom' shared service.
     *
     * @return \ApiPlatform\Core\PathResolver\CustomOperationPathResolver
     */
    protected function getApiPlatform_OperationPathResolver_CustomService()
    {
        return $this->privates['api_platform.operation_path_resolver.custom'] = new \ApiPlatform\Core\PathResolver\CustomOperationPathResolver(new \ApiPlatform\Core\PathResolver\OperationPathResolver(($this->privates['api_platform.path_segment_name_generator.underscore'] ?? ($this->privates['api_platform.path_segment_name_generator.underscore'] = new \ApiPlatform\Core\Operation\UnderscorePathSegmentNameGenerator()))));
    }

    /**
     * Gets the private 'api_platform.resource_class_resolver' shared service.
     *
     * @return \ApiPlatform\Core\Api\ResourceClassResolver
     */
    protected function getApiPlatform_ResourceClassResolverService()
    {
        return $this->privates['api_platform.resource_class_resolver'] = new \ApiPlatform\Core\Api\ResourceClassResolver(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.router' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\Router
     */
    protected function getApiPlatform_RouterService()
    {
        return $this->privates['api_platform.router'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\Router(($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'api_platform.security.listener.request.deny_access' shared service.
     *
     * @return \ApiPlatform\Core\Security\EventListener\DenyAccessListener
     */
    protected function getApiPlatform_Security_Listener_Request_DenyAccessService()
    {
        return $this->privates['api_platform.security.listener.request.deny_access'] = new \ApiPlatform\Core\Security\EventListener\DenyAccessListener(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), new \ApiPlatform\Core\Security\ResourceAccessChecker(($this->privates['security.expression_language'] ?? $this->getSecurity_ExpressionLanguageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
    }

    /**
     * Gets the private 'api_platform.serializer.context_builder.filter' shared service.
     *
     * @return \ApiPlatform\Core\Serializer\SerializerFilterContextBuilder
     */
    protected function getApiPlatform_Serializer_ContextBuilder_FilterService()
    {
        $a = ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService());

        return $this->privates['api_platform.serializer.context_builder.filter'] = new \ApiPlatform\Core\Serializer\SerializerFilterContextBuilder($a, ($this->privates['api_platform.filter_locator'] ?? $this->getApiPlatform_FilterLocatorService()), new \ApiPlatform\Core\Serializer\SerializerContextBuilder($a));
    }

    /**
     * Gets the private 'api_platform.subresource_operation_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Operation\Factory\CachedSubresourceOperationFactory
     */
    protected function getApiPlatform_SubresourceOperationFactory_CachedService()
    {
        return $this->privates['api_platform.subresource_operation_factory.cached'] = new \ApiPlatform\Core\Operation\Factory\CachedSubresourceOperationFactory(($this->privates['api_platform.cache.subresource_operation_factory'] ?? $this->getApiPlatform_Cache_SubresourceOperationFactoryService()), new \ApiPlatform\Core\Operation\Factory\SubresourceOperationFactory(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['api_platform.path_segment_name_generator.underscore'] ?? ($this->privates['api_platform.path_segment_name_generator.underscore'] = new \ApiPlatform\Core\Operation\UnderscorePathSegmentNameGenerator()))));
    }

    /**
     * Gets the private 'app.s3_client' shared autowired service.
     *
     * @return \Aws\S3\S3Client
     */
    protected function getApp_S3ClientService()
    {
        return $this->privates['app.s3_client'] = new \Aws\S3\S3Client(['version' => 'latest', 'region' => $this->getEnv('AWS_S3_BUCKET_REGION'), 'credentials' => ['key' => $this->getEnv('AWS_S3_ACCESS_ID'), 'secret' => $this->getEnv('AWS_S3_ACCESS_SECRET')]]);
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('DaSegQqWBA', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.property_info' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_PropertyInfoService()
    {
        return $this->privates['cache.property_info'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('B+AlvVTj5f', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.security_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SecurityExpressionLanguageService()
    {
        return $this->privates['cache.security_expression_language'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('lZubBjanlS', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('uct2QaVBtd', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('nBxDQtMTBr', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->privates['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor());
    }

    /**
     * Gets the private 'debug.api_platform.collection_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainCollectionDataProvider
     */
    protected function getDebug_ApiPlatform_CollectionDataProviderService()
    {
        return $this->privates['debug.api_platform.collection_data_provider'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainCollectionDataProvider(new \ApiPlatform\Core\DataProvider\ChainCollectionDataProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Service\\DataProvider\\ProductCollectionDataProvider'] ?? $this->load('getProductCollectionDataProviderService.php'));
            yield 1 => ($this->privates['App\\Service\\DataProvider\\SearchCollectionDataProvider'] ?? $this->load('getSearchCollectionDataProviderService.php'));
            yield 2 => ($this->privates['api_platform.doctrine.orm.default.collection_data_provider'] ?? $this->load('getApiPlatform_Doctrine_Orm_Default_CollectionDataProviderService.php'));
        }, 3)));
    }

    /**
     * Gets the private 'debug.api_platform.data_persister' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\DataPersister\TraceableChainDataPersister
     */
    protected function getDebug_ApiPlatform_DataPersisterService()
    {
        return $this->privates['debug.api_platform.data_persister'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataPersister\TraceableChainDataPersister(new \ApiPlatform\Core\DataPersister\ChainDataPersister(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.data_persister'] ?? $this->load('getApiPlatform_Doctrine_Orm_DataPersisterService.php'));
        }, 1)));
    }

    /**
     * Gets the private 'debug.api_platform.item_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainItemDataProvider
     */
    protected function getDebug_ApiPlatform_ItemDataProviderService()
    {
        return $this->privates['debug.api_platform.item_data_provider'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainItemDataProvider(new \ApiPlatform\Core\DataProvider\ChainItemDataProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.default.item_data_provider'] ?? $this->load('getApiPlatform_Doctrine_Orm_Default_ItemDataProviderService.php'));
        }, 1)));
    }

    /**
     * Gets the private 'debug.api_platform.subresource_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainSubresourceDataProvider
     */
    protected function getDebug_ApiPlatform_SubresourceDataProviderService()
    {
        return $this->privates['debug.api_platform.subresource_data_provider'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainSubresourceDataProvider(new \ApiPlatform\Core\DataProvider\ChainSubresourceDataProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.default.subresource_data_provider'] ?? $this->load('getApiPlatform_Doctrine_Orm_Default_SubresourceDataProviderService.php'));
        }, 1)));
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), true);
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), \dirname(__DIR__, 4), function () {
            return ($this->privates['debug.file_link_formatter.url_format'] ?? $this->load('getDebug_FileLinkFormatter_UrlFormatService.php'));
        });
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.security.voter.security.access.authenticated_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php'));
            yield 1 => ($this->privates['debug.security.voter.security.access.simple_role_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php'));
            yield 2 => ($this->privates['debug.security.voter.security.access.expression_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_ExpressionVoterService.php'));
        }, 3), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getDebug_Security_FirewallService()
    {
        return $this->privates['debug.security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListenerService()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), true);
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'liip_imagine.filter.configuration' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration
     */
    protected function getLiipImagine_Filter_ConfigurationService()
    {
        return $this->privates['liip_imagine.filter.configuration'] = new \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration($this->parameters['liip_imagine.filter_sets']);
    }

    /**
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->privates['slugger'] ?? ($this->privates['slugger'] = new \Symfony\Component\String\Slugger\AsciiSlugger('en')));
            yield 1 => ($this->privates['translator.default'] ?? $this->getTranslator_DefaultService());
        }, 2), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'mime_types' shared service.
     *
     * @return \Symfony\Component\Mime\MimeTypes
     */
    protected function getMimeTypesService()
    {
        $this->privates['mime_types'] = $instance = new \Symfony\Component\Mime\MimeTypes();

        $instance->setDefault($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [], []);
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->privates['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler((\dirname(__DIR__, 3).'/log/dev.log'), 100, true, NULL, false);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'nelmio_cors.cors_listener' shared service.
     *
     * @return \Nelmio\CorsBundle\EventListener\CorsListener
     */
    protected function getNelmioCors_CorsListenerService()
    {
        return $this->privates['nelmio_cors.cors_listener'] = new \Nelmio\CorsBundle\EventListener\CorsListener(new \Nelmio\CorsBundle\Options\Resolver([0 => new \Nelmio\CorsBundle\Options\ConfigProvider($this->parameters['nelmio_cors.map'], $this->getParameter('nelmio_cors.defaults'))]));
    }

    /**
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL, false, false);
    }

    /**
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->privates['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false), true);
    }

    /**
     * Gets the private 'property_info' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\PropertyInfoExtractor
     */
    protected function getPropertyInfoService()
    {
        return $this->privates['property_info'] = new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.serializer_extractor'] ?? $this->load('getPropertyInfo_SerializerExtractorService.php'));
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
            yield 2 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php'));
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php'));
            yield 1 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
            yield 2 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
        }, 1), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php'));
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 2), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 1));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), \dirname(__DIR__, 4), true);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.dao.login'] ?? $this->load('getSecurity_Authentication_Provider_Dao_LoginService.php'));
            yield 1 => ($this->privates['security.authentication.provider.anonymous.login'] ?? ($this->privates['security.authentication.provider.anonymous.login'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 2 => ($this->privates['security.authentication.provider.dao.client_login'] ?? $this->load('getSecurity_Authentication_Provider_Dao_ClientLoginService.php'));
            yield 3 => ($this->privates['security.authentication.provider.anonymous.client_login'] ?? ($this->privates['security.authentication.provider.anonymous.client_login'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 4 => ($this->privates['security.authentication.provider.guard.frontend_profile'] ?? $this->load('getSecurity_Authentication_Provider_Guard_FrontendProfileService.php'));
            yield 5 => ($this->privates['security.authentication.provider.anonymous.frontend'] ?? ($this->privates['security.authentication.provider.anonymous.frontend'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 6 => ($this->privates['security.authentication.provider.dao.docs'] ?? $this->load('getSecurity_Authentication_Provider_Dao_DocsService.php'));
            yield 7 => ($this->privates['security.authentication.provider.guard.api'] ?? $this->load('getSecurity_Authentication_Provider_Guard_ApiService.php'));
            yield 8 => ($this->privates['security.authentication.provider.anonymous.api'] ?? ($this->privates['security.authentication.provider.anonymous.api'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 9), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.expression_language' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\ExpressionLanguage
     */
    protected function getSecurity_ExpressionLanguageService()
    {
        $this->privates['security.expression_language'] = $instance = new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()));

        $instance->registerProvider(($this->privates['api_platform.security.expression_language_provider'] ?? ($this->privates['api_platform.security.expression_language_provider'] = new \ApiPlatform\Core\Security\Core\Authorization\ExpressionLanguageProvider())));

        return $instance;
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.api' => ['privates', 'security.firewall.map.context.api', 'getSecurity_Firewall_Map_Context_ApiService.php', true],
            'security.firewall.map.context.client_login' => ['privates', 'security.firewall.map.context.client_login', 'getSecurity_Firewall_Map_Context_ClientLoginService.php', true],
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService.php', true],
            'security.firewall.map.context.docs' => ['privates', 'security.firewall.map.context.docs', 'getSecurity_Firewall_Map_Context_DocsService.php', true],
            'security.firewall.map.context.frontend' => ['privates', 'security.firewall.map.context.frontend', 'getSecurity_Firewall_Map_Context_FrontendService.php', true],
            'security.firewall.map.context.frontend_profile' => ['privates', 'security.firewall.map.context.frontend_profile', 'getSecurity_Firewall_Map_Context_FrontendProfileService.php', true],
            'security.firewall.map.context.login' => ['privates', 'security.firewall.map.context.login', 'getSecurity_Firewall_Map_Context_LoginService.php', true],
        ], [
            'security.firewall.map.context.api' => '?',
            'security.firewall.map.context.client_login' => '?',
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.docs' => '?',
            'security.firewall.map.context.frontend' => '?',
            'security.firewall.map.context.frontend_profile' => '?',
            'security.firewall.map.context.login' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.login' => ($this->privates['.security.request_matcher.aOksG4F'] ?? ($this->privates['.security.request_matcher.aOksG4F'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/login')));
            yield 'security.firewall.map.context.client_login' => ($this->privates['.security.request_matcher._7j8kB_'] ?? ($this->privates['.security.request_matcher._7j8kB_'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/frontend/login')));
            yield 'security.firewall.map.context.frontend_profile' => ($this->privates['.security.request_matcher.9x_cU.3'] ?? ($this->privates['.security.request_matcher.9x_cU.3'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/frontend/profile')));
            yield 'security.firewall.map.context.frontend' => ($this->privates['.security.request_matcher.jg.jrf_'] ?? ($this->privates['.security.request_matcher.jg.jrf_'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/frontend')));
            yield 'security.firewall.map.context.docs' => ($this->privates['.security.request_matcher.mlam9l.'] ?? ($this->privates['.security.request_matcher.mlam9l.'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/docs')));
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.api' => ($this->privates['.security.request_matcher.3UEFixr'] ?? ($this->privates['.security.request_matcher.3UEFixr'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/')));
        }, 7));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        return $this->privates['security.logout_url_generator'] = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage();
        $a->registerProvider(($this->privates['api_platform.security.expression_language_provider'] ?? ($this->privates['api_platform.security.expression_language_provider'] = new \ApiPlatform\Core\Security\Core\Authorization\ExpressionLanguageProvider())));

        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), $a, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->privates['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'serializer.mapping.class_metadata_factory' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory
     */
    protected function getSerializer_Mapping_ClassMetadataFactoryService()
    {
        return $this->privates['serializer.mapping.class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))]), NULL);
    }

    /**
     * Gets the private 'serializer.name_converter.metadata_aware' shared service.
     *
     * @return \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter
     */
    protected function getSerializer_NameConverter_MetadataAwareService()
    {
        return $this->privates['serializer.name_converter.metadata_aware'] = new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter(($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService()));
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, true],
            'session' => ['services', 'session', 'getSessionService.php', true],
        ], [
            'initialized_session' => '?',
            'session' => '?',
        ]));
    }

    /**
     * Gets the private 'stof_doctrine_extensions.event_listener.blame' shared service.
     *
     * @return \Stof\DoctrineExtensionsBundle\EventListener\BlameListener
     */
    protected function getStofDoctrineExtensions_EventListener_BlameService()
    {
        return $this->privates['stof_doctrine_extensions.event_listener.blame'] = new \Stof\DoctrineExtensionsBundle\EventListener\BlameListener(($this->privates['stof_doctrine_extensions.listener.blameable'] ?? $this->getStofDoctrineExtensions_Listener_BlameableService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'stof_doctrine_extensions.listener.blameable' shared service.
     *
     * @return \Gedmo\Blameable\BlameableListener
     */
    protected function getStofDoctrineExtensions_Listener_BlameableService()
    {
        $this->privates['stof_doctrine_extensions.listener.blameable'] = $instance = new \Gedmo\Blameable\BlameableListener();

        $instance->setAnnotationReader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));

        return $instance;
    }

    /**
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->privates['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService.php', true],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService.php', true],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService.php', true],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService.php', true],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService.php', true],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService.php', true],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService.php', true],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService.php', true],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService.php', true],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService.php', true],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService.php', true],
        ], [
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => true, 'resource_files' => ['af' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.af.xlf')], 'ar' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ar.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.ar.yml')], 'az' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.az.xlf')], 'be' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.be.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.be.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.be.xlf')], 'bg' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.bg.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.bg.yml')], 'ca' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ca.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.ca.yml')], 'cs' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.cs.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.cs.yml')], 'cy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')], 'da' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.da.xlf')], 'de' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.de.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.de.yml')], 'el' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.el.xlf')], 'en' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.en.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.en.yml')], 'es' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.es.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.es.yml')], 'et' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.et.xlf')], 'eu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.eu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.eu.xlf')], 'fa' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fa.xlf')], 'fi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.fi.yml')], 'fr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.fr.yml')], 'gl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.gl.xlf')], 'he' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.he.xlf')], 'hr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hr.xlf')], 'hu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hu.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.hu.yml')], 'hy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hy.xlf')], 'id' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.id.xlf')], 'it' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.it.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.it.yml')], 'ja' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ja.xlf')], 'lb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lb.xlf')], 'lt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lt.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.lt.yml')], 'lv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lv.xlf')], 'mn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.mn.xlf')], 'nb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nb.xlf')], 'nl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.nl.yml')], 'nn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nn.xlf')], 'no' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.no.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.no.xlf')], 'pl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.pl.yml')], 'pt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.pt.yml')], 'pt_BR' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt_BR.xlf')], 'ro' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ro.xlf')], 'ru' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ru.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.ru.yml')], 'sk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sk.xlf')], 'sl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.sl.yml')], 'sq' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sq.xlf')], 'sr_Cyrl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Latn.xlf')], 'sv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sv.xlf')], 'th' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.th.xlf')], 'tl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tl.xlf')], 'tr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.tr.yml')], 'uk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.uk.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.uk.yml')], 'vi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.vi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.vi.xlf')], 'zh_CN' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.zh_CN.xlf')], 'zh_TW' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf')], 'pt_PT' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt_PT.xlf')], 'vn' => [0 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/VichUploaderBundle.vn.yml')]], 'scanned_directories' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/translations'), 5 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/translations'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/translations'), 7 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/translations'), 8 => (\dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/translations'), 9 => (\dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/translations'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/translations'), 11 => (\dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/translations'), 12 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/translations'), 13 => (\dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/translations'), 14 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/translations'), 15 => (\dirname(__DIR__, 4).'/vendor/jms/serializer-bundle/translations'), 16 => (\dirname(__DIR__, 4).'/vendor/symfony/monolog-bundle/translations'), 17 => (\dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/translations'), 18 => (\dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/translations'), 19 => (\dirname(__DIR__, 4).'/vendor/gesdinet/jwt-refresh-token-bundle/translations'), 20 => (\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/translations'), 21 => (\dirname(__DIR__, 4).'/vendor/oneup/flysystem-bundle/translations'), 22 => (\dirname(__DIR__, 4).'/vendor/antishov/doctrine-extensions-bundle/translations'), 23 => (\dirname(__DIR__, 4).'/translations')], 'cache_vary' => ['scanned_directories' => [0 => 'vendor/symfony/validator/Resources/translations', 1 => 'vendor/symfony/form/Resources/translations', 2 => 'vendor/symfony/security-core/Resources/translations', 3 => 'vendor/vich/uploader-bundle/translations', 4 => 'vendor/symfony/framework-bundle/translations', 5 => 'vendor/symfony/twig-bundle/translations', 6 => 'vendor/symfony/security-bundle/translations', 7 => 'vendor/doctrine/doctrine-bundle/translations', 8 => 'vendor/api-platform/core/src/Bridge/Symfony/Bundle/translations', 9 => 'vendor/nelmio/cors-bundle/translations', 10 => 'vendor/symfony/maker-bundle/src/translations', 11 => 'vendor/lexik/jwt-authentication-bundle/translations', 12 => 'vendor/doctrine/doctrine-migrations-bundle/translations', 13 => 'vendor/sensio/framework-extra-bundle/src/translations', 14 => 'vendor/doctrine/doctrine-fixtures-bundle/translations', 15 => 'vendor/jms/serializer-bundle/translations', 16 => 'vendor/symfony/monolog-bundle/translations', 17 => 'vendor/symfony/web-profiler-bundle/translations', 18 => 'vendor/liip/imagine-bundle/translations', 19 => 'vendor/gesdinet/jwt-refresh-token-bundle/translations', 20 => 'vendor/symfony/swiftmailer-bundle/translations', 21 => 'vendor/oneup/flysystem-bundle/translations', 22 => 'vendor/antishov/doctrine-extensions-bundle/translations', 23 => 'translations']]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $instance->setFallbackLocales([0 => 'en']);

        return $instance;
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $a = ($this->privates['property_info'] ?? $this->getPropertyInfoService());

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService.php', true],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
        ], [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'doctrine.orm.validator.unique' => '?',
            'security.validator.user_password' => '?',
            'validator.expression' => '?',
        ])));
        if ($this->has('translator')) {
            $instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));
        }
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()))]);
        $instance->addLoader(new \Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader($a, $a, $a, NULL));
        $instance->addLoader(new \Symfony\Bridge\Doctrine\Validator\DoctrineLoader(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), NULL));

        return $instance;
    }

    /**
     * Gets the private 'vich_uploader.metadata_reader' shared service.
     *
     * @return \Vich\UploaderBundle\Metadata\MetadataReader
     */
    protected function getVichUploader_MetadataReaderService()
    {
        $a = new \Metadata\Driver\FileLocator([]);

        $b = new \Metadata\MetadataFactory(new \Metadata\Driver\DriverChain([0 => new \Vich\UploaderBundle\Metadata\Driver\XmlDriver($a), 1 => new \Vich\UploaderBundle\Metadata\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService())), 2 => new \Vich\UploaderBundle\Metadata\Driver\YamlDriver($a)]), 'Metadata\\ClassHierarchyMetadata', true);
        $b->setCache(new \Metadata\Cache\FileCache(($this->targetDir.''.'/vich_uploader')));

        return $this->privates['vich_uploader.metadata_reader'] = new \Vich\UploaderBundle\Metadata\MetadataReader($b);
    }

    /**
     * Gets the private 'vich_uploader.property_mapping_factory' shared service.
     *
     * @return \Vich\UploaderBundle\Mapping\PropertyMappingFactory
     */
    protected function getVichUploader_PropertyMappingFactoryService()
    {
        return $this->privates['vich_uploader.property_mapping_factory'] = new \Vich\UploaderBundle\Mapping\PropertyMappingFactory($this, ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService()), $this->parameters['vich_uploader.mappings'], '_name');
    }

    /**
     * Gets the private 'vich_uploader.storage.flysystem' shared service.
     *
     * @return \Vich\UploaderBundle\Storage\FlysystemStorage
     */
    protected function getVichUploader_Storage_FlysystemService()
    {
        return $this->privates['vich_uploader.storage.flysystem'] = new \Vich\UploaderBundle\Storage\FlysystemStorage(($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()), ($this->services['oneup_flysystem.mount_manager'] ?? $this->getOneupFlysystem_MountManagerService()));
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->privates['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->privates['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(($this->services['twig'] ?? $this->getTwigService()), false, 2, ($this->services['router'] ?? $this->getRouterService()), '^/((index|app(_[\\w]+)?)\\.php/)?_wdt', ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()));
    }

    public function getParameter(string $name)
    {
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter(string $name): bool
    {
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter(string $name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'client_url' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'serializer.mapping.cache.file' => false,
        'doctrine.orm.proxy_dir' => false,
        'nelmio_cors.defaults' => false,
        'lexik_jwt_authentication.pass_phrase' => false,
        'swiftmailer.spool.default.memory.path' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'client_url': $value = $this->getEnv('resolve:CLIENT_URL'); break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDir.''.'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDir.''.'/App_KernelDevDebugContainer.xml'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDir.''.'/serialization.php'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            case 'nelmio_cors.defaults': $value = [
                'allow_origin' => [
                    0 => $this->getEnv('CORS_ALLOW_ORIGIN'),
                ],
                'allow_credentials' => false,
                'allow_headers' => true,
                'expose_headers' => [
                    0 => 'Link',
                ],
                'allow_methods' => [
                    0 => 'GET',
                    1 => 'OPTIONS',
                    2 => 'POST',
                    3 => 'PUT',
                    4 => 'PATCH',
                    5 => 'DELETE',
                ],
                'max_age' => 3600,
                'hosts' => [

                ],
                'origin_regex' => true,
                'forced_allow_origin_value' => NULL,
            ]; break;
            case 'lexik_jwt_authentication.pass_phrase': $value = $this->getEnv('JWT_PASSPHRASE'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDir.''.'/swiftmailer/spool/default'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'/log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'ApiPlatformBundle' => 'ApiPlatform\\Core\\Bridge\\Symfony\\Bundle\\ApiPlatformBundle',
                'NelmioCorsBundle' => 'Nelmio\\CorsBundle\\NelmioCorsBundle',
                'MakerBundle' => 'Symfony\\Bundle\\MakerBundle\\MakerBundle',
                'LexikJWTAuthenticationBundle' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\LexikJWTAuthenticationBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'VichUploaderBundle' => 'Vich\\UploaderBundle\\VichUploaderBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle',
                'GesdinetJWTRefreshTokenBundle' => 'Gesdinet\\JWTRefreshTokenBundle\\GesdinetJWTRefreshTokenBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'OneupFlysystemBundle' => 'Oneup\\FlysystemBundle\\OneupFlysystemBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'ApiPlatformBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle'),
                    'namespace' => 'ApiPlatform\\Core\\Bridge\\Symfony\\Bundle',
                ],
                'NelmioCorsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle'),
                    'namespace' => 'Nelmio\\CorsBundle',
                ],
                'MakerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src'),
                    'namespace' => 'Symfony\\Bundle\\MakerBundle',
                ],
                'LexikJWTAuthenticationBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle'),
                    'namespace' => 'Lexik\\Bundle\\JWTAuthenticationBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'VichUploaderBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle'),
                    'namespace' => 'Vich\\UploaderBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'DoctrineFixturesBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ],
                'JMSSerializerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/jms/serializer-bundle'),
                    'namespace' => 'JMS\\SerializerBundle',
                ],
                'MonologBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'WebProfilerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
                'LiipImagineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/liip/imagine-bundle'),
                    'namespace' => 'Liip\\ImagineBundle',
                ],
                'GesdinetJWTRefreshTokenBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/gesdinet/jwt-refresh-token-bundle'),
                    'namespace' => 'Gesdinet\\JWTRefreshTokenBundle',
                ],
                'SwiftmailerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'OneupFlysystemBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/oneup/flysystem-bundle'),
                    'namespace' => 'Oneup\\FlysystemBundle',
                ],
                'StofDoctrineExtensionsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/antishov/doctrine-extensions-bundle'),
                    'namespace' => 'Stof\\DoctrineExtensionsBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'App_KernelDevDebugContainer',
            'container.autowiring.strict_mode' => true,
            'container.dumper.inline_class_loader' => true,
            'env(VARNISH_URL)' => '',
            'env(DATABASE_DRIVER)' => '',
            'env(DATABASE_HOST)' => '',
            'env(DATABASE_PORT)' => '',
            'env(DATABASE_NAME)' => '',
            'env(DATABASE_USER)' => '',
            'env(DATABASE_URL)' => '',
            'env(DATABASE_PASSWORD)' => '',
            'locale' => 'en',
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'kernel.error_controller' => 'error_controller',
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.prefix' => '',
            'twig.form.resources' => [
                0 => '@VichUploader/Form/fields.html.twig',
                1 => 'form_div_layout.html.twig',
                2 => '@LiipImagine/Form/form_div_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'security.role_hierarchy.roles' => [

            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'api_platform.enable_entrypoint' => true,
            'api_platform.enable_docs' => true,
            'api_platform.title' => 'Inshop CRM',
            'api_platform.description' => '',
            'api_platform.version' => 'v1.6.2',
            'api_platform.show_webby' => true,
            'api_platform.exception_to_status' => [
                'Symfony\\Component\\Serializer\\Exception\\ExceptionInterface' => 400,
                'ApiPlatform\\Core\\Exception\\InvalidArgumentException' => 400,
                'ApiPlatform\\Core\\Exception\\FilterValidationException' => 400,
                'Doctrine\\ORM\\OptimisticLockException' => 409,
                'App\\Exception\\EntityRemoveException' => 409,
            ],
            'api_platform.formats' => [
                'jsonld' => [
                    0 => 'application/ld+json',
                ],
                'json' => [
                    0 => 'application/json',
                ],
                'html' => [
                    0 => 'text/html',
                ],
            ],
            'api_platform.patch_formats' => [

            ],
            'api_platform.error_formats' => [
                'jsonproblem' => [
                    0 => 'application/problem+json',
                ],
                'jsonld' => [
                    0 => 'application/ld+json',
                ],
            ],
            'api_platform.allow_plain_identifiers' => false,
            'api_platform.eager_loading.enabled' => true,
            'api_platform.eager_loading.max_joins' => 30,
            'api_platform.eager_loading.fetch_partial' => false,
            'api_platform.eager_loading.force_eager' => true,
            'api_platform.collection.exists_parameter_name' => 'exists',
            'api_platform.collection.order' => 'ASC',
            'api_platform.collection.order_parameter_name' => 'order',
            'api_platform.collection.pagination.enabled' => true,
            'api_platform.collection.pagination.partial' => false,
            'api_platform.collection.pagination.client_enabled' => true,
            'api_platform.collection.pagination.client_items_per_page' => true,
            'api_platform.collection.pagination.client_partial' => false,
            'api_platform.collection.pagination.items_per_page' => 30,
            'api_platform.collection.pagination.maximum_items_per_page' => NULL,
            'api_platform.collection.pagination.page_parameter_name' => 'page',
            'api_platform.collection.pagination.enabled_parameter_name' => 'pagination',
            'api_platform.collection.pagination.items_per_page_parameter_name' => 'itemsPerPage',
            'api_platform.collection.pagination.partial_parameter_name' => 'partial',
            'api_platform.collection.pagination' => [
                'client_items_per_page' => true,
                'client_enabled' => true,
                'enabled' => true,
                'partial' => false,
                'client_partial' => false,
                'items_per_page' => 30,
                'maximum_items_per_page' => NULL,
                'page_parameter_name' => 'page',
                'enabled_parameter_name' => 'pagination',
                'items_per_page_parameter_name' => 'itemsPerPage',
                'partial_parameter_name' => 'partial',
            ],
            'api_platform.http_cache.etag' => true,
            'api_platform.http_cache.max_age' => NULL,
            'api_platform.http_cache.shared_max_age' => NULL,
            'api_platform.http_cache.vary' => [
                0 => 'Accept',
            ],
            'api_platform.http_cache.public' => NULL,
            'api_platform.resource_class_directories' => [
                0 => (\dirname(__DIR__, 4).'/src/Entity'),
                1 => (\dirname(__DIR__, 4).'/vendor/gesdinet/jwt-refresh-token-bundle/Entity'),
            ],
            'api_platform.oauth.enabled' => false,
            'api_platform.oauth.clientId' => '',
            'api_platform.oauth.clientSecret' => '',
            'api_platform.oauth.type' => 'oauth2',
            'api_platform.oauth.flow' => 'application',
            'api_platform.oauth.tokenUrl' => '/oauth/v2/token',
            'api_platform.oauth.authorizationUrl' => '/oauth/v2/auth',
            'api_platform.oauth.scopes' => [

            ],
            'api_platform.swagger.versions' => [
                0 => 2,
                1 => 3,
            ],
            'api_platform.enable_swagger_ui' => true,
            'api_platform.enable_re_doc' => true,
            'api_platform.swagger.api_keys' => [
                'apiKey' => [
                    'name' => 'Authorization',
                    'type' => 'header',
                ],
            ],
            'api_platform.graphql.enabled' => false,
            'api_platform.graphql.graphiql.enabled' => false,
            'api_platform.graphql.graphql_playground.enabled' => false,
            'api_platform.graphql.collection.pagination' => [
                'enabled' => true,
            ],
            'api_platform.validator.serialize_payload_fields' => [

            ],
            'api_platform.elasticsearch.enabled' => false,
            'nelmio_cors.map' => [
                '^/' => [

                ],
            ],
            'nelmio_cors.cors_listener.class' => 'Nelmio\\CorsBundle\\EventListener\\CorsListener',
            'nelmio_cors.options_resolver.class' => 'Nelmio\\CorsBundle\\Options\\Resolver',
            'nelmio_cors.options_provider.config.class' => 'Nelmio\\CorsBundle\\Options\\ConfigProvider',
            'lexik_jwt_authentication.token_ttl' => 28800,
            'lexik_jwt_authentication.clock_skew' => 0,
            'lexik_jwt_authentication.user_identity_field' => 'username',
            'lexik_jwt_authentication.user_id_claim' => 'username',
            'lexik_jwt_authentication.encoder.signature_algorithm' => 'RS256',
            'lexik_jwt_authentication.encoder.crypto_engine' => 'openssl',
            'doctrine_migrations.dir_name' => (\dirname(__DIR__, 4).'/src/Migrations'),
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.column_name' => 'version',
            'doctrine_migrations.column_length' => 14,
            'doctrine_migrations.executed_at_column_name' => 'executed_at',
            'doctrine_migrations.all_or_nothing' => false,
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'vich_uploader.default_filename_attribute_suffix' => '_name',
            'vich_uploader.mappings' => [
                'file' => [
                    'uri_prefix' => '/file',
                    'upload_destination' => 'asset_filesystem',
                    'namer' => [
                        'service' => 'Vich\\UploaderBundle\\Naming\\UniqidNamer.file',
                        'options' => [

                        ],
                    ],
                    'directory_namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ],
                'image' => [
                    'uri_prefix' => '/image',
                    'upload_destination' => 'image_filesystem',
                    'namer' => [
                        'service' => 'Vich\\UploaderBundle\\Naming\\UniqidNamer.image',
                        'options' => [

                        ],
                    ],
                    'directory_namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ],
            ],
            'vich_uploader.file_injector.class' => 'Vich\\UploaderBundle\\Injector\\FileInjector',
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ],
                ],
                'monolog.handler.main' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                    ],
                ],
            ],
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'liip_imagine.resolvers' => [
                'default' => [
                    'web_path' => [
                        'web_root' => (\dirname(__DIR__, 4).'/public'),
                        'cache_prefix' => 'media/cache',
                    ],
                ],
            ],
            'liip_imagine.loaders' => [
                'default' => [
                    'filesystem' => [
                        'locator' => 'filesystem',
                        'data_root' => [
                            0 => (\dirname(__DIR__, 4).'/public'),
                        ],
                        'allow_unresolvable_data_roots' => false,
                        'bundle_resources' => [
                            'enabled' => false,
                            'access_control_type' => 'blacklist',
                            'access_control_list' => [

                            ],
                        ],
                    ],
                ],
            ],
            'liip_imagine.jpegoptim.binary' => '/usr/bin/jpegoptim',
            'liip_imagine.jpegoptim.stripAll' => true,
            'liip_imagine.jpegoptim.max' => NULL,
            'liip_imagine.jpegoptim.progressive' => true,
            'liip_imagine.jpegoptim.tempDir' => NULL,
            'liip_imagine.optipng.binary' => '/usr/bin/optipng',
            'liip_imagine.optipng.level' => 7,
            'liip_imagine.optipng.stripAll' => true,
            'liip_imagine.optipng.tempDir' => NULL,
            'liip_imagine.pngquant.binary' => '/usr/bin/pngquant',
            'liip_imagine.mozjpeg.binary' => '/opt/mozjpeg/bin/cjpeg',
            'liip_imagine.driver_service' => 'liip_imagine.gd',
            'liip_imagine.cache.resolver.default' => 'default',
            'liip_imagine.default_image' => NULL,
            'liip_imagine.filter_sets' => [
                'thumbnail_200' => [
                    'quality' => 100,
                    'jpeg_quality' => 85,
                    'png_compression_level' => 8,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'auto_rotate' => [

                        ],
                        'strip' => [

                        ],
                        'thumbnail' => [
                            'size' => [
                                0 => 200,
                                1 => 150,
                            ],
                            'mode' => 'inset',
                            'allow_upscale' => false,
                        ],
                        'background' => [
                            'size' => [
                                0 => 200,
                                1 => 150,
                            ],
                            'position' => 'center',
                            'color' => '#fff',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'thumbnail_420' => [
                    'quality' => 100,
                    'jpeg_quality' => 85,
                    'png_compression_level' => 8,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'auto_rotate' => [

                        ],
                        'strip' => [

                        ],
                        'thumbnail' => [
                            'size' => [
                                0 => 420,
                                1 => 320,
                            ],
                            'mode' => 'inset',
                            'allow_upscale' => false,
                        ],
                        'background' => [
                            'size' => [
                                0 => 420,
                                1 => 320,
                            ],
                            'position' => 'center',
                            'color' => '#fff',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'thumbnail_1000' => [
                    'quality' => 100,
                    'jpeg_quality' => 85,
                    'png_compression_level' => 8,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'auto_rotate' => [

                        ],
                        'strip' => [

                        ],
                        'thumbnail' => [
                            'size' => [
                                0 => 1000,
                                1 => 750,
                            ],
                            'mode' => 'inset',
                            'allow_upscale' => false,
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
            ],
            'liip_imagine.binary.loader.default' => 'default',
            'liip_imagine.controller.filter_action' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction',
            'liip_imagine.controller.filter_runtime_action' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction',
            'gesdinet_jwt_refresh_token.ttl' => 28800,
            'gesdinet_jwt_refresh_token.ttl_update' => true,
            'gesdinet_jwt_refresh_token.security.firewall' => 'refresh',
            'gesdinet_jwt_refresh_token.user_provider' => 'security.user.provider.concrete.client_provider',
            'gesdinet_jwt_refresh_token.user_identity_field' => 'username',
            'gesdinet_jwt_refresh_token.single_use' => false,
            'gesdinet_jwt_refresh_token.token_parameter_name' => 'refresh_token',
            'gesdinet.jwtrefreshtoken.refresh_token.class' => 'Gesdinet\\JWTRefreshTokenBundle\\Entity\\RefreshToken',
            'gesdinet.jwtrefreshtoken.object_manager.id' => 'doctrine.orm.entity_manager',
            'gesdinet.jwtrefreshtoken.user_checker.id' => 'security.user_checker',
            'swiftmailer.mailer.default.transport.name' => 'dynamic',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.default_locale' => 'en_US',
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'data_collector.templates' => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'api_platform.data_collector.request' => [
                    0 => 'api_platform.data_collector.request',
                    1 => '@ApiPlatform/DataCollector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.validator' => [
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.form' => [
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.translation' => [
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'data_collector.doctrine' => [
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ],
                'swiftmailer.data_collector' => [
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ],
                'Vich\\UploaderBundle\\DataCollector\\MappingCollector' => [
                    0 => 'vich_uploader.mapping_collector',
                    1 => '@VichUploader/Collector/mapping_collector.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ],
            ],
            'console.command.ids' => [
                0 => 'console.command.public_alias.App\\Command\\ElasticaIndexProductCommand',
                1 => 'console.command.public_alias.App\\Command\\ElasticaIndexSearchCommand',
                2 => 'console.command.public_alias.App\\Command\\GoogleAuthCommand',
                3 => 'console.command.public_alias.api_platform.json_schema.json_schema_generate_command',
                4 => 'console.command.public_alias.api_platform.swagger.command.swagger_command',
            ],
        ];
    }

    protected function throw($message)
    {
        throw new RuntimeException($message);
    }
}
