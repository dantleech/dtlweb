<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'acme.basic_cms.admin.comment' => 'getAcme_BasicCms_Admin_CommentService',
            'acme.basic_cms.admin.page' => 'getAcme_BasicCms_Admin_PageService',
            'acme.basic_cms.admin.post' => 'getAcme_BasicCms_Admin_PostService',
            'acme.basic_cms.comment_manager' => 'getAcme_BasicCms_CommentManagerService',
            'acme.basic_cms.menu_provider' => 'getAcme_BasicCms_MenuProviderService',
            'acme.demo.listener' => 'getAcme_Demo_ListenerService',
            'acme.phpcr.initializer.site' => 'getAcme_Phpcr_Initializer_SiteService',
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.controller' => 'getAssetic_ControllerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assetic.request_listener' => 'getAssetic_RequestListenerService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'captcha.type' => 'getCaptcha_TypeService',
            'cmf_core.form.type.checkbox_url_label' => 'getCmfCore_Form_Type_CheckboxUrlLabelService',
            'cmf_core.publish_workflow.access_decision_manager' => 'getCmfCore_PublishWorkflow_AccessDecisionManagerService',
            'cmf_core.publish_workflow.checker.default' => 'getCmfCore_PublishWorkflow_Checker_DefaultService',
            'cmf_core.publish_workflow.request_listener' => 'getCmfCore_PublishWorkflow_RequestListenerService',
            'cmf_menu.admin_extension.menu_options' => 'getCmfMenu_AdminExtension_MenuOptionsService',
            'cmf_menu.current_item_voter.uri_prefix' => 'getCmfMenu_CurrentItemVoter_UriPrefixService',
            'cmf_menu.factory' => 'getCmfMenu_FactoryService',
            'cmf_menu.publish_workflow.create_menu_item_from_node_listener' => 'getCmfMenu_PublishWorkflow_CreateMenuItemFromNodeListenerService',
            'cmf_routing.dynamic_router' => 'getCmfRouting_DynamicRouterService',
            'cmf_routing.enhancer.route_content' => 'getCmfRouting_Enhancer_RouteContentService',
            'cmf_routing.final_matcher' => 'getCmfRouting_FinalMatcherService',
            'cmf_routing.generator' => 'getCmfRouting_GeneratorService',
            'cmf_routing.nested_matcher' => 'getCmfRouting_NestedMatcherService',
            'cmf_routing.phpcr_candidates_prefix' => 'getCmfRouting_PhpcrCandidatesPrefixService',
            'cmf_routing.phpcr_content_repository' => 'getCmfRouting_PhpcrContentRepositoryService',
            'cmf_routing.phpcr_route_provider' => 'getCmfRouting_PhpcrRouteProviderService',
            'cmf_routing.phpcrodm_route_idprefix_listener' => 'getCmfRouting_PhpcrodmRouteIdprefixListenerService',
            'cmf_routing.redirect_controller' => 'getCmfRouting_RedirectControllerService',
            'cmf_routing.route_type_form_type' => 'getCmfRouting_RouteTypeFormTypeService',
            'cmf_routing.router' => 'getCmfRouting_RouterService',
            'cmf_routing.validator.route_defaults' => 'getCmfRouting_Validator_RouteDefaultsService',
            'cmf_routing_auto.adapter.phpcr_odm' => 'getCmfRoutingAuto_Adapter_PhpcrOdmService',
            'cmf_routing_auto.auto_route_manager' => 'getCmfRoutingAuto_AutoRouteManagerService',
            'cmf_routing_auto.conflict_resolver.auto_increment' => 'getCmfRoutingAuto_ConflictResolver_AutoIncrementService',
            'cmf_routing_auto.conflict_resolver.throw_exception' => 'getCmfRoutingAuto_ConflictResolver_ThrowExceptionService',
            'cmf_routing_auto.defunct_route_handler.delegating' => 'getCmfRoutingAuto_DefunctRouteHandler_DelegatingService',
            'cmf_routing_auto.defunct_route_handler.leave_redirect' => 'getCmfRoutingAuto_DefunctRouteHandler_LeaveRedirectService',
            'cmf_routing_auto.defunct_route_handler.remove' => 'getCmfRoutingAuto_DefunctRouteHandler_RemoveService',
            'cmf_routing_auto.initializer' => 'getCmfRoutingAuto_InitializerService',
            'cmf_routing_auto.metadata.factory' => 'getCmfRoutingAuto_Metadata_FactoryService',
            'cmf_routing_auto.metadata.factory.builder' => 'getCmfRoutingAuto_Metadata_Factory_BuilderService',
            'cmf_routing_auto.metadata.loader.delegating' => 'getCmfRoutingAuto_Metadata_Loader_DelegatingService',
            'cmf_routing_auto.metadata.loader.resolver' => 'getCmfRoutingAuto_Metadata_Loader_ResolverService',
            'cmf_routing_auto.metadata.loader.xml' => 'getCmfRoutingAuto_Metadata_Loader_XmlService',
            'cmf_routing_auto.metadata.loader.yaml' => 'getCmfRoutingAuto_Metadata_Loader_YamlService',
            'cmf_routing_auto.phpcrodm_auto_route_listener' => 'getCmfRoutingAuto_PhpcrodmAutoRouteListenerService',
            'cmf_routing_auto.redirect_controller' => 'getCmfRoutingAuto_RedirectControllerService',
            'cmf_routing_auto.service_registry' => 'getCmfRoutingAuto_ServiceRegistryService',
            'cmf_routing_auto.slugifier' => 'getCmfRoutingAuto_SlugifierService',
            'cmf_routing_auto.token_provider.container' => 'getCmfRoutingAuto_TokenProvider_ContainerService',
            'cmf_routing_auto.token_provider.content_datetime' => 'getCmfRoutingAuto_TokenProvider_ContentDatetimeService',
            'cmf_routing_auto.token_provider.content_locale' => 'getCmfRoutingAuto_TokenProvider_ContentLocaleService',
            'cmf_routing_auto.token_provider.content_method' => 'getCmfRoutingAuto_TokenProvider_ContentMethodService',
            'cmf_routing_auto.uri_generator' => 'getCmfRoutingAuto_UriGeneratorService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'controller_resolver' => 'getControllerResolverService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'data_collector.translation' => 'getDataCollector_TranslationService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.dantleech2_connection' => 'getDoctrine_Dbal_Dantleech2ConnectionService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger' => 'getDoctrine_Dbal_LoggerService',
            'doctrine.dbal.logger.profiling.dantleech2' => 'getDoctrine_Dbal_Logger_Profiling_Dantleech2Service',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_phpcr' => 'getDoctrinePhpcrService',
            'doctrine_phpcr.console_dumper' => 'getDoctrinePhpcr_ConsoleDumperService',
            'doctrine_phpcr.default_session' => 'getDoctrinePhpcr_DefaultSessionService',
            'doctrine_phpcr.initializer_manager' => 'getDoctrinePhpcr_InitializerManagerService',
            'doctrine_phpcr.jackalope.repository.default' => 'getDoctrinePhpcr_Jackalope_Repository_DefaultService',
            'doctrine_phpcr.jackalope.repository.factory.doctrinedbal' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_DoctrinedbalService',
            'doctrine_phpcr.jackalope.repository.factory.jackrabbit' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_JackrabbitService',
            'doctrine_phpcr.jackalope.repository.factory.prismic' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_PrismicService',
            'doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_Service_DoctrinedbalService',
            'doctrine_phpcr.jackalope.repository.factory.service.jackrabbit' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_Service_JackrabbitService',
            'doctrine_phpcr.jackalope.repository.factory.service.prismic' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_Service_PrismicService',
            'doctrine_phpcr.jackalope_doctrine_dbal.schema_listener' => 'getDoctrinePhpcr_JackalopeDoctrineDbal_SchemaListenerService',
            'doctrine_phpcr.odm.default.translation.strategy.attribute' => 'getDoctrinePhpcr_Odm_Default_Translation_Strategy_AttributeService',
            'doctrine_phpcr.odm.default.translation.strategy.child' => 'getDoctrinePhpcr_Odm_Default_Translation_Strategy_ChildService',
            'doctrine_phpcr.odm.default_document_manager' => 'getDoctrinePhpcr_Odm_DefaultDocumentManagerService',
            'doctrine_phpcr.odm.form.type.path' => 'getDoctrinePhpcr_Odm_Form_Type_PathService',
            'doctrine_phpcr.odm.translation.strategy.attribute' => 'getDoctrinePhpcr_Odm_Translation_Strategy_AttributeService',
            'doctrine_phpcr.odm.translation.strategy.child' => 'getDoctrinePhpcr_Odm_Translation_Strategy_ChildService',
            'doctrine_phpcr.odm.validator.valid_phpcr_odm' => 'getDoctrinePhpcr_Odm_Validator_ValidPhpcrOdmService',
            'dtl.expression_captcha.expression_language' => 'getDtl_ExpressionCaptcha_ExpressionLanguageService',
            'dtl.expression_captcha.generator' => 'getDtl_ExpressionCaptcha_GeneratorService',
            'dtl_phpcr_taxonomy.metadata.driver.annotation' => 'getDtlPhpcrTaxonomy_Metadata_Driver_AnnotationService',
            'dtl_phpcr_taxonomy.metadata.driver.chain' => 'getDtlPhpcrTaxonomy_Metadata_Driver_ChainService',
            'dtl_phpcr_taxonomy.metadata.factory' => 'getDtlPhpcrTaxonomy_Metadata_FactoryService',
            'dtl_phpcr_taxonomy.phpcrodm.subscriber' => 'getDtlPhpcrTaxonomy_Phpcrodm_SubscriberService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.phpcr.document' => 'getForm_Type_Phpcr_DocumentService',
            'form.type.phpcr.reference' => 'getForm_Type_Phpcr_ReferenceService',
            'form.type.phpcr_odm.reference_collection' => 'getForm_Type_PhpcrOdm_ReferenceCollectionService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.doctrine_phpcr' => 'getForm_TypeGuesser_DoctrinePhpcrService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_http_cache.event_listener.cache_control' => 'getFosHttpCache_EventListener_CacheControlService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'gregwar_captcha.captcha_builder' => 'getGregwarCaptcha_CaptchaBuilderService',
            'gregwar_captcha.generator' => 'getGregwarCaptcha_GeneratorService',
            'gregwar_captcha.image_file_handler' => 'getGregwarCaptcha_ImageFileHandlerService',
            'gregwar_captcha.phrase_builder' => 'getGregwarCaptcha_PhraseBuilderService',
            'http_kernel' => 'getHttpKernelService',
            'kernel' => 'getKernelService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'markdown.parser' => 'getMarkdown_ParserService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.debug' => 'getMonolog_Handler_DebugService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.doctrine_phpcr' => 'getMonolog_Logger_DoctrinePhpcrService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'pagerfanta.convert_not_valid_current_page_to_not_found_listener' => 'getPagerfanta_ConvertNotValidCurrentPageToNotFoundListenerService',
            'pagerfanta.convert_not_valid_max_per_page_to_not_found_listener' => 'getPagerfanta_ConvertNotValidMaxPerPageToNotFoundListenerService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.context' => 'getSecurity_ContextService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.login' => 'getSecurity_Firewall_Map_Context_LoginService',
            'security.firewall.map.context.secured_area' => 'getSecurity_Firewall_Map_Context_SecuredAreaService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user.provider.concrete.in_memory' => 'getSecurity_User_Provider_Concrete_InMemoryService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.webconfigurator' => 'getSensioDistribution_WebconfiguratorService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'sonata.admin.audit.manager' => 'getSonata_Admin_Audit_ManagerService',
            'sonata.admin.block.admin_list' => 'getSonata_Admin_Block_AdminListService',
            'sonata.admin.block.search_result' => 'getSonata_Admin_Block_SearchResultService',
            'sonata.admin.builder.doctrine_phpcr_datagrid' => 'getSonata_Admin_Builder_DoctrinePhpcrDatagridService',
            'sonata.admin.builder.doctrine_phpcr_form' => 'getSonata_Admin_Builder_DoctrinePhpcrFormService',
            'sonata.admin.builder.doctrine_phpcr_list' => 'getSonata_Admin_Builder_DoctrinePhpcrListService',
            'sonata.admin.builder.doctrine_phpcr_show' => 'getSonata_Admin_Builder_DoctrinePhpcrShowService',
            'sonata.admin.builder.filter.factory' => 'getSonata_Admin_Builder_Filter_FactoryService',
            'sonata.admin.controller.admin' => 'getSonata_Admin_Controller_AdminService',
            'sonata.admin.doctrine_phpcr.filter.type.boolean' => 'getSonata_Admin_DoctrinePhpcr_Filter_Type_BooleanService',
            'sonata.admin.doctrine_phpcr.filter.type.callback' => 'getSonata_Admin_DoctrinePhpcr_Filter_Type_CallbackService',
            'sonata.admin.doctrine_phpcr.filter.type.choice' => 'getSonata_Admin_DoctrinePhpcr_Filter_Type_ChoiceService',
            'sonata.admin.doctrine_phpcr.filter.type.date' => 'getSonata_Admin_DoctrinePhpcr_Filter_Type_DateService',
            'sonata.admin.doctrine_phpcr.filter.type.model' => 'getSonata_Admin_DoctrinePhpcr_Filter_Type_ModelService',
            'sonata.admin.doctrine_phpcr.filter.type.nodename' => 'getSonata_Admin_DoctrinePhpcr_Filter_Type_NodenameService',
            'sonata.admin.doctrine_phpcr.filter.type.number' => 'getSonata_Admin_DoctrinePhpcr_Filter_Type_NumberService',
            'sonata.admin.doctrine_phpcr.filter.type.string' => 'getSonata_Admin_DoctrinePhpcr_Filter_Type_StringService',
            'sonata.admin.doctrine_phpcr.form.collection_type_extension' => 'getSonata_Admin_DoctrinePhpcr_Form_CollectionTypeExtensionService',
            'sonata.admin.doctrine_phpcr.form.type.choice_field_mask' => 'getSonata_Admin_DoctrinePhpcr_Form_Type_ChoiceFieldMaskService',
            'sonata.admin.doctrine_phpcr.form.type.phpcr_odm_tree' => 'getSonata_Admin_DoctrinePhpcr_Form_Type_PhpcrOdmTreeService',
            'sonata.admin.doctrine_phpcr.form.type.phpcr_odm_tree_manager' => 'getSonata_Admin_DoctrinePhpcr_Form_Type_PhpcrOdmTreeManagerService',
            'sonata.admin.doctrine_phpcr.phpcr_odm_tree' => 'getSonata_Admin_DoctrinePhpcr_PhpcrOdmTreeService',
            'sonata.admin.doctrine_phpcr.tree_controller' => 'getSonata_Admin_DoctrinePhpcr_TreeControllerService',
            'sonata.admin.doctrine_phpcr_form.filter.type.choice' => 'getSonata_Admin_DoctrinePhpcrForm_Filter_Type_ChoiceService',
            'sonata.admin.event.extension' => 'getSonata_Admin_Event_ExtensionService',
            'sonata.admin.exporter' => 'getSonata_Admin_ExporterService',
            'sonata.admin.form.extension.field' => 'getSonata_Admin_Form_Extension_FieldService',
            'sonata.admin.form.extension.field.mopa' => 'getSonata_Admin_Form_Extension_Field_MopaService',
            'sonata.admin.form.filter.type.choice' => 'getSonata_Admin_Form_Filter_Type_ChoiceService',
            'sonata.admin.form.filter.type.date' => 'getSonata_Admin_Form_Filter_Type_DateService',
            'sonata.admin.form.filter.type.daterange' => 'getSonata_Admin_Form_Filter_Type_DaterangeService',
            'sonata.admin.form.filter.type.datetime' => 'getSonata_Admin_Form_Filter_Type_DatetimeService',
            'sonata.admin.form.filter.type.datetime_range' => 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService',
            'sonata.admin.form.filter.type.default' => 'getSonata_Admin_Form_Filter_Type_DefaultService',
            'sonata.admin.form.filter.type.number' => 'getSonata_Admin_Form_Filter_Type_NumberService',
            'sonata.admin.form.type.admin' => 'getSonata_Admin_Form_Type_AdminService',
            'sonata.admin.form.type.collection' => 'getSonata_Admin_Form_Type_CollectionService',
            'sonata.admin.form.type.model_autocomplete' => 'getSonata_Admin_Form_Type_ModelAutocompleteService',
            'sonata.admin.form.type.model_choice' => 'getSonata_Admin_Form_Type_ModelChoiceService',
            'sonata.admin.form.type.model_hidden' => 'getSonata_Admin_Form_Type_ModelHiddenService',
            'sonata.admin.form.type.model_list' => 'getSonata_Admin_Form_Type_ModelListService',
            'sonata.admin.form.type.model_reference' => 'getSonata_Admin_Form_Type_ModelReferenceService',
            'sonata.admin.guesser.doctrine_phpcr_datagrid' => 'getSonata_Admin_Guesser_DoctrinePhpcrDatagridService',
            'sonata.admin.guesser.doctrine_phpcr_datagrid_chain' => 'getSonata_Admin_Guesser_DoctrinePhpcrDatagridChainService',
            'sonata.admin.guesser.doctrine_phpcr_list' => 'getSonata_Admin_Guesser_DoctrinePhpcrListService',
            'sonata.admin.guesser.doctrine_phpcr_list_chain' => 'getSonata_Admin_Guesser_DoctrinePhpcrListChainService',
            'sonata.admin.guesser.doctrine_phpcr_show' => 'getSonata_Admin_Guesser_DoctrinePhpcrShowService',
            'sonata.admin.guesser.doctrine_phpcr_show_chain' => 'getSonata_Admin_Guesser_DoctrinePhpcrShowChainService',
            'sonata.admin.helper' => 'getSonata_Admin_HelperService',
            'sonata.admin.label.strategy.bc' => 'getSonata_Admin_Label_Strategy_BcService',
            'sonata.admin.label.strategy.form_component' => 'getSonata_Admin_Label_Strategy_FormComponentService',
            'sonata.admin.label.strategy.native' => 'getSonata_Admin_Label_Strategy_NativeService',
            'sonata.admin.label.strategy.noop' => 'getSonata_Admin_Label_Strategy_NoopService',
            'sonata.admin.label.strategy.underscore' => 'getSonata_Admin_Label_Strategy_UnderscoreService',
            'sonata.admin.manager.doctrine_phpcr' => 'getSonata_Admin_Manager_DoctrinePhpcrService',
            'sonata.admin.manipulator.acl.admin' => 'getSonata_Admin_Manipulator_Acl_AdminService',
            'sonata.admin.object.manipulator.acl.admin' => 'getSonata_Admin_Object_Manipulator_Acl_AdminService',
            'sonata.admin.pool' => 'getSonata_Admin_PoolService',
            'sonata.admin.route.cache' => 'getSonata_Admin_Route_CacheService',
            'sonata.admin.route.cache_warmup' => 'getSonata_Admin_Route_CacheWarmupService',
            'sonata.admin.route.default_generator' => 'getSonata_Admin_Route_DefaultGeneratorService',
            'sonata.admin.route.path_info' => 'getSonata_Admin_Route_PathInfoService',
            'sonata.admin.route.path_info_slashes' => 'getSonata_Admin_Route_PathInfoSlashesService',
            'sonata.admin.route.query_string' => 'getSonata_Admin_Route_QueryStringService',
            'sonata.admin.route_loader' => 'getSonata_Admin_RouteLoaderService',
            'sonata.admin.search.handler' => 'getSonata_Admin_Search_HandlerService',
            'sonata.admin.security.handler' => 'getSonata_Admin_Security_HandlerService',
            'sonata.admin.twig.doctrine_phpcr_extension' => 'getSonata_Admin_Twig_DoctrinePhpcrExtensionService',
            'sonata.admin.twig.extension' => 'getSonata_Admin_Twig_ExtensionService',
            'sonata.admin.validator.inline' => 'getSonata_Admin_Validator_InlineService',
            'sonata.block.cache.handler.default' => 'getSonata_Block_Cache_Handler_DefaultService',
            'sonata.block.cache.handler.noop' => 'getSonata_Block_Cache_Handler_NoopService',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService',
            'sonata.block.exception.strategy.manager' => 'getSonata_Block_Exception_Strategy_ManagerService',
            'sonata.block.form.type.block' => 'getSonata_Block_Form_Type_BlockService',
            'sonata.block.form.type.container_template' => 'getSonata_Block_Form_Type_ContainerTemplateService',
            'sonata.block.loader.chain' => 'getSonata_Block_Loader_ChainService',
            'sonata.block.loader.service' => 'getSonata_Block_Loader_ServiceService',
            'sonata.block.manager' => 'getSonata_Block_ManagerService',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService',
            'sonata.block.service.container' => 'getSonata_Block_Service_ContainerService',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService',
            'sonata.block.service.menu' => 'getSonata_Block_Service_MenuService',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService',
            'sonata.block.service.template' => 'getSonata_Block_Service_TemplateService',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService',
            'sonata.block.templating.helper' => 'getSonata_Block_Templating_HelperService',
            'sonata.block.twig.global' => 'getSonata_Block_Twig_GlobalService',
            'sonata.core.date.moment_format_converter' => 'getSonata_Core_Date_MomentFormatConverterService',
            'sonata.core.flashmessage.manager' => 'getSonata_Core_Flashmessage_ManagerService',
            'sonata.core.flashmessage.twig.extension' => 'getSonata_Core_Flashmessage_Twig_ExtensionService',
            'sonata.core.form.type.array' => 'getSonata_Core_Form_Type_ArrayService',
            'sonata.core.form.type.boolean' => 'getSonata_Core_Form_Type_BooleanService',
            'sonata.core.form.type.collection' => 'getSonata_Core_Form_Type_CollectionService',
            'sonata.core.form.type.color_selector' => 'getSonata_Core_Form_Type_ColorSelectorService',
            'sonata.core.form.type.date_picker' => 'getSonata_Core_Form_Type_DatePickerService',
            'sonata.core.form.type.date_range' => 'getSonata_Core_Form_Type_DateRangeService',
            'sonata.core.form.type.date_range_picker' => 'getSonata_Core_Form_Type_DateRangePickerService',
            'sonata.core.form.type.datetime_picker' => 'getSonata_Core_Form_Type_DatetimePickerService',
            'sonata.core.form.type.datetime_range' => 'getSonata_Core_Form_Type_DatetimeRangeService',
            'sonata.core.form.type.datetime_range_picker' => 'getSonata_Core_Form_Type_DatetimeRangePickerService',
            'sonata.core.form.type.equal' => 'getSonata_Core_Form_Type_EqualService',
            'sonata.core.form.type.translatable_choice' => 'getSonata_Core_Form_Type_TranslatableChoiceService',
            'sonata.core.model.adapter.chain' => 'getSonata_Core_Model_Adapter_ChainService',
            'sonata.core.slugify.cocur' => 'getSonata_Core_Slugify_CocurService',
            'sonata.core.slugify.native' => 'getSonata_Core_Slugify_NativeService',
            'sonata.core.twig.extension.text' => 'getSonata_Core_Twig_Extension_TextService',
            'sonata.core.twig.extension.wrapping' => 'getSonata_Core_Twig_Extension_WrappingService',
            'sonata.core.twig.status_extension' => 'getSonata_Core_Twig_StatusExtensionService',
            'sonata.core.twig.template_extension' => 'getSonata_Core_Twig_TemplateExtensionService',
            'sonata.core.validator.inline' => 'getSonata_Core_Validator_InlineService',
            'sonata_admin_doctrine_phpcr.tree_block' => 'getSonataAdminDoctrinePhpcr_TreeBlockService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.extension.acme.demo' => 'getTwig_Extension_Acme_DemoService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'validator.validator_factory' => 'getValidator_ValidatorFactoryService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
            'white_october_pagerfanta.view_factory' => 'getWhiteOctoberPagerfanta_ViewFactoryService',
        );
        $this->aliases = array(
            'cmf_core.publish_workflow.checker' => 'cmf_core.publish_workflow.checker.default',
            'cmf_routing.content_repository' => 'cmf_routing.phpcr_content_repository',
            'cmf_routing.route_provider' => 'cmf_routing.phpcr_route_provider',
            'cmf_routing_auto.adapter' => 'cmf_routing_auto.adapter.phpcr_odm',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'doctrine_phpcr.jackalope_doctrine_dbal.default_connection' => 'doctrine.dbal.default_connection',
            'doctrine_phpcr.odm.document_manager' => 'doctrine_phpcr.odm.default_document_manager',
            'doctrine_phpcr.session' => 'doctrine_phpcr.default_session',
            'event_dispatcher' => 'debug.event_dispatcher',
            'mailer' => 'swiftmailer.mailer.default',
            'router' => 'cmf_routing.router',
            'sensio.distribution.webconfigurator' => 'sensio_distribution.webconfigurator',
            'session.storage' => 'session.storage.native',
            'sonata.block.cache.handler' => 'sonata.block.cache.handler.default',
            'sonata.block.context_manager' => 'sonata.block.context_manager.default',
            'sonata.block.renderer' => 'sonata.block.renderer.default',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * Gets the 'acme.basic_cms.admin.comment' service.
     *
     * @return \Acme\BasicCmsBundle\Admin\CommentAdmin A Acme\BasicCmsBundle\Admin\CommentAdmin instance.
     */
    protected function getAcme_BasicCms_Admin_CommentService()
    {
        $instance = new \Acme\BasicCmsBundle\Admin\CommentAdmin('acme.basic_cms.admin.comment', 'Acme\\BasicCmsBundle\\Document\\Comment', 'SonataAdminBundle:CRUD');

        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info_slashes'));
        $instance->setFormTheme(array(0 => 'SonataDoctrinePHPCRAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrinePHPCRAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('doctrine_phpcr');
        $instance->setModelManager($this->get('sonata.admin.manager.doctrine_phpcr'));
        $instance->setFormContractor($this->get('sonata.admin.builder.doctrine_phpcr_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.doctrine_phpcr_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.doctrine_phpcr_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.doctrine_phpcr_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Comments');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataAdminBundle:Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'AcmeBasicCmsBundle::admin_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataDoctrinePHPCRAdminBundle:Pager:simple_pager_results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'acme.basic_cms.admin.page' service.
     *
     * @return \Acme\BasicCmsBundle\Admin\PageAdmin A Acme\BasicCmsBundle\Admin\PageAdmin instance.
     */
    protected function getAcme_BasicCms_Admin_PageService()
    {
        $instance = new \Acme\BasicCmsBundle\Admin\PageAdmin('acme.basic_cms.admin.page', 'Acme\\BasicCmsBundle\\Document\\Page', 'SonataAdminBundle:CRUD');

        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info_slashes'));
        $instance->setFormTheme(array(0 => 'SonataDoctrinePHPCRAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrinePHPCRAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('doctrine_phpcr');
        $instance->setModelManager($this->get('sonata.admin.manager.doctrine_phpcr'));
        $instance->setFormContractor($this->get('sonata.admin.builder.doctrine_phpcr_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.doctrine_phpcr_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.doctrine_phpcr_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.doctrine_phpcr_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Page');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataAdminBundle:Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'AcmeBasicCmsBundle::admin_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataDoctrinePHPCRAdminBundle:Pager:simple_pager_results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'acme.basic_cms.admin.post' service.
     *
     * @return \Acme\BasicCmsBundle\Admin\PostAdmin A Acme\BasicCmsBundle\Admin\PostAdmin instance.
     */
    protected function getAcme_BasicCms_Admin_PostService()
    {
        $instance = new \Acme\BasicCmsBundle\Admin\PostAdmin('acme.basic_cms.admin.post', 'Acme\\BasicCmsBundle\\Document\\Post', 'SonataAdminBundle:CRUD');

        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info_slashes'));
        $instance->setFormTheme(array(0 => 'SonataDoctrinePHPCRAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrinePHPCRAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('doctrine_phpcr');
        $instance->setModelManager($this->get('sonata.admin.manager.doctrine_phpcr'));
        $instance->setFormContractor($this->get('sonata.admin.builder.doctrine_phpcr_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.doctrine_phpcr_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.doctrine_phpcr_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.doctrine_phpcr_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Blog Posts');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataAdminBundle:Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'AcmeBasicCmsBundle::admin_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataDoctrinePHPCRAdminBundle:Pager:simple_pager_results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'acme.basic_cms.comment_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Acme\BasicCmsBundle\Model\CommentManager A Acme\BasicCmsBundle\Model\CommentManager instance.
     */
    protected function getAcme_BasicCms_CommentManagerService()
    {
        return $this->services['acme.basic_cms.comment_manager'] = new \Acme\BasicCmsBundle\Model\CommentManager($this->get('swiftmailer.mailer.default'), $this->get('twig'));
    }

    /**
     * Gets the 'acme.basic_cms.menu_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\MenuBundle\Provider\PhpcrMenuProvider A Symfony\Cmf\Bundle\MenuBundle\Provider\PhpcrMenuProvider instance.
     */
    protected function getAcme_BasicCms_MenuProviderService()
    {
        $this->services['acme.basic_cms.menu_provider'] = $instance = new \Symfony\Cmf\Bundle\MenuBundle\Provider\PhpcrMenuProvider($this->get('cmf_menu.factory'), $this->get('doctrine_phpcr'), '/cms/pages');

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        return $instance;
    }

    /**
     * Gets the 'acme.demo.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Acme\DemoBundle\EventListener\ControllerListener A Acme\DemoBundle\EventListener\ControllerListener instance.
     */
    protected function getAcme_Demo_ListenerService()
    {
        return $this->services['acme.demo.listener'] = new \Acme\DemoBundle\EventListener\ControllerListener($this->get('twig.extension.acme.demo'));
    }

    /**
     * Gets the 'acme.phpcr.initializer.site' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Acme\BasicCmsBundle\Initializer\SiteInitializer A Acme\BasicCmsBundle\Initializer\SiteInitializer instance.
     */
    protected function getAcme_Phpcr_Initializer_SiteService()
    {
        return $this->services['acme.phpcr.initializer.site'] = new \Acme\BasicCmsBundle\Initializer\SiteInitializer();
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\FileCacheReader A Doctrine\Common\Annotations\FileCacheReader instance.
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader($this->get('annotations.reader'), (__DIR__.'/annotations'), true);
    }

    /**
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance.
     */
    protected function getAssetic_AssetManagerService()
    {
        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig'), $this->get('monolog.logger.assetic', ContainerInterface::NULL_ON_INVALID_REFERENCE)), new \Assetic\Cache\ConfigCache((__DIR__.'/assetic/config')), true)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($this->get('templating.loader'), '', ($this->targetDirs[2].'/Resources/views'), '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /**
     * Gets the 'assetic.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\Controller\AsseticController A Symfony\Bundle\AsseticBundle\Controller\AsseticController instance.
     */
    protected function getAssetic_ControllerService()
    {
        return $this->services['assetic.controller'] = new \Symfony\Bundle\AsseticBundle\Controller\AsseticController($this->get('assetic.asset_manager'), new \Assetic\Cache\FilesystemCache((__DIR__.'/assetic/assets')), false, $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance.
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /**
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance.
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }

    /**
     * Gets the 'assetic.request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\EventListener\RequestListener A Symfony\Bundle\AsseticBundle\EventListener\RequestListener instance.
     */
    protected function getAssetic_RequestListenerService()
    {
        return $this->services['assetic.request_listener'] = new \Symfony\Bundle\AsseticBundle\EventListener\RequestListener();
    }

    /**
     * Gets the 'assets.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext A Symfony\Component\Asset\Context\RequestStackContext instance.
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }

    /**
     * Gets the 'assets.packages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Packages A Symfony\Component\Asset\Packages instance.
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), $this->get('assets.context')), array());
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance.
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance.
     */
    protected function getCacheWarmerService()
    {
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer(new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($this->get('kernel'), $this->get('templating.filename_parser'), ($this->targetDirs[2].'/Resources')), $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator.default')), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('cmf_routing.router')), 4 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 5 => $this->get('sonata.admin.route.cache_warmup')));
    }

    /**
     * Gets the 'captcha.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Gregwar\CaptchaBundle\Type\CaptchaType A Gregwar\CaptchaBundle\Type\CaptchaType instance.
     */
    protected function getCaptcha_TypeService()
    {
        return $this->services['captcha.type'] = new \Gregwar\CaptchaBundle\Type\CaptchaType($this->get('session'), $this->get('gregwar_captcha.generator'), $this->get('translator'), array('length' => 5, 'width' => 130, 'height' => 50, 'font' => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/DependencyInjection/../Generator/Font/captcha.ttf'), 'keep_value' => false, 'charset' => 'abcdefhjkmnprstuvwxyz23456789', 'as_file' => false, 'as_url' => false, 'reload' => false, 'image_folder' => 'captcha', 'web_path' => ($this->targetDirs[2].'/../web'), 'gc_freq' => 100, 'expiration' => 60, 'quality' => 30, 'invalid_message' => 'Bad code value', 'bypass_code' => NULL, 'whitelist_key' => 'captcha_whitelist_key', 'humanity' => 0, 'distortion' => true, 'max_front_lines' => NULL, 'max_behind_lines' => NULL, 'interpolation' => true, 'text_color' => array(), 'background_color' => array(), 'disabled' => false));
    }

    /**
     * Gets the 'cmf_core.form.type.checkbox_url_label' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\CoreBundle\Form\Type\CheckboxUrlLabelFormType A Symfony\Cmf\Bundle\CoreBundle\Form\Type\CheckboxUrlLabelFormType instance.
     */
    protected function getCmfCore_Form_Type_CheckboxUrlLabelService()
    {
        return $this->services['cmf_core.form.type.checkbox_url_label'] = new \Symfony\Cmf\Bundle\CoreBundle\Form\Type\CheckboxUrlLabelFormType($this->get('cmf_routing.router'));
    }

    /**
     * Gets the 'cmf_core.publish_workflow.access_decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager A Symfony\Component\Security\Core\Authorization\AccessDecisionManager instance.
     */
    protected function getCmfCore_PublishWorkflow_AccessDecisionManagerService()
    {
        return $this->services['cmf_core.publish_workflow.access_decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => new \Symfony\Cmf\Bundle\CoreBundle\PublishWorkflow\Voter\PublishableVoter(), 1 => new \Symfony\Cmf\Bundle\CoreBundle\PublishWorkflow\Voter\PublishTimePeriodVoter(), 2 => new \Symfony\Cmf\Bundle\MenuBundle\PublishWorkflow\Voter\MenuContentVoter($this)), 'unanimous', true);
    }

    /**
     * Gets the 'cmf_core.publish_workflow.checker.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\CoreBundle\PublishWorkflow\PublishWorkflowChecker A Symfony\Cmf\Bundle\CoreBundle\PublishWorkflow\PublishWorkflowChecker instance.
     */
    protected function getCmfCore_PublishWorkflow_Checker_DefaultService()
    {
        return $this->services['cmf_core.publish_workflow.checker.default'] = new \Symfony\Cmf\Bundle\CoreBundle\PublishWorkflow\PublishWorkflowChecker($this, $this->get('cmf_core.publish_workflow.access_decision_manager'), 'ROLE_CAN_VIEW_NON_PUBLISHED');
    }

    /**
     * Gets the 'cmf_core.publish_workflow.request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\CoreBundle\EventListener\PublishWorkflowListener A Symfony\Cmf\Bundle\CoreBundle\EventListener\PublishWorkflowListener instance.
     */
    protected function getCmfCore_PublishWorkflow_RequestListenerService()
    {
        return $this->services['cmf_core.publish_workflow.request_listener'] = new \Symfony\Cmf\Bundle\CoreBundle\EventListener\PublishWorkflowListener($this->get('cmf_core.publish_workflow.checker.default'));
    }

    /**
     * Gets the 'cmf_menu.admin_extension.menu_options' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\MenuBundle\Admin\Extension\MenuOptionsExtension A Symfony\Cmf\Bundle\MenuBundle\Admin\Extension\MenuOptionsExtension instance.
     */
    protected function getCmfMenu_AdminExtension_MenuOptionsService()
    {
        return $this->services['cmf_menu.admin_extension.menu_options'] = new \Symfony\Cmf\Bundle\MenuBundle\Admin\Extension\MenuOptionsExtension('form.group_menu_options', false);
    }

    /**
     * Gets the 'cmf_menu.current_item_voter.uri_prefix' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\MenuBundle\Voter\UriPrefixVoter A Symfony\Cmf\Bundle\MenuBundle\Voter\UriPrefixVoter instance.
     */
    protected function getCmfMenu_CurrentItemVoter_UriPrefixService()
    {
        $this->services['cmf_menu.current_item_voter.uri_prefix'] = $instance = new \Symfony\Cmf\Bundle\MenuBundle\Voter\UriPrefixVoter();

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        return $instance;
    }

    /**
     * Gets the 'cmf_menu.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\MenuBundle\ContentAwareFactory A Symfony\Cmf\Bundle\MenuBundle\ContentAwareFactory instance.
     */
    protected function getCmfMenu_FactoryService()
    {
        $a = $this->get('cmf_routing.router');

        $this->services['cmf_menu.factory'] = $instance = new \Symfony\Cmf\Bundle\MenuBundle\ContentAwareFactory($a, $a, $this->get('debug.event_dispatcher'), $this->get('logger'));

        $instance->setAllowEmptyItems(false);
        $instance->addCurrentItemVoter($this->get('cmf_menu.current_item_voter.uri_prefix'));

        return $instance;
    }

    /**
     * Gets the 'cmf_menu.publish_workflow.create_menu_item_from_node_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\MenuBundle\PublishWorkflow\CreateMenuItemFromNodeListener A Symfony\Cmf\Bundle\MenuBundle\PublishWorkflow\CreateMenuItemFromNodeListener instance.
     */
    protected function getCmfMenu_PublishWorkflow_CreateMenuItemFromNodeListenerService()
    {
        return $this->services['cmf_menu.publish_workflow.create_menu_item_from_node_listener'] = new \Symfony\Cmf\Bundle\MenuBundle\PublishWorkflow\CreateMenuItemFromNodeListener($this->get('cmf_core.publish_workflow.checker.default'));
    }

    /**
     * Gets the 'cmf_routing.dynamic_router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Routing\DynamicRouter A Symfony\Cmf\Bundle\RoutingBundle\Routing\DynamicRouter instance.
     */
    protected function getCmfRouting_DynamicRouterService()
    {
        $this->services['cmf_routing.dynamic_router'] = $instance = new \Symfony\Cmf\Bundle\RoutingBundle\Routing\DynamicRouter($this->get('router.request_context'), $this->get('cmf_routing.nested_matcher'), $this->get('cmf_routing.generator'), NULL, $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('cmf_routing.phpcr_route_provider'));

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->addRouteEnhancer($this->get('cmf_routing.enhancer.route_content'), 100);
        $instance->addRouteEnhancer(new \Symfony\Cmf\Component\Routing\Enhancer\FieldByClassEnhancer('_content', '_controller', array('Acme\\BasicCmsBundle\\Document\\LatestBlogPost' => 'Acme\\BasicCmsBundle\\Controller\\DefaultController::latestPostAction', 'Acme\\BasicCmsBundle\\Document\\ContactPage' => 'Acme\\BasicCmsBundle\\Controller\\DefaultController::contactAction', 'Acme\\BasicCmsBundle\\Document\\PostIndex' => 'Acme\\BasicCmsBundle\\Controller\\DefaultController::postIndexAction', 'Acme\\BasicCmsBundle\\Document\\Page' => 'Acme\\BasicCmsBundle\\Controller\\DefaultController::pageAction', 'Acme\\BasicCmsBundle\\Document\\Post' => 'Acme\\BasicCmsBundle\\Controller\\DefaultController::postAction', 'cmf_routing_auto.redirect' => 'cmf_routing.redirect_controller:redirectAction')), 50);

        return $instance;
    }

    /**
     * Gets the 'cmf_routing.enhancer.route_content' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\Enhancer\RouteContentEnhancer A Symfony\Cmf\Component\Routing\Enhancer\RouteContentEnhancer instance.
     */
    protected function getCmfRouting_Enhancer_RouteContentService()
    {
        return $this->services['cmf_routing.enhancer.route_content'] = new \Symfony\Cmf\Component\Routing\Enhancer\RouteContentEnhancer('_route_object', '_content');
    }

    /**
     * Gets the 'cmf_routing.final_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\NestedMatcher\UrlMatcher A Symfony\Cmf\Component\Routing\NestedMatcher\UrlMatcher instance.
     */
    protected function getCmfRouting_FinalMatcherService()
    {
        return $this->services['cmf_routing.final_matcher'] = new \Symfony\Cmf\Component\Routing\NestedMatcher\UrlMatcher(new \Symfony\Component\Routing\RouteCollection(), new \Symfony\Component\Routing\RequestContext());
    }

    /**
     * Gets the 'cmf_routing.generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\ContentAwareGenerator A Symfony\Cmf\Component\Routing\ContentAwareGenerator instance.
     */
    protected function getCmfRouting_GeneratorService()
    {
        $this->services['cmf_routing.generator'] = $instance = new \Symfony\Cmf\Component\Routing\ContentAwareGenerator($this->get('cmf_routing.phpcr_route_provider'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setContentRepository($this->get('cmf_routing.phpcr_content_repository'));

        return $instance;
    }

    /**
     * Gets the 'cmf_routing.nested_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher A Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher instance.
     */
    protected function getCmfRouting_NestedMatcherService()
    {
        return $this->services['cmf_routing.nested_matcher'] = new \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher($this->get('cmf_routing.phpcr_route_provider'), $this->get('cmf_routing.final_matcher'));
    }

    /**
     * Gets the 'cmf_routing.phpcr_candidates_prefix' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\PrefixCandidates A Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\PrefixCandidates instance.
     */
    protected function getCmfRouting_PhpcrCandidatesPrefixService()
    {
        $this->services['cmf_routing.phpcr_candidates_prefix'] = $instance = new \Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\PrefixCandidates(array(0 => '/cms/routes', 1 => '/cms/routes'), array(), $this->get('doctrine_phpcr'), 20);

        $instance->setManagerName(NULL);

        return $instance;
    }

    /**
     * Gets the 'cmf_routing.phpcr_content_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\ContentRepository A Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\ContentRepository instance.
     */
    protected function getCmfRouting_PhpcrContentRepositoryService()
    {
        $this->services['cmf_routing.phpcr_content_repository'] = $instance = new \Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\ContentRepository($this->get('doctrine_phpcr'));

        $instance->setManagerName(NULL);

        return $instance;
    }

    /**
     * Gets the 'cmf_routing.phpcr_route_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\RouteProvider A Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\RouteProvider instance.
     */
    protected function getCmfRouting_PhpcrRouteProviderService()
    {
        $this->services['cmf_routing.phpcr_route_provider'] = $instance = new \Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\RouteProvider($this->get('doctrine_phpcr'), $this->get('cmf_routing.phpcr_candidates_prefix'), NULL, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setManagerName(NULL);
        $instance->setRouteCollectionLimit(0);

        return $instance;
    }

    /**
     * Gets the 'cmf_routing.phpcrodm_route_idprefix_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\IdPrefixListener A Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\IdPrefixListener instance.
     */
    protected function getCmfRouting_PhpcrodmRouteIdprefixListenerService()
    {
        return $this->services['cmf_routing.phpcrodm_route_idprefix_listener'] = new \Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\IdPrefixListener($this->get('cmf_routing.phpcr_candidates_prefix'));
    }

    /**
     * Gets the 'cmf_routing.redirect_controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Controller\RedirectController A Symfony\Cmf\Bundle\RoutingBundle\Controller\RedirectController instance.
     */
    protected function getCmfRouting_RedirectControllerService()
    {
        return $this->services['cmf_routing.redirect_controller'] = new \Symfony\Cmf\Bundle\RoutingBundle\Controller\RedirectController($this->get('cmf_routing.router'));
    }

    /**
     * Gets the 'cmf_routing.route_type_form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Form\Type\RouteTypeType A Symfony\Cmf\Bundle\RoutingBundle\Form\Type\RouteTypeType instance.
     */
    protected function getCmfRouting_RouteTypeFormTypeService()
    {
        return $this->services['cmf_routing.route_type_form_type'] = new \Symfony\Cmf\Bundle\RoutingBundle\Form\Type\RouteTypeType();
    }

    /**
     * Gets the 'cmf_routing.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\ChainRouter A Symfony\Cmf\Component\Routing\ChainRouter instance.
     */
    protected function getCmfRouting_RouterService()
    {
        $a = $this->get('router.request_context');

        $this->services['cmf_routing.router'] = $instance = new \Symfony\Cmf\Component\Routing\ChainRouter($this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setContext($a);
        $instance->add($this->get('cmf_routing.dynamic_router'), '20');
        $instance->add(new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, (__DIR__.'/assetic/routing.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'yaml'), $a, $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE)), '100');

        return $instance;
    }

    /**
     * Gets the 'cmf_routing.validator.route_defaults' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Validator\Constraints\RouteDefaultsValidator A Symfony\Cmf\Bundle\RoutingBundle\Validator\Constraints\RouteDefaultsValidator instance.
     */
    protected function getCmfRouting_Validator_RouteDefaultsService()
    {
        return $this->services['cmf_routing.validator.route_defaults'] = new \Symfony\Cmf\Bundle\RoutingBundle\Validator\Constraints\RouteDefaultsValidator($this->get('controller_resolver'), $this->get('templating'));
    }

    /**
     * Gets the 'cmf_routing_auto.adapter.phpcr_odm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingAutoBundle\Adapter\PhpcrOdmAdapter A Symfony\Cmf\Bundle\RoutingAutoBundle\Adapter\PhpcrOdmAdapter instance.
     */
    protected function getCmfRoutingAuto_Adapter_PhpcrOdmService()
    {
        return $this->services['cmf_routing_auto.adapter.phpcr_odm'] = new \Symfony\Cmf\Bundle\RoutingAutoBundle\Adapter\PhpcrOdmAdapter($this->get('doctrine_phpcr.odm.default_document_manager'), '/cms/routes');
    }

    /**
     * Gets the 'cmf_routing_auto.auto_route_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\RoutingAuto\AutoRouteManager A Symfony\Cmf\Component\RoutingAuto\AutoRouteManager instance.
     */
    protected function getCmfRoutingAuto_AutoRouteManagerService()
    {
        return $this->services['cmf_routing_auto.auto_route_manager'] = new \Symfony\Cmf\Component\RoutingAuto\AutoRouteManager($this->get('cmf_routing_auto.adapter.phpcr_odm'), $this->get('cmf_routing_auto.uri_generator'), $this->get('cmf_routing_auto.defunct_route_handler.delegating'));
    }

    /**
     * Gets the 'cmf_routing_auto.conflict_resolver.auto_increment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\RoutingAuto\ConflictResolver\AutoIncrementConflictResolver A Symfony\Cmf\Component\RoutingAuto\ConflictResolver\AutoIncrementConflictResolver instance.
     */
    protected function getCmfRoutingAuto_ConflictResolver_AutoIncrementService()
    {
        return $this->services['cmf_routing_auto.conflict_resolver.auto_increment'] = new \Symfony\Cmf\Component\RoutingAuto\ConflictResolver\AutoIncrementConflictResolver($this->get('cmf_routing_auto.adapter.phpcr_odm'));
    }

    /**
     * Gets the 'cmf_routing_auto.conflict_resolver.throw_exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\RoutingAuto\ConflictResolver\ThrowExceptionConflictResolver A Symfony\Cmf\Component\RoutingAuto\ConflictResolver\ThrowExceptionConflictResolver instance.
     */
    protected function getCmfRoutingAuto_ConflictResolver_ThrowExceptionService()
    {
        return $this->services['cmf_routing_auto.conflict_resolver.throw_exception'] = new \Symfony\Cmf\Component\RoutingAuto\ConflictResolver\ThrowExceptionConflictResolver();
    }

    /**
     * Gets the 'cmf_routing_auto.defunct_route_handler.delegating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\RoutingAuto\DefunctRouteHandler\DelegatingDefunctRouteHandler A Symfony\Cmf\Component\RoutingAuto\DefunctRouteHandler\DelegatingDefunctRouteHandler instance.
     */
    protected function getCmfRoutingAuto_DefunctRouteHandler_DelegatingService()
    {
        return $this->services['cmf_routing_auto.defunct_route_handler.delegating'] = new \Symfony\Cmf\Component\RoutingAuto\DefunctRouteHandler\DelegatingDefunctRouteHandler($this->get('cmf_routing_auto.metadata.factory'), $this->get('cmf_routing_auto.adapter.phpcr_odm'), $this->get('cmf_routing_auto.service_registry'));
    }

    /**
     * Gets the 'cmf_routing_auto.defunct_route_handler.leave_redirect' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\RoutingAuto\DefunctRouteHandler\LeaveRedirectDefunctRouteHandler A Symfony\Cmf\Component\RoutingAuto\DefunctRouteHandler\LeaveRedirectDefunctRouteHandler instance.
     */
    protected function getCmfRoutingAuto_DefunctRouteHandler_LeaveRedirectService()
    {
        return $this->services['cmf_routing_auto.defunct_route_handler.leave_redirect'] = new \Symfony\Cmf\Component\RoutingAuto\DefunctRouteHandler\LeaveRedirectDefunctRouteHandler($this->get('cmf_routing_auto.adapter.phpcr_odm'));
    }

    /**
     * Gets the 'cmf_routing_auto.defunct_route_handler.remove' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\RoutingAuto\DefunctRouteHandler\RemoveDefunctRouteHandler A Symfony\Cmf\Component\RoutingAuto\DefunctRouteHandler\RemoveDefunctRouteHandler instance.
     */
    protected function getCmfRoutingAuto_DefunctRouteHandler_RemoveService()
    {
        return $this->services['cmf_routing_auto.defunct_route_handler.remove'] = new \Symfony\Cmf\Component\RoutingAuto\DefunctRouteHandler\RemoveDefunctRouteHandler($this->get('cmf_routing_auto.adapter.phpcr_odm'));
    }

    /**
     * Gets the 'cmf_routing_auto.initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Initializer\GenericInitializer A Doctrine\Bundle\PHPCRBundle\Initializer\GenericInitializer instance.
     */
    protected function getCmfRoutingAuto_InitializerService()
    {
        return $this->services['cmf_routing_auto.initializer'] = new \Doctrine\Bundle\PHPCRBundle\Initializer\GenericInitializer('CmfRoutingAutoBundle', array(0 => '/cms/routes'));
    }

    /**
     * Gets the 'cmf_routing_auto.metadata.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\RoutingAuto\Mapping\MetadataFactory A Symfony\Cmf\Component\RoutingAuto\Mapping\MetadataFactory instance.
     */
    protected function getCmfRoutingAuto_Metadata_FactoryService()
    {
        return $this->services['cmf_routing_auto.metadata.factory'] = $this->get('cmf_routing_auto.metadata.factory.builder')->getMetadataFactory();
    }

    /**
     * Gets the 'cmf_routing_auto.metadata.factory.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\RoutingAuto\Mapping\MetadataFactoryBuilder A Symfony\Cmf\Component\RoutingAuto\Mapping\MetadataFactoryBuilder instance.
     */
    protected function getCmfRoutingAuto_Metadata_Factory_BuilderService()
    {
        return $this->services['cmf_routing_auto.metadata.factory.builder'] = new \Symfony\Cmf\Component\RoutingAuto\Mapping\MetadataFactoryBuilder($this->get('cmf_routing_auto.metadata.loader.delegating'), array(0 => array('path' => '../config/routing_auto.yml', 'type' => NULL)));
    }

    /**
     * Gets the 'cmf_routing_auto.metadata.loader.delegating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\Loader\DelegatingLoader A Symfony\Component\Config\Loader\DelegatingLoader instance.
     */
    protected function getCmfRoutingAuto_Metadata_Loader_DelegatingService()
    {
        return $this->services['cmf_routing_auto.metadata.loader.delegating'] = new \Symfony\Component\Config\Loader\DelegatingLoader($this->get('cmf_routing_auto.metadata.loader.resolver'));
    }

    /**
     * Gets the 'cmf_routing_auto.metadata.loader.resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\Loader\LoaderResolver A Symfony\Component\Config\Loader\LoaderResolver instance.
     */
    protected function getCmfRoutingAuto_Metadata_Loader_ResolverService()
    {
        return $this->services['cmf_routing_auto.metadata.loader.resolver'] = new \Symfony\Component\Config\Loader\LoaderResolver(array(0 => $this->get('cmf_routing_auto.metadata.loader.yaml'), 1 => $this->get('cmf_routing_auto.metadata.loader.xml')));
    }

    /**
     * Gets the 'cmf_routing_auto.metadata.loader.xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\RoutingAuto\Mapping\Loader\XmlFileLoader A Symfony\Cmf\Component\RoutingAuto\Mapping\Loader\XmlFileLoader instance.
     */
    protected function getCmfRoutingAuto_Metadata_Loader_XmlService()
    {
        return $this->services['cmf_routing_auto.metadata.loader.xml'] = new \Symfony\Cmf\Component\RoutingAuto\Mapping\Loader\XmlFileLoader($this->get('file_locator'));
    }

    /**
     * Gets the 'cmf_routing_auto.metadata.loader.yaml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\RoutingAuto\Mapping\Loader\YmlFileLoader A Symfony\Cmf\Component\RoutingAuto\Mapping\Loader\YmlFileLoader instance.
     */
    protected function getCmfRoutingAuto_Metadata_Loader_YamlService()
    {
        return $this->services['cmf_routing_auto.metadata.loader.yaml'] = new \Symfony\Cmf\Component\RoutingAuto\Mapping\Loader\YmlFileLoader($this->get('file_locator'));
    }

    /**
     * Gets the 'cmf_routing_auto.phpcrodm_auto_route_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingAutoBundle\Doctrine\Phpcr\AutoRouteListener A Symfony\Cmf\Bundle\RoutingAutoBundle\Doctrine\Phpcr\AutoRouteListener instance.
     */
    protected function getCmfRoutingAuto_PhpcrodmAutoRouteListenerService()
    {
        return $this->services['cmf_routing_auto.phpcrodm_auto_route_listener'] = new \Symfony\Cmf\Bundle\RoutingAutoBundle\Doctrine\Phpcr\AutoRouteListener($this);
    }

    /**
     * Gets the 'cmf_routing_auto.redirect_controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingAutoBundle\Controller\RedirectController A Symfony\Cmf\Bundle\RoutingAutoBundle\Controller\RedirectController instance.
     */
    protected function getCmfRoutingAuto_RedirectControllerService()
    {
        return $this->services['cmf_routing_auto.redirect_controller'] = new \Symfony\Cmf\Bundle\RoutingAutoBundle\Controller\RedirectController($this->get('cmf_routing.router'));
    }

    /**
     * Gets the 'cmf_routing_auto.service_registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\RoutingAuto\ServiceRegistry A Symfony\Cmf\Component\RoutingAuto\ServiceRegistry instance.
     */
    protected function getCmfRoutingAuto_ServiceRegistryService()
    {
        $this->services['cmf_routing_auto.service_registry'] = $instance = new \Symfony\Cmf\Component\RoutingAuto\ServiceRegistry();

        $instance->registerTokenProvider('content_method', $this->get('cmf_routing_auto.token_provider.content_method'));
        $instance->registerTokenProvider('content_datetime', $this->get('cmf_routing_auto.token_provider.content_datetime'));
        $instance->registerTokenProvider('content_locale', $this->get('cmf_routing_auto.token_provider.content_locale'));
        $instance->registerTokenProvider('container', $this->get('cmf_routing_auto.token_provider.container'));
        $instance->registerDefunctRouteHandler('remove', $this->get('cmf_routing_auto.defunct_route_handler.remove'));
        $instance->registerDefunctRouteHandler('leave_redirect', $this->get('cmf_routing_auto.defunct_route_handler.leave_redirect'));
        $instance->registerConflictResolver('auto_increment', $this->get('cmf_routing_auto.conflict_resolver.auto_increment'));
        $instance->registerConflictResolver('throw_exception', $this->get('cmf_routing_auto.conflict_resolver.throw_exception'));

        return $instance;
    }

    /**
     * Gets the 'cmf_routing_auto.slugifier' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\CoreBundle\Slugifier\CallbackSlugifier A Symfony\Cmf\Bundle\CoreBundle\Slugifier\CallbackSlugifier instance.
     */
    protected function getCmfRoutingAuto_SlugifierService()
    {
        return $this->services['cmf_routing_auto.slugifier'] = new \Symfony\Cmf\Bundle\CoreBundle\Slugifier\CallbackSlugifier('Ferrandini\\Urlizer::urlize');
    }

    /**
     * Gets the 'cmf_routing_auto.token_provider.container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\RoutingAuto\TokenProvider\SymfonyContainerParameterProvider A Symfony\Cmf\Component\RoutingAuto\TokenProvider\SymfonyContainerParameterProvider instance.
     */
    protected function getCmfRoutingAuto_TokenProvider_ContainerService()
    {
        return $this->services['cmf_routing_auto.token_provider.container'] = new \Symfony\Cmf\Component\RoutingAuto\TokenProvider\SymfonyContainerParameterProvider($this);
    }

    /**
     * Gets the 'cmf_routing_auto.token_provider.content_datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\RoutingAuto\TokenProvider\ContentDateTimeProvider A Symfony\Cmf\Component\RoutingAuto\TokenProvider\ContentDateTimeProvider instance.
     */
    protected function getCmfRoutingAuto_TokenProvider_ContentDatetimeService()
    {
        return $this->services['cmf_routing_auto.token_provider.content_datetime'] = new \Symfony\Cmf\Component\RoutingAuto\TokenProvider\ContentDateTimeProvider($this->get('cmf_routing_auto.slugifier'));
    }

    /**
     * Gets the 'cmf_routing_auto.token_provider.content_locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\RoutingAuto\TokenProvider\ContentLocaleProvider A Symfony\Cmf\Component\RoutingAuto\TokenProvider\ContentLocaleProvider instance.
     */
    protected function getCmfRoutingAuto_TokenProvider_ContentLocaleService()
    {
        return $this->services['cmf_routing_auto.token_provider.content_locale'] = new \Symfony\Cmf\Component\RoutingAuto\TokenProvider\ContentLocaleProvider();
    }

    /**
     * Gets the 'cmf_routing_auto.token_provider.content_method' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\RoutingAuto\TokenProvider\ContentMethodProvider A Symfony\Cmf\Component\RoutingAuto\TokenProvider\ContentMethodProvider instance.
     */
    protected function getCmfRoutingAuto_TokenProvider_ContentMethodService()
    {
        return $this->services['cmf_routing_auto.token_provider.content_method'] = new \Symfony\Cmf\Component\RoutingAuto\TokenProvider\ContentMethodProvider($this->get('cmf_routing_auto.slugifier'));
    }

    /**
     * Gets the 'cmf_routing_auto.uri_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\RoutingAuto\UriGenerator A Symfony\Cmf\Component\RoutingAuto\UriGenerator instance.
     */
    protected function getCmfRoutingAuto_UriGeneratorService()
    {
        return $this->services['cmf_routing_auto.uri_generator'] = new \Symfony\Cmf\Component\RoutingAuto\UriGenerator($this->get('cmf_routing_auto.metadata.factory'), $this->get('cmf_routing_auto.adapter.phpcr_odm'), $this->get('cmf_routing_auto.service_registry'));
    }

    /**
     * Gets the 'data_collector.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector A Symfony\Component\Form\Extension\DataCollector\FormDataCollector instance.
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector($this->get('data_collector.form.extractor'));
    }

    /**
     * Gets the 'data_collector.form.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor A Symfony\Component\Form\Extension\DataCollector\FormDataExtractor instance.
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector A Symfony\Component\HttpKernel\DataCollector\RequestDataCollector instance.
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector instance.
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the 'data_collector.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\DataCollector\TranslationDataCollector A Symfony\Component\Translation\DataCollector\TranslationDataCollector instance.
     */
    protected function getDataCollector_TranslationService()
    {
        return $this->services['data_collector.translation'] = new \Symfony\Component\Translation\DataCollector\TranslationDataCollector($this->get('translator'));
    }

    /**
     * Gets the 'debug.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver A Symfony\Component\HttpKernel\Controller\TraceableControllerResolver instance.
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver($this->get('controller_resolver'), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance.
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener('', $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL, NULL, true, NULL);
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher instance.
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'assetic.request_listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'sonata.block.cache.handler.default', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('cmf_menu.create_menu_item_from_node', array(0 => 'cmf_menu.publish_workflow.create_menu_item_from_node_listener', 1 => 'onCreateMenuItemFromNode'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'acme.demo.listener', 1 => 'onKernelController'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('cmf_core.publish_workflow.request_listener', 'Symfony\\Cmf\\Bundle\\CoreBundle\\EventListener\\PublishWorkflowListener');
        $instance->addSubscriberService('fos_http_cache.event_listener.cache_control', 'FOS\\HttpCacheBundle\\EventListener\\CacheControlSubscriber');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');

        return $instance;
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance.
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance.
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection', 'dantleech2' => 'doctrine.dbal.dantleech2_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance.
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the 'doctrine.dbal.dantleech2_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \stdClass A stdClass instance.
     */
    protected function getDoctrine_Dbal_Dantleech2ConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger($this->get('doctrine.dbal.logger'));
        $a->addLogger($this->get('doctrine.dbal.logger.profiling.dantleech2'));

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        return $this->services['doctrine.dbal.dantleech2_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => 'localhost', 'dbname' => 'dantleech2', 'user' => 'root', 'password' => NULL, 'port' => NULL, 'driverOptions' => array()), $b, new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this), array());
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \stdClass A stdClass instance.
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger($this->get('doctrine.dbal.logger'));
        $a->addLogger($this->get('doctrine.dbal.logger.profiling.default'));

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        $c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $c->addEventListener(array(0 => 'postGenerateSchema'), 'doctrine_phpcr.jackalope_doctrine_dbal.schema_listener');

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'dtlweb', 'user' => 'root', 'password' => NULL, 'charset' => 'UTF8', 'driverOptions' => array()), $b, $c, array());
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance.
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        $a = new \Doctrine\Common\Cache\ArrayCache();
        $a->setNamespace('sf2orm_default_1bed85aa084034055c26134c6d1fb0106d9560f013a901a0e3e9dd0f5cb838d9');

        $b = new \Doctrine\Common\Cache\ArrayCache();
        $b->setNamespace('sf2orm_default_1bed85aa084034055c26134c6d1fb0106d9560f013a901a0e3e9dd0f5cb838d9');

        $c = new \Doctrine\Common\Cache\ArrayCache();
        $c->setNamespace('sf2orm_default_1bed85aa084034055c26134c6d1fb0106d9560f013a901a0e3e9dd0f5cb838d9');

        $d = new \Doctrine\ORM\Configuration();
        $d->setEntityNamespaces(array());
        $d->setMetadataCacheImpl($a);
        $d->setQueryCacheImpl($b);
        $d->setResultCacheImpl($c);
        $d->setMetadataDriverImpl(new \Doctrine\ORM\Mapping\Driver\DriverChain());
        $d->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $d->setProxyNamespace('Proxies');
        $d->setAutoGenerateProxyClasses(true);
        $d->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $d->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $d->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $d);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance.
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance.
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance.
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine_phpcr' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\ManagerRegistry A Doctrine\Bundle\PHPCRBundle\ManagerRegistry instance.
     */
    protected function getDoctrinePhpcrService()
    {
        $this->services['doctrine_phpcr'] = $instance = new \Doctrine\Bundle\PHPCRBundle\ManagerRegistry('PHPCR', array('default' => 'doctrine_phpcr.default_session'), array('default' => 'doctrine_phpcr.odm.default_document_manager'), 'default', 'default', 'Doctrine\\Common\\Proxy\\Proxy');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'doctrine_phpcr.console_dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PHPCR\Util\Console\Helper\PhpcrConsoleDumperHelper A PHPCR\Util\Console\Helper\PhpcrConsoleDumperHelper instance.
     */
    protected function getDoctrinePhpcr_ConsoleDumperService()
    {
        return $this->services['doctrine_phpcr.console_dumper'] = new \PHPCR\Util\Console\Helper\PhpcrConsoleDumperHelper();
    }

    /**
     * Gets the 'doctrine_phpcr.default_session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Jackalope\Session A Jackalope\Session instance.
     */
    protected function getDoctrinePhpcr_DefaultSessionService()
    {
        return $this->services['doctrine_phpcr.default_session'] = $this->get('doctrine_phpcr.jackalope.repository.default')->login(new \PHPCR\SimpleCredentials('admin', 'admin'), 'default');
    }

    /**
     * Gets the 'doctrine_phpcr.initializer_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Initializer\InitializerManager A Doctrine\Bundle\PHPCRBundle\Initializer\InitializerManager instance.
     */
    protected function getDoctrinePhpcr_InitializerManagerService()
    {
        $this->services['doctrine_phpcr.initializer_manager'] = $instance = new \Doctrine\Bundle\PHPCRBundle\Initializer\InitializerManager($this->get('doctrine_phpcr'));

        $instance->addInitializer($this->get('acme.phpcr.initializer.site'), 0);
        $instance->addInitializer($this->get('cmf_routing_auto.initializer'), 0);

        return $instance;
    }

    /**
     * Gets the 'doctrine_phpcr.jackalope.repository.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Jackalope\Repository A Jackalope\Repository instance.
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_DefaultService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.default'] = $this->get('doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal')->getRepository(array('jackalope.doctrine_dbal_connection' => $this->get('doctrine.dbal.default_connection'), 'jackalope.check_login_on_server' => true));
    }

    /**
     * Gets the 'doctrine_phpcr.jackalope.repository.factory.doctrinedbal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Jackalope\Repository A Jackalope\Repository instance.
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_Factory_DoctrinedbalService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.factory.doctrinedbal'] = $this->get('doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal')->getRepository(array());
    }

    /**
     * Gets the 'doctrine_phpcr.jackalope.repository.factory.jackrabbit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Jackalope\Repository A Jackalope\Repository instance.
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_Factory_JackrabbitService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.factory.jackrabbit'] = $this->get('doctrine_phpcr.jackalope.repository.factory.service.jackrabbit')->getRepository(array());
    }

    /**
     * Gets the 'doctrine_phpcr.jackalope.repository.factory.prismic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Jackalope\Repository A Jackalope\Repository instance.
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_Factory_PrismicService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.factory.prismic'] = $this->get('doctrine_phpcr.jackalope.repository.factory.service.prismic')->getRepository(array());
    }

    /**
     * Gets the 'doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Jackalope\RepositoryFactoryDoctrineDBAL A Jackalope\RepositoryFactoryDoctrineDBAL instance.
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_Factory_Service_DoctrinedbalService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal'] = new \Jackalope\RepositoryFactoryDoctrineDBAL();
    }

    /**
     * Gets the 'doctrine_phpcr.jackalope.repository.factory.service.jackrabbit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Jackalope\RepositoryFactoryJackrabbit A Jackalope\RepositoryFactoryJackrabbit instance.
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_Factory_Service_JackrabbitService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.factory.service.jackrabbit'] = new \Jackalope\RepositoryFactoryJackrabbit();
    }

    /**
     * Gets the 'doctrine_phpcr.jackalope.repository.factory.service.prismic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Jackalope\RepositoryFactoryPrismic A Jackalope\RepositoryFactoryPrismic instance.
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_Factory_Service_PrismicService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.factory.service.prismic'] = new \Jackalope\RepositoryFactoryPrismic();
    }

    /**
     * Gets the 'doctrine_phpcr.jackalope_doctrine_dbal.schema_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\EventListener\JackalopeDoctrineDbalSchemaListener A Doctrine\Bundle\PHPCRBundle\EventListener\JackalopeDoctrineDbalSchemaListener instance.
     */
    protected function getDoctrinePhpcr_JackalopeDoctrineDbal_SchemaListenerService()
    {
        return $this->services['doctrine_phpcr.jackalope_doctrine_dbal.schema_listener'] = new \Doctrine\Bundle\PHPCRBundle\EventListener\JackalopeDoctrineDbalSchemaListener(new \Jackalope\Transport\DoctrineDBAL\RepositorySchema());
    }

    /**
     * Gets the 'doctrine_phpcr.odm.default.translation.strategy.attribute' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ODM\PHPCR\Translation\TranslationStrategy\AttributeTranslationStrategy A Doctrine\ODM\PHPCR\Translation\TranslationStrategy\AttributeTranslationStrategy instance.
     */
    protected function getDoctrinePhpcr_Odm_Default_Translation_Strategy_AttributeService()
    {
        $this->services['doctrine_phpcr.odm.default.translation.strategy.attribute'] = $instance = new \Doctrine\ODM\PHPCR\Translation\TranslationStrategy\AttributeTranslationStrategy($this->get('doctrine_phpcr.odm.default_document_manager'));

        $instance->setPrefix('phpcr_locale');

        return $instance;
    }

    /**
     * Gets the 'doctrine_phpcr.odm.default.translation.strategy.child' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ODM\PHPCR\Translation\TranslationStrategy\ChildTranslationStrategy A Doctrine\ODM\PHPCR\Translation\TranslationStrategy\ChildTranslationStrategy instance.
     */
    protected function getDoctrinePhpcr_Odm_Default_Translation_Strategy_ChildService()
    {
        return $this->services['doctrine_phpcr.odm.default.translation.strategy.child'] = new \Doctrine\ODM\PHPCR\Translation\TranslationStrategy\ChildTranslationStrategy($this->get('doctrine_phpcr.odm.default_document_manager'));
    }

    /**
     * Gets the 'doctrine_phpcr.odm.default_document_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ODM\PHPCR\DocumentManager A Doctrine\ODM\PHPCR\DocumentManager instance.
     */
    protected function getDoctrinePhpcr_Odm_DefaultDocumentManagerService()
    {
        $a = $this->get('annotation_reader');

        $b = new \Doctrine\Common\Cache\ArrayCache();
        $b->setNamespace('sf2phpcr_default_1bed85aa084034055c26134c6d1fb0106d9560f013a901a0e3e9dd0f5cb838d9');

        $c = new \Doctrine\ODM\PHPCR\Mapping\Driver\AnnotationDriver($a, array(0 => ($this->targetDirs[3].'/src/Acme/BasicCmsBundle/Document'), 1 => ($this->targetDirs[3].'/vendor/dantleech/phpcr-taxonomy-bundle/DTL/PhpcrTaxonomyBundle/Document'), 2 => ($this->targetDirs[3].'/vendor/doctrine/phpcr-odm/lib/Doctrine/ODM/PHPCR/Document')));

        $d = new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Resources/config/doctrine-model') => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Model', ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Resources/config/doctrine-phpcr') => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Doctrine\\Phpcr'), '.phpcr.xml');

        $e = new \Doctrine\ODM\PHPCR\Mapping\Driver\XmlDriver($d);

        $f = new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'/vendor/symfony-cmf/menu-bundle/Resources/config/doctrine-model') => 'Symfony\\Cmf\\Bundle\\MenuBundle\\Model', ($this->targetDirs[3].'/vendor/symfony-cmf/menu-bundle/Resources/config/doctrine-phpcr') => 'Symfony\\Cmf\\Bundle\\MenuBundle\\Doctrine\\Phpcr'), '.phpcr.xml');

        $g = new \Doctrine\ODM\PHPCR\Mapping\Driver\XmlDriver($f);

        $h = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $h->addDriver($c, 'Acme\\BasicCmsBundle\\Document');
        $h->addDriver($c, 'DTL\\PhpcrTaxonomyBundle\\Document');
        $h->addDriver($c, 'Doctrine\\ODM\\PHPCR\\Document');
        $h->addDriver(new \Doctrine\ODM\PHPCR\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\DefaultFileLocator(array(0 => ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Resources/config/doctrine-base')), '.phpcr.xml')), 'Symfony\\Component\\Routing');
        $h->addDriver($e, 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Model');
        $h->addDriver($e, 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Doctrine\\Phpcr');
        $h->addDriver(new \Doctrine\ODM\PHPCR\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'/vendor/symfony-cmf/routing-auto-bundle/Resources/config/doctrine-model') => 'Symfony\\Cmf\\Bundle\\RoutingAutoBundle\\Model'), '.phpcr.xml')), 'Symfony\\Cmf\\Bundle\\RoutingAutoBundle\\Model');
        $h->addDriver($g, 'Symfony\\Cmf\\Bundle\\MenuBundle\\Model');
        $h->addDriver($g, 'Symfony\\Cmf\\Bundle\\MenuBundle\\Doctrine\\Phpcr');

        $i = new \Doctrine\ODM\PHPCR\Configuration();
        $i->setDocumentNamespaces(array('AcmeBasicCmsBundle' => 'Acme\\BasicCmsBundle\\Document', 'DTLPhpcrTaxonomyBundle' => 'DTL\\PhpcrTaxonomyBundle\\Document', '__PHPCRODM__' => 'Doctrine\\ODM\\PHPCR\\Document'));
        $i->setMetadataCacheImpl($b);
        $i->setMetadataDriverImpl($h, false);
        $i->setProxyDir((__DIR__.'/doctrine/PHPCRProxies'));
        $i->setProxyNamespace('PHPCRProxies');
        $i->setAutoGenerateProxyClasses(true);
        $i->setClassMetadataFactoryName('Doctrine\\ODM\\PHPCR\\Mapping\\ClassMetadataFactory');
        $i->setDefaultRepositoryClassName('Doctrine\\ODM\\PHPCR\\DocumentRepository');
        $i->addDocumentNamespace('CmfRoutingBundle', 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Doctrine\\Phpcr');
        $i->addDocumentNamespace('CmfRoutingAutoBundle', 'Symfony\\Cmf\\Bundle\\RoutingAutoBundle\\Model');
        $i->addDocumentNamespace('CmfMenuBundle', 'Symfony\\Cmf\\Bundle\\MenuBundle\\Doctrine\\Phpcr');

        $j = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $j->addEventSubscriber(new \Symfony\Cmf\Bundle\CoreBundle\Doctrine\Phpcr\NonTranslatableMetadataListener());
        $j->addEventSubscriber($this->get('dtl_phpcr_taxonomy.phpcrodm.subscriber'));
        $j->addEventListener(array(0 => 'postLoad', 1 => 'postPersist', 2 => 'postMove'), $this->get('cmf_routing.phpcrodm_route_idprefix_listener'));
        $j->addEventListener(array(0 => 'onFlush', 1 => 'endFlush'), $this->get('cmf_routing_auto.phpcrodm_auto_route_listener'));

        $this->services['doctrine_phpcr.odm.default_document_manager'] = $instance = new \Doctrine\ODM\PHPCR\DocumentManager($this->get('doctrine_phpcr.default_session'), $i, $j);

        $instance->setTranslationStrategy('child', $this->get('doctrine_phpcr.odm.default.translation.strategy.child'));
        $instance->setTranslationStrategy('attribute', $this->get('doctrine_phpcr.odm.default.translation.strategy.attribute'));

        return $instance;
    }

    /**
     * Gets the 'doctrine_phpcr.odm.form.type.path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Form\Type\PathType A Doctrine\Bundle\PHPCRBundle\Form\Type\PathType instance.
     */
    protected function getDoctrinePhpcr_Odm_Form_Type_PathService()
    {
        return $this->services['doctrine_phpcr.odm.form.type.path'] = new \Doctrine\Bundle\PHPCRBundle\Form\Type\PathType($this->get('doctrine_phpcr'));
    }

    /**
     * Gets the 'doctrine_phpcr.odm.translation.strategy.attribute' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ODM\PHPCR\Translation\TranslationStrategy\AttributeTranslationStrategy A Doctrine\ODM\PHPCR\Translation\TranslationStrategy\AttributeTranslationStrategy instance.
     */
    protected function getDoctrinePhpcr_Odm_Translation_Strategy_AttributeService()
    {
        $this->services['doctrine_phpcr.odm.translation.strategy.attribute'] = $instance = new \Doctrine\ODM\PHPCR\Translation\TranslationStrategy\AttributeTranslationStrategy('');

        $instance->setPrefix('phpcr_locale');

        return $instance;
    }

    /**
     * Gets the 'doctrine_phpcr.odm.translation.strategy.child' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ODM\PHPCR\Translation\TranslationStrategy\ChildTranslationStrategy A Doctrine\ODM\PHPCR\Translation\TranslationStrategy\ChildTranslationStrategy instance.
     */
    protected function getDoctrinePhpcr_Odm_Translation_Strategy_ChildService()
    {
        return $this->services['doctrine_phpcr.odm.translation.strategy.child'] = new \Doctrine\ODM\PHPCR\Translation\TranslationStrategy\ChildTranslationStrategy('');
    }

    /**
     * Gets the 'doctrine_phpcr.odm.validator.valid_phpcr_odm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Validator\Constraints\ValidPhpcrOdmValidator A Doctrine\Bundle\PHPCRBundle\Validator\Constraints\ValidPhpcrOdmValidator instance.
     */
    protected function getDoctrinePhpcr_Odm_Validator_ValidPhpcrOdmService()
    {
        return $this->services['doctrine_phpcr.odm.validator.valid_phpcr_odm'] = new \Doctrine\Bundle\PHPCRBundle\Validator\Constraints\ValidPhpcrOdmValidator($this->get('doctrine_phpcr'));
    }

    /**
     * Gets the 'dtl.expression_captcha.expression_language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\ExpressionLanguage\ExpressionLanguage A Symfony\Component\ExpressionLanguage\ExpressionLanguage instance.
     */
    protected function getDtl_ExpressionCaptcha_ExpressionLanguageService()
    {
        return $this->services['dtl.expression_captcha.expression_language'] = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();
    }

    /**
     * Gets the 'dtl.expression_captcha.generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \DTL\ExpressionCaptchaFormTypeBundle\Generator\ExpressionGenerator A DTL\ExpressionCaptchaFormTypeBundle\Generator\ExpressionGenerator instance.
     */
    protected function getDtl_ExpressionCaptcha_GeneratorService()
    {
        return $this->services['dtl.expression_captcha.generator'] = new \DTL\ExpressionCaptchaFormTypeBundle\Generator\ExpressionGenerator($this->get('dtl.expression_captcha.expression_language'));
    }

    /**
     * Gets the 'dtl_phpcr_taxonomy.metadata.driver.annotation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \DTL\PhpcrTaxonomyBundle\Metadata\Driver\AnnotationDriver A DTL\PhpcrTaxonomyBundle\Metadata\Driver\AnnotationDriver instance.
     */
    protected function getDtlPhpcrTaxonomy_Metadata_Driver_AnnotationService()
    {
        return $this->services['dtl_phpcr_taxonomy.metadata.driver.annotation'] = new \DTL\PhpcrTaxonomyBundle\Metadata\Driver\AnnotationDriver($this->get('annotations.reader'), array());
    }

    /**
     * Gets the 'dtl_phpcr_taxonomy.metadata.driver.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Metadata\Driver\DriverChain A Metadata\Driver\DriverChain instance.
     */
    protected function getDtlPhpcrTaxonomy_Metadata_Driver_ChainService()
    {
        return $this->services['dtl_phpcr_taxonomy.metadata.driver.chain'] = new \Metadata\Driver\DriverChain(array(0 => $this->get('dtl_phpcr_taxonomy.metadata.driver.annotation')));
    }

    /**
     * Gets the 'dtl_phpcr_taxonomy.metadata.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Metadata\MetadataFactory A Metadata\MetadataFactory instance.
     */
    protected function getDtlPhpcrTaxonomy_Metadata_FactoryService()
    {
        return $this->services['dtl_phpcr_taxonomy.metadata.factory'] = new \Metadata\MetadataFactory($this->get('dtl_phpcr_taxonomy.metadata.driver.chain'));
    }

    /**
     * Gets the 'dtl_phpcr_taxonomy.phpcrodm.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \DTL\PhpcrTaxonomyBundle\Subscriber\TaxonomySubscriber A DTL\PhpcrTaxonomyBundle\Subscriber\TaxonomySubscriber instance.
     */
    protected function getDtlPhpcrTaxonomy_Phpcrodm_SubscriberService()
    {
        return $this->services['dtl_phpcr_taxonomy.phpcrodm.subscriber'] = new \DTL\PhpcrTaxonomyBundle\Subscriber\TaxonomySubscriber($this);
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance.
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[2].'/Resources'));
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance.
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'form.csrf_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter A Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter instance.
     */
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance.
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance.
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'button' => 'form.type.button', 'submit' => 'form.type.submit', 'reset' => 'form.type.reset', 'currency' => 'form.type.currency', 'entity' => 'form.type.entity', 'phpcr_reference' => 'form.type.phpcr.reference', 'phpcr_odm_reference_collection' => 'form.type.phpcr_odm.reference_collection', 'phpcr_document' => 'form.type.phpcr.document', 'phpcr_odm_path' => 'doctrine_phpcr.odm.form.type.path', 'cmf_routing_route_type' => 'cmf_routing.route_type_form_type', 'sonata_block_service_choice' => 'sonata.block.form.type.block', 'sonata_type_container_template_choice' => 'sonata.block.form.type.container_template', 'doctrine_phpcr_type_filter_choice' => 'sonata.admin.doctrine_phpcr_form.filter.type.choice', 'doctrine_phpcr_odm_tree' => 'sonata.admin.doctrine_phpcr.form.type.phpcr_odm_tree', 'doctrine_phpcr_odm_tree_manager' => 'sonata.admin.doctrine_phpcr.form.type.phpcr_odm_tree_manager', 'choice_field_mask' => 'sonata.admin.doctrine_phpcr.form.type.choice_field_mask', 'sonata_type_admin' => 'sonata.admin.form.type.admin', 'sonata_type_model' => 'sonata.admin.form.type.model_choice', 'sonata_type_model_list' => 'sonata.admin.form.type.model_list', 'sonata_type_model_reference' => 'sonata.admin.form.type.model_reference', 'sonata_type_model_hidden' => 'sonata.admin.form.type.model_hidden', 'sonata_type_model_autocomplete' => 'sonata.admin.form.type.model_autocomplete', 'sonata_type_native_collection' => 'sonata.admin.form.type.collection', 'sonata_type_filter_number' => 'sonata.admin.form.filter.type.number', 'sonata_type_filter_choice' => 'sonata.admin.form.filter.type.choice', 'sonata_type_filter_default' => 'sonata.admin.form.filter.type.default', 'sonata_type_filter_date' => 'sonata.admin.form.filter.type.date', 'sonata_type_filter_date_range' => 'sonata.admin.form.filter.type.daterange', 'sonata_type_filter_datetime' => 'sonata.admin.form.filter.type.datetime', 'sonata_type_filter_datetime_range' => 'sonata.admin.form.filter.type.datetime_range', 'sonata_type_immutable_array' => 'sonata.core.form.type.array', 'sonata_type_boolean' => 'sonata.core.form.type.boolean', 'sonata_type_collection' => 'sonata.core.form.type.collection', 'sonata_type_translatable_choice' => 'sonata.core.form.type.translatable_choice', 'sonata_type_date_range' => 'sonata.core.form.type.date_range', 'sonata_type_datetime_range' => 'sonata.core.form.type.datetime_range', 'sonata_type_date_picker' => 'sonata.core.form.type.date_picker', 'sonata_type_datetime_picker' => 'sonata.core.form.type.datetime_picker', 'sonata_type_date_range_picker' => 'sonata.core.form.type.date_range_picker', 'sonata_type_datetime_range_picker' => 'sonata.core.form.type.datetime_range_picker', 'sonata_type_equal' => 'sonata.core.form.type.equal', 'sonata_type_color_selector' => 'sonata.core.form.type.color_selector', 'cmf_core_checkbox_url_label' => 'cmf_core.form.type.checkbox_url_label', 'captcha' => 'captcha.type'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf', 3 => 'form.type_extension.form.data_collector', 4 => 'sonata.admin.form.extension.field', 5 => 'sonata.admin.form.extension.field.mopa'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator'), 'sonata_type_collection' => array(0 => 'sonata.admin.doctrine_phpcr.form.collection_type_extension')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine', 2 => 'form.type_guesser.doctrine_phpcr'))), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy A Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy instance.
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), $this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance.
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance.
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance.
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance.
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance.
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance.
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance.
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance.
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance.
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance.
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance.
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance.
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance.
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance.
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance.
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance.
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance.
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance.
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance.
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance.
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance.
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.phpcr.document' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Form\Type\DocumentType A Doctrine\Bundle\PHPCRBundle\Form\Type\DocumentType instance.
     */
    protected function getForm_Type_Phpcr_DocumentService()
    {
        return $this->services['form.type.phpcr.document'] = new \Doctrine\Bundle\PHPCRBundle\Form\Type\DocumentType($this->get('doctrine_phpcr'));
    }

    /**
     * Gets the 'form.type.phpcr.reference' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Form\Type\PHPCRReferenceType A Doctrine\Bundle\PHPCRBundle\Form\Type\PHPCRReferenceType instance.
     */
    protected function getForm_Type_Phpcr_ReferenceService()
    {
        return $this->services['form.type.phpcr.reference'] = new \Doctrine\Bundle\PHPCRBundle\Form\Type\PHPCRReferenceType($this->get('doctrine_phpcr.default_session'));
    }

    /**
     * Gets the 'form.type.phpcr_odm.reference_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Form\Type\PHPCRODMReferenceCollectionType A Doctrine\Bundle\PHPCRBundle\Form\Type\PHPCRODMReferenceCollectionType instance.
     */
    protected function getForm_Type_PhpcrOdm_ReferenceCollectionService()
    {
        return $this->services['form.type.phpcr_odm.reference_collection'] = new \Doctrine\Bundle\PHPCRBundle\Form\Type\PHPCRODMReferenceCollectionType($this->get('doctrine_phpcr.odm.default_document_manager'));
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance.
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance.
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance.
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance.
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance.
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance.
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance.
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance.
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance.
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance.
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance.
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators');
    }

    /**
     * Gets the 'form.type_extension.form.data_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension A Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension instance.
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension($this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance.
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'))));
    }

    /**
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type_guesser.doctrine_phpcr' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Form\PhpcrOdmTypeGuesser A Doctrine\Bundle\PHPCRBundle\Form\PhpcrOdmTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_DoctrinePhpcrService()
    {
        return $this->services['form.type_guesser.doctrine_phpcr'] = new \Doctrine\Bundle\PHPCRBundle\Form\PhpcrOdmTypeGuesser($this->get('doctrine_phpcr'), array());
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /**
     * Gets the 'fos_http_cache.event_listener.cache_control' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\HttpCacheBundle\EventListener\CacheControlSubscriber A FOS\HttpCacheBundle\EventListener\CacheControlSubscriber instance.
     */
    protected function getFosHttpCache_EventListener_CacheControlService()
    {
        return $this->services['fos_http_cache.event_listener.cache_control'] = new \FOS\HttpCacheBundle\EventListener\CacheControlSubscriber('X-Cache-Debug');
    }

    /**
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler A Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler instance.
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, true, $this->get('request_stack'));

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('esi', 'fragment.renderer.esi');
        $instance->addRendererService('ssi', 'fragment.renderer.ssi');

        return $instance;
    }

    /**
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance.
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /**
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance.
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer A Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer instance.
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance.
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('debug.event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance.
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'gregwar_captcha.captcha_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Gregwar\Captcha\CaptchaBuilder A Gregwar\Captcha\CaptchaBuilder instance.
     */
    protected function getGregwarCaptcha_CaptchaBuilderService()
    {
        return $this->services['gregwar_captcha.captcha_builder'] = new \Gregwar\Captcha\CaptchaBuilder();
    }

    /**
     * Gets the 'gregwar_captcha.generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Gregwar\CaptchaBundle\Generator\CaptchaGenerator A Gregwar\CaptchaBundle\Generator\CaptchaGenerator instance.
     */
    protected function getGregwarCaptcha_GeneratorService()
    {
        return $this->services['gregwar_captcha.generator'] = new \Gregwar\CaptchaBundle\Generator\CaptchaGenerator($this->get('cmf_routing.router'), $this->get('gregwar_captcha.captcha_builder'), $this->get('gregwar_captcha.phrase_builder'), $this->get('gregwar_captcha.image_file_handler'));
    }

    /**
     * Gets the 'gregwar_captcha.image_file_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Gregwar\CaptchaBundle\Generator\ImageFileHandler A Gregwar\CaptchaBundle\Generator\ImageFileHandler instance.
     */
    protected function getGregwarCaptcha_ImageFileHandlerService()
    {
        return $this->services['gregwar_captcha.image_file_handler'] = new \Gregwar\CaptchaBundle\Generator\ImageFileHandler('captcha', ($this->targetDirs[2].'/../web'), 100, 60);
    }

    /**
     * Gets the 'gregwar_captcha.phrase_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Gregwar\Captcha\PhraseBuilder A Gregwar\Captcha\PhraseBuilder instance.
     */
    protected function getGregwarCaptcha_PhraseBuilderService()
    {
        return $this->services['gregwar_captcha.phrase_builder'] = new \Gregwar\Captcha\PhraseBuilder();
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel A Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('debug.event_dispatcher'), $this, $this->get('debug.controller_resolver'), $this->get('request_stack'), false);
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'knp_menu.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Silex\RouterAwareFactory A Knp\Menu\Silex\RouterAwareFactory instance.
     */
    protected function getKnpMenu_FactoryService()
    {
        return $this->services['knp_menu.factory'] = new \Knp\Menu\Silex\RouterAwareFactory($this->get('cmf_routing.router'));
    }

    /**
     * Gets the 'knp_menu.menu_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Provider\ChainProvider A Knp\Menu\Provider\ChainProvider instance.
     */
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => $this->get('acme.basic_cms.menu_provider'), 1 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array()), 2 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider($this->get('kernel'), $this, $this->get('knp_menu.factory'))));
    }

    /**
     * Gets the 'knp_menu.renderer.list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Renderer\ListRenderer A Knp\Menu\Renderer\ListRenderer instance.
     */
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer(array(), 'UTF-8');
    }

    /**
     * Gets the 'knp_menu.renderer.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Renderer\TwigRenderer A Knp\Menu\Renderer\TwigRenderer instance.
     */
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'knp_menu.html.twig', array());
    }

    /**
     * Gets the 'knp_menu.renderer_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider A Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider instance.
     */
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance.
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('en', $this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'markdown.parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MarkdownBundle\Parser\Preset\Max A Knp\Bundle\MarkdownBundle\Parser\Preset\Max instance.
     */
    protected function getMarkdown_ParserService()
    {
        return $this->services['markdown.parser'] = new \Knp\Bundle\MarkdownBundle\Parser\Preset\Max();
    }

    /**
     * Gets the 'monolog.handler.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance.
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, false, array());
    }

    /**
     * Gets the 'monolog.handler.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\DebugHandler A Symfony\Bridge\Monolog\Handler\DebugHandler instance.
     */
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance.
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/dev.log'), 100, true, NULL);
    }

    /**
     * Gets the 'monolog.logger.assetic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_AsseticService()
    {
        $this->services['monolog.logger.assetic'] = $instance = new \Symfony\Bridge\Monolog\Logger('assetic');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine_phpcr' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DoctrinePhpcrService()
    {
        $this->services['monolog.logger.doctrine_phpcr'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine_phpcr');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'pagerfanta.convert_not_valid_current_page_to_not_found_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener A WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener instance.
     */
    protected function getPagerfanta_ConvertNotValidCurrentPageToNotFoundListenerService()
    {
        return $this->services['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener();
    }

    /**
     * Gets the 'pagerfanta.convert_not_valid_max_per_page_to_not_found_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener A WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener instance.
     */
    protected function getPagerfanta_ConvertNotValidMaxPerPageToNotFoundListenerService()
    {
        return $this->services['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener();
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance.
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $c->setKernel($b);
        }

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine'));
        $d->addLogger('default', $this->get('doctrine.dbal.logger.profiling.default'));
        $d->addLogger('dantleech2', $this->get('doctrine.dbal.logger.profiling.dantleech2'));

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler'), '', '', 86400), $a);

        $instance->add($c);
        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Bundle\FrameworkBundle\DataCollector\AjaxDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector($this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add($this->get('data_collector.router'));
        $instance->add($this->get('data_collector.form'));
        $instance->add($this->get('data_collector.translation'));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector($this->get('twig.profile')));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy')));
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add($d);
        $instance->add(new \Doctrine\Bundle\PHPCRBundle\DataCollector\PHPCRDataCollector($this->get('doctrine_phpcr')));
        $instance->add(new \Sonata\BlockBundle\Profiler\DataCollector\BlockDataCollector($this->get('sonata.block.templating.helper'), array(0 => 'sonata.block.service.container', 1 => 'sonata.page.block.container', 2 => 'cmf.block.container', 3 => 'cmf.block.slideshow')));

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance.
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), NULL, false, false, $this->get('request_stack'));
    }

    /**
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance.
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance.
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance.
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance.
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('cmf_routing.router'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance.
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Bundle\AsseticBundle\Routing\AsseticLoader($this->get('assetic.asset_manager'), array()));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader($this->get('sonata.admin.route_loader'));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $d);
    }

    /**
     * Gets the 'security.authentication_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils A Symfony\Component\Security\Http\Authentication\AuthenticationUtils instance.
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /**
     * Gets the 'security.authorization_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker A Symfony\Component\Security\Core\Authorization\AuthorizationChecker instance.
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /**
     * Gets the 'security.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\SecurityContext A Symfony\Component\Security\Core\SecurityContext instance.
     */
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /**
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance.
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator($this->get('security.secure_random')), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /**
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance.
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('Symfony\\Component\\Security\\Core\\User\\User' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder', 'arguments' => array(0 => false))));
    }

    /**
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance.
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.login' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$'), 'security.firewall.map.context.secured_area' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin'))), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /**
     * Gets the 'security.firewall.map.context.login' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_LoginService()
    {
        return $this->services['security.firewall.map.context.login'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /**
     * Gets the 'security.firewall.map.context.secured_area' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_SecuredAreaService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.token_storage');
        $c = $this->get('security.authentication.manager');
        $d = $this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $e = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin');

        $f = new \Symfony\Component\Security\Http\AccessMap();
        $f->add($e, array(0 => 'ROLE_ADMIN'), NULL);

        $g = new \Symfony\Component\Security\Http\EntryPoint\BasicAuthenticationEntryPoint('Secured Demo Area');

        return $this->services['security.firewall.map.context.secured_area'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($f, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => $this->get('security.user.provider.concrete.in_memory')), 'secured_area', $a, $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)), 2 => new \Symfony\Component\Security\Http\Firewall\BasicAuthenticationListener($b, $c, 'secured_area', $g, $a), 3 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '5657423ecfb90', $a, $c), 4 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $this->get('security.access.decision_manager'), $f, $c)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), new \Symfony\Component\Security\Http\HttpUtils($d, $d), 'secured_area', $g, NULL, NULL, $a));
    }

    /**
     * Gets the 'security.password_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder A Symfony\Component\Security\Core\Encoder\UserPasswordEncoder instance.
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance.
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the 'security.secure_random' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Util\SecureRandom A Symfony\Component\Security\Core\Util\SecureRandom instance.
     */
    protected function getSecurity_SecureRandomService()
    {
        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom((__DIR__.'/secure_random.seed'), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage A Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage instance.
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance.
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'sensio_distribution.webconfigurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\DistributionBundle\Configurator\Configurator A Sensio\Bundle\DistributionBundle\Configurator\Configurator instance.
     */
    protected function getSensioDistribution_WebconfiguratorService()
    {
        return $this->services['sensio_distribution.webconfigurator'] = new \Sensio\Bundle\DistributionBundle\Configurator\Configurator($this->targetDirs[2]);
    }

    /**
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance.
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance.
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance.
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /**
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance.
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance.
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance.
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance.
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance.
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance.
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance.
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance.
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('gc_probability' => 1), NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance.
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance.
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the 'sonata.admin.audit.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Model\AuditManager A Sonata\AdminBundle\Model\AuditManager instance.
     */
    protected function getSonata_Admin_Audit_ManagerService()
    {
        return $this->services['sonata.admin.audit.manager'] = new \Sonata\AdminBundle\Model\AuditManager($this);
    }

    /**
     * Gets the 'sonata.admin.block.admin_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Block\AdminListBlockService A Sonata\AdminBundle\Block\AdminListBlockService instance.
     */
    protected function getSonata_Admin_Block_AdminListService()
    {
        return $this->services['sonata.admin.block.admin_list'] = new \Sonata\AdminBundle\Block\AdminListBlockService('sonata.admin.block.admin_list', $this->get('templating'), $this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.block.search_result' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Block\AdminSearchBlockService A Sonata\AdminBundle\Block\AdminSearchBlockService instance.
     */
    protected function getSonata_Admin_Block_SearchResultService()
    {
        return $this->services['sonata.admin.block.search_result'] = new \Sonata\AdminBundle\Block\AdminSearchBlockService('sonata.admin.block.search_result', $this->get('templating'), $this->get('sonata.admin.pool'), $this->get('sonata.admin.search.handler'));
    }

    /**
     * Gets the 'sonata.admin.builder.doctrine_phpcr_datagrid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Builder\DatagridBuilder A Sonata\DoctrinePHPCRAdminBundle\Builder\DatagridBuilder instance.
     */
    protected function getSonata_Admin_Builder_DoctrinePhpcrDatagridService()
    {
        return $this->services['sonata.admin.builder.doctrine_phpcr_datagrid'] = new \Sonata\DoctrinePHPCRAdminBundle\Builder\DatagridBuilder($this->get('form.factory'), $this->get('sonata.admin.builder.filter.factory'), $this->get('sonata.admin.guesser.doctrine_phpcr_datagrid_chain'), true);
    }

    /**
     * Gets the 'sonata.admin.builder.doctrine_phpcr_form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Builder\FormContractor A Sonata\DoctrinePHPCRAdminBundle\Builder\FormContractor instance.
     */
    protected function getSonata_Admin_Builder_DoctrinePhpcrFormService()
    {
        return $this->services['sonata.admin.builder.doctrine_phpcr_form'] = new \Sonata\DoctrinePHPCRAdminBundle\Builder\FormContractor($this->get('form.factory'));
    }

    /**
     * Gets the 'sonata.admin.builder.doctrine_phpcr_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Builder\ListBuilder A Sonata\DoctrinePHPCRAdminBundle\Builder\ListBuilder instance.
     */
    protected function getSonata_Admin_Builder_DoctrinePhpcrListService()
    {
        return $this->services['sonata.admin.builder.doctrine_phpcr_list'] = new \Sonata\DoctrinePHPCRAdminBundle\Builder\ListBuilder($this->get('sonata.admin.guesser.doctrine_phpcr_list_chain'), array('array' => 'SonataAdminBundle:CRUD:list_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig', 'date' => 'SonataAdminBundle:CRUD:list_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:list_time.html.twig', 'datetime' => 'SonataAdminBundle:CRUD:list_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'textarea' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'email' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'smallint' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'bigint' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'integer' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'decimal' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'identifier' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'currency' => 'SonataAdminBundle:CRUD:list_currency.html.twig', 'percent' => 'SonataAdminBundle:CRUD:list_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:list_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:list_url.html.twig', 'html' => 'SonataAdminBundle:CRUD:list_html.html.twig', 'node' => 'SonataDoctrinePHPCRAdminBundle:CRUD:list_node.html.twig'));
    }

    /**
     * Gets the 'sonata.admin.builder.doctrine_phpcr_show' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Builder\ShowBuilder A Sonata\DoctrinePHPCRAdminBundle\Builder\ShowBuilder instance.
     */
    protected function getSonata_Admin_Builder_DoctrinePhpcrShowService()
    {
        return $this->services['sonata.admin.builder.doctrine_phpcr_show'] = new \Sonata\DoctrinePHPCRAdminBundle\Builder\ShowBuilder($this->get('sonata.admin.guesser.doctrine_phpcr_show_chain'), array('array' => 'SonataAdminBundle:CRUD:show_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig', 'date' => 'SonataAdminBundle:CRUD:show_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:show_time.html.twig', 'datetime' => 'SonataAdminBundle:CRUD:show_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'smallint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'bigint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'integer' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'decimal' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'currency' => 'SonataAdminBundle:CRUD:show_currency.html.twig', 'percent' => 'SonataAdminBundle:CRUD:show_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:show_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:show_url.html.twig', 'html' => 'SonataAdminBundle:CRUD:show_html.html.twig', 'doctrine_phpcr_many_to_many' => 'SonataDoctrinePHPCRAdminBundle:CRUD:show_phpcr_many_to_many.html.twig', 'doctrine_phpcr_many_to_one' => 'SonataDoctrinePHPCRAdminBundle:CRUD:show_phpcr_many_to_one.html.twig', 'doctrine_phpcr_one_to_many' => 'SonataDoctrinePHPCRAdminBundle:CRUD:show_phpcr_one_to_many.html.twig', 'doctrine_phpcr_one_to_one' => 'SonataDoctrinePHPCRAdminBundle:CRUD:show_phpcr_one_to_one.html.twig'));
    }

    /**
     * Gets the 'sonata.admin.builder.filter.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Filter\FilterFactory A Sonata\AdminBundle\Filter\FilterFactory instance.
     */
    protected function getSonata_Admin_Builder_Filter_FactoryService()
    {
        return $this->services['sonata.admin.builder.filter.factory'] = new \Sonata\AdminBundle\Filter\FilterFactory($this, array('doctrine_phpcr_boolean' => 'sonata.admin.doctrine_phpcr.filter.type.boolean', 'doctrine_phpcr_callback' => 'sonata.admin.doctrine_phpcr.filter.type.callback', 'doctrine_phpcr_choice' => 'sonata.admin.doctrine_phpcr.filter.type.choice', 'doctrine_phpcr_model' => 'sonata.admin.doctrine_phpcr.filter.type.model', 'doctrine_phpcr_string' => 'sonata.admin.doctrine_phpcr.filter.type.string', 'doctrine_phpcr_number' => 'sonata.admin.doctrine_phpcr.filter.type.number', 'doctrine_phpcr_date' => 'sonata.admin.doctrine_phpcr.filter.type.date', 'doctrine_phpcr_nodename' => 'sonata.admin.doctrine_phpcr.filter.type.nodename'));
    }

    /**
     * Gets the 'sonata.admin.controller.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Controller\HelperController A Sonata\AdminBundle\Controller\HelperController instance.
     */
    protected function getSonata_Admin_Controller_AdminService()
    {
        return $this->services['sonata.admin.controller.admin'] = new \Sonata\AdminBundle\Controller\HelperController($this->get('twig'), $this->get('sonata.admin.pool'), $this->get('sonata.admin.helper'), $this->get('validator'));
    }

    /**
     * Gets the 'sonata.admin.doctrine_phpcr.filter.type.boolean' service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Filter\BooleanFilter A Sonata\DoctrinePHPCRAdminBundle\Filter\BooleanFilter instance.
     */
    protected function getSonata_Admin_DoctrinePhpcr_Filter_Type_BooleanService()
    {
        return new \Sonata\DoctrinePHPCRAdminBundle\Filter\BooleanFilter();
    }

    /**
     * Gets the 'sonata.admin.doctrine_phpcr.filter.type.callback' service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Filter\CallbackFilter A Sonata\DoctrinePHPCRAdminBundle\Filter\CallbackFilter instance.
     */
    protected function getSonata_Admin_DoctrinePhpcr_Filter_Type_CallbackService()
    {
        return new \Sonata\DoctrinePHPCRAdminBundle\Filter\CallbackFilter();
    }

    /**
     * Gets the 'sonata.admin.doctrine_phpcr.filter.type.choice' service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Filter\ChoiceFilter A Sonata\DoctrinePHPCRAdminBundle\Filter\ChoiceFilter instance.
     */
    protected function getSonata_Admin_DoctrinePhpcr_Filter_Type_ChoiceService()
    {
        return new \Sonata\DoctrinePHPCRAdminBundle\Filter\ChoiceFilter();
    }

    /**
     * Gets the 'sonata.admin.doctrine_phpcr.filter.type.date' service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Filter\DateFilter A Sonata\DoctrinePHPCRAdminBundle\Filter\DateFilter instance.
     */
    protected function getSonata_Admin_DoctrinePhpcr_Filter_Type_DateService()
    {
        return new \Sonata\DoctrinePHPCRAdminBundle\Filter\DateFilter();
    }

    /**
     * Gets the 'sonata.admin.doctrine_phpcr.filter.type.model' service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Filter\ModelFilter A Sonata\DoctrinePHPCRAdminBundle\Filter\ModelFilter instance.
     */
    protected function getSonata_Admin_DoctrinePhpcr_Filter_Type_ModelService()
    {
        return new \Sonata\DoctrinePHPCRAdminBundle\Filter\ModelFilter();
    }

    /**
     * Gets the 'sonata.admin.doctrine_phpcr.filter.type.nodename' service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Filter\NodeNameFilter A Sonata\DoctrinePHPCRAdminBundle\Filter\NodeNameFilter instance.
     */
    protected function getSonata_Admin_DoctrinePhpcr_Filter_Type_NodenameService()
    {
        return new \Sonata\DoctrinePHPCRAdminBundle\Filter\NodeNameFilter();
    }

    /**
     * Gets the 'sonata.admin.doctrine_phpcr.filter.type.number' service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Filter\NumberFilter A Sonata\DoctrinePHPCRAdminBundle\Filter\NumberFilter instance.
     */
    protected function getSonata_Admin_DoctrinePhpcr_Filter_Type_NumberService()
    {
        return new \Sonata\DoctrinePHPCRAdminBundle\Filter\NumberFilter();
    }

    /**
     * Gets the 'sonata.admin.doctrine_phpcr.filter.type.string' service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Filter\StringFilter A Sonata\DoctrinePHPCRAdminBundle\Filter\StringFilter instance.
     */
    protected function getSonata_Admin_DoctrinePhpcr_Filter_Type_StringService()
    {
        return new \Sonata\DoctrinePHPCRAdminBundle\Filter\StringFilter();
    }

    /**
     * Gets the 'sonata.admin.doctrine_phpcr.form.collection_type_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Form\Extension\CollectionTypeExtension A Sonata\DoctrinePHPCRAdminBundle\Form\Extension\CollectionTypeExtension instance.
     */
    protected function getSonata_Admin_DoctrinePhpcr_Form_CollectionTypeExtensionService()
    {
        return $this->services['sonata.admin.doctrine_phpcr.form.collection_type_extension'] = new \Sonata\DoctrinePHPCRAdminBundle\Form\Extension\CollectionTypeExtension();
    }

    /**
     * Gets the 'sonata.admin.doctrine_phpcr.form.type.choice_field_mask' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Form\Type\ChoiceFieldMaskType A Sonata\DoctrinePHPCRAdminBundle\Form\Type\ChoiceFieldMaskType instance.
     */
    protected function getSonata_Admin_DoctrinePhpcr_Form_Type_ChoiceFieldMaskService()
    {
        return $this->services['sonata.admin.doctrine_phpcr.form.type.choice_field_mask'] = new \Sonata\DoctrinePHPCRAdminBundle\Form\Type\ChoiceFieldMaskType();
    }

    /**
     * Gets the 'sonata.admin.doctrine_phpcr.form.type.phpcr_odm_tree' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Form\Type\TreeModelType A Sonata\DoctrinePHPCRAdminBundle\Form\Type\TreeModelType instance.
     */
    protected function getSonata_Admin_DoctrinePhpcr_Form_Type_PhpcrOdmTreeService()
    {
        $this->services['sonata.admin.doctrine_phpcr.form.type.phpcr_odm_tree'] = $instance = new \Sonata\DoctrinePHPCRAdminBundle\Form\Type\TreeModelType();

        $instance->setDefaults(array());
        $instance->setTree($this->get('sonata.admin.doctrine_phpcr.phpcr_odm_tree'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.doctrine_phpcr.form.type.phpcr_odm_tree_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Form\Type\TreeManagerType A Sonata\DoctrinePHPCRAdminBundle\Form\Type\TreeManagerType instance.
     */
    protected function getSonata_Admin_DoctrinePhpcr_Form_Type_PhpcrOdmTreeManagerService()
    {
        return $this->services['sonata.admin.doctrine_phpcr.form.type.phpcr_odm_tree_manager'] = new \Sonata\DoctrinePHPCRAdminBundle\Form\Type\TreeManagerType();
    }

    /**
     * Gets the 'sonata.admin.doctrine_phpcr.phpcr_odm_tree' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Tree\PhpcrOdmTree A Sonata\DoctrinePHPCRAdminBundle\Tree\PhpcrOdmTree instance.
     */
    protected function getSonata_Admin_DoctrinePhpcr_PhpcrOdmTreeService()
    {
        return $this->services['sonata.admin.doctrine_phpcr.phpcr_odm_tree'] = new \Sonata\DoctrinePHPCRAdminBundle\Tree\PhpcrOdmTree($this->get('doctrine_phpcr.odm.default_document_manager'), $this->get('sonata.admin.manager.doctrine_phpcr'), $this->get('sonata.admin.pool'), $this->get('translator'), $this->get('templating.helper.assets'), array(), array('depth' => 1, 'precise_children' => true), '');
    }

    /**
     * Gets the 'sonata.admin.doctrine_phpcr.tree_controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Controller\TreeController A Sonata\DoctrinePHPCRAdminBundle\Controller\TreeController instance.
     */
    protected function getSonata_Admin_DoctrinePhpcr_TreeControllerService()
    {
        $this->services['sonata.admin.doctrine_phpcr.tree_controller'] = $instance = new \Sonata\DoctrinePHPCRAdminBundle\Controller\TreeController($this->get('sonata.admin.doctrine_phpcr.phpcr_odm_tree'), '', array(), true);

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.doctrine_phpcr_form.filter.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Form\Type\Filter\ChoiceType A Sonata\DoctrinePHPCRAdminBundle\Form\Type\Filter\ChoiceType instance.
     */
    protected function getSonata_Admin_DoctrinePhpcrForm_Filter_Type_ChoiceService()
    {
        return $this->services['sonata.admin.doctrine_phpcr_form.filter.type.choice'] = new \Sonata\DoctrinePHPCRAdminBundle\Form\Type\Filter\ChoiceType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.event.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Event\AdminEventExtension A Sonata\AdminBundle\Event\AdminEventExtension instance.
     */
    protected function getSonata_Admin_Event_ExtensionService()
    {
        return $this->services['sonata.admin.event.extension'] = new \Sonata\AdminBundle\Event\AdminEventExtension($this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'sonata.admin.exporter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Export\Exporter A Sonata\AdminBundle\Export\Exporter instance.
     */
    protected function getSonata_Admin_ExporterService()
    {
        return $this->services['sonata.admin.exporter'] = new \Sonata\AdminBundle\Export\Exporter();
    }

    /**
     * Gets the 'sonata.admin.form.extension.field' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension A Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension instance.
     */
    protected function getSonata_Admin_Form_Extension_FieldService()
    {
        return $this->services['sonata.admin.form.extension.field'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension(array('email' => '', 'textarea' => '', 'text' => '', 'choice' => '', 'integer' => '', 'datetime' => 'sonata-medium-date', 'date' => 'sonata-medium-date'));
    }

    /**
     * Gets the 'sonata.admin.form.extension.field.mopa' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension A Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension instance.
     */
    protected function getSonata_Admin_Form_Extension_Field_MopaService()
    {
        return $this->services['sonata.admin.form.extension.field.mopa'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension();
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\ChoiceType A Sonata\AdminBundle\Form\Type\Filter\ChoiceType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_ChoiceService()
    {
        return $this->services['sonata.admin.form.filter.type.choice'] = new \Sonata\AdminBundle\Form\Type\Filter\ChoiceType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateType A Sonata\AdminBundle\Form\Type\Filter\DateType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_DateService()
    {
        return $this->services['sonata.admin.form.filter.type.date'] = new \Sonata\AdminBundle\Form\Type\Filter\DateType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.daterange' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateRangeType A Sonata\AdminBundle\Form\Type\Filter\DateRangeType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_DaterangeService()
    {
        return $this->services['sonata.admin.form.filter.type.daterange'] = new \Sonata\AdminBundle\Form\Type\Filter\DateRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateTimeType A Sonata\AdminBundle\Form\Type\Filter\DateTimeType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_DatetimeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.datetime_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType A Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_DatetimeRangeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime_range'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DefaultType A Sonata\AdminBundle\Form\Type\Filter\DefaultType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_DefaultService()
    {
        return $this->services['sonata.admin.form.filter.type.default'] = new \Sonata\AdminBundle\Form\Type\Filter\DefaultType();
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\NumberType A Sonata\AdminBundle\Form\Type\Filter\NumberType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_NumberService()
    {
        return $this->services['sonata.admin.form.filter.type.number'] = new \Sonata\AdminBundle\Form\Type\Filter\NumberType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.type.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\AdminType A Sonata\AdminBundle\Form\Type\AdminType instance.
     */
    protected function getSonata_Admin_Form_Type_AdminService()
    {
        return $this->services['sonata.admin.form.type.admin'] = new \Sonata\AdminBundle\Form\Type\AdminType();
    }

    /**
     * Gets the 'sonata.admin.form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\CollectionType A Sonata\AdminBundle\Form\Type\CollectionType instance.
     */
    protected function getSonata_Admin_Form_Type_CollectionService()
    {
        return $this->services['sonata.admin.form.type.collection'] = new \Sonata\AdminBundle\Form\Type\CollectionType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelAutocompleteType A Sonata\AdminBundle\Form\Type\ModelAutocompleteType instance.
     */
    protected function getSonata_Admin_Form_Type_ModelAutocompleteService()
    {
        return $this->services['sonata.admin.form.type.model_autocomplete'] = new \Sonata\AdminBundle\Form\Type\ModelAutocompleteType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelType A Sonata\AdminBundle\Form\Type\ModelType instance.
     */
    protected function getSonata_Admin_Form_Type_ModelChoiceService()
    {
        return $this->services['sonata.admin.form.type.model_choice'] = new \Sonata\AdminBundle\Form\Type\ModelType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelHiddenType A Sonata\AdminBundle\Form\Type\ModelHiddenType instance.
     */
    protected function getSonata_Admin_Form_Type_ModelHiddenService()
    {
        return $this->services['sonata.admin.form.type.model_hidden'] = new \Sonata\AdminBundle\Form\Type\ModelHiddenType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelTypeList A Sonata\AdminBundle\Form\Type\ModelTypeList instance.
     */
    protected function getSonata_Admin_Form_Type_ModelListService()
    {
        return $this->services['sonata.admin.form.type.model_list'] = new \Sonata\AdminBundle\Form\Type\ModelTypeList();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_reference' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelReferenceType A Sonata\AdminBundle\Form\Type\ModelReferenceType instance.
     */
    protected function getSonata_Admin_Form_Type_ModelReferenceService()
    {
        return $this->services['sonata.admin.form.type.model_reference'] = new \Sonata\AdminBundle\Form\Type\ModelReferenceType();
    }

    /**
     * Gets the 'sonata.admin.guesser.doctrine_phpcr_datagrid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Guesser\FilterTypeGuesser A Sonata\DoctrinePHPCRAdminBundle\Guesser\FilterTypeGuesser instance.
     */
    protected function getSonata_Admin_Guesser_DoctrinePhpcrDatagridService()
    {
        return $this->services['sonata.admin.guesser.doctrine_phpcr_datagrid'] = new \Sonata\DoctrinePHPCRAdminBundle\Guesser\FilterTypeGuesser($this->get('doctrine_phpcr'));
    }

    /**
     * Gets the 'sonata.admin.guesser.doctrine_phpcr_datagrid_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Guesser\TypeGuesserChain A Sonata\AdminBundle\Guesser\TypeGuesserChain instance.
     */
    protected function getSonata_Admin_Guesser_DoctrinePhpcrDatagridChainService()
    {
        return $this->services['sonata.admin.guesser.doctrine_phpcr_datagrid_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.doctrine_phpcr_datagrid')));
    }

    /**
     * Gets the 'sonata.admin.guesser.doctrine_phpcr_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Guesser\TypeGuesser A Sonata\DoctrinePHPCRAdminBundle\Guesser\TypeGuesser instance.
     */
    protected function getSonata_Admin_Guesser_DoctrinePhpcrListService()
    {
        return $this->services['sonata.admin.guesser.doctrine_phpcr_list'] = new \Sonata\DoctrinePHPCRAdminBundle\Guesser\TypeGuesser($this->get('doctrine_phpcr'));
    }

    /**
     * Gets the 'sonata.admin.guesser.doctrine_phpcr_list_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Guesser\TypeGuesserChain A Sonata\AdminBundle\Guesser\TypeGuesserChain instance.
     */
    protected function getSonata_Admin_Guesser_DoctrinePhpcrListChainService()
    {
        return $this->services['sonata.admin.guesser.doctrine_phpcr_list_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.doctrine_phpcr_list')));
    }

    /**
     * Gets the 'sonata.admin.guesser.doctrine_phpcr_show' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Guesser\TypeGuesser A Sonata\DoctrinePHPCRAdminBundle\Guesser\TypeGuesser instance.
     */
    protected function getSonata_Admin_Guesser_DoctrinePhpcrShowService()
    {
        return $this->services['sonata.admin.guesser.doctrine_phpcr_show'] = new \Sonata\DoctrinePHPCRAdminBundle\Guesser\TypeGuesser($this->get('doctrine_phpcr'));
    }

    /**
     * Gets the 'sonata.admin.guesser.doctrine_phpcr_show_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Guesser\TypeGuesserChain A Sonata\AdminBundle\Guesser\TypeGuesserChain instance.
     */
    protected function getSonata_Admin_Guesser_DoctrinePhpcrShowChainService()
    {
        return $this->services['sonata.admin.guesser.doctrine_phpcr_show_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.doctrine_phpcr_show')));
    }

    /**
     * Gets the 'sonata.admin.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Admin\AdminHelper A Sonata\AdminBundle\Admin\AdminHelper instance.
     */
    protected function getSonata_Admin_HelperService()
    {
        return $this->services['sonata.admin.helper'] = new \Sonata\AdminBundle\Admin\AdminHelper($this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.label.strategy.bc' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy A Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy instance.
     */
    protected function getSonata_Admin_Label_Strategy_BcService()
    {
        return $this->services['sonata.admin.label.strategy.bc'] = new \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.form_component' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy A Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy instance.
     */
    protected function getSonata_Admin_Label_Strategy_FormComponentService()
    {
        return $this->services['sonata.admin.label.strategy.form_component'] = new \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy A Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy instance.
     */
    protected function getSonata_Admin_Label_Strategy_NativeService()
    {
        return $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.noop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy A Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy instance.
     */
    protected function getSonata_Admin_Label_Strategy_NoopService()
    {
        return $this->services['sonata.admin.label.strategy.noop'] = new \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.underscore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy A Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy instance.
     */
    protected function getSonata_Admin_Label_Strategy_UnderscoreService()
    {
        return $this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.manager.doctrine_phpcr' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Model\ModelManager A Sonata\DoctrinePHPCRAdminBundle\Model\ModelManager instance.
     */
    protected function getSonata_Admin_Manager_DoctrinePhpcrService()
    {
        return $this->services['sonata.admin.manager.doctrine_phpcr'] = new \Sonata\DoctrinePHPCRAdminBundle\Model\ModelManager($this->get('doctrine_phpcr.odm.default_document_manager'));
    }

    /**
     * Gets the 'sonata.admin.manipulator.acl.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Util\AdminAclManipulator A Sonata\AdminBundle\Util\AdminAclManipulator instance.
     */
    protected function getSonata_Admin_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminAclManipulator('Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }

    /**
     * Gets the 'sonata.admin.object.manipulator.acl.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Util\AdminObjectAclManipulator A Sonata\AdminBundle\Util\AdminObjectAclManipulator instance.
     */
    protected function getSonata_Admin_Object_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.object.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminObjectAclManipulator($this->get('form.factory'), 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }

    /**
     * Gets the 'sonata.admin.pool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Admin\Pool A Sonata\AdminBundle\Admin\Pool instance.
     */
    protected function getSonata_Admin_PoolService()
    {
        $this->services['sonata.admin.pool'] = $instance = new \Sonata\AdminBundle\Admin\Pool($this, 'Sonata Admin', 'bundles/sonataadmin/logo_title.png', array('html5_validate' => true, 'confirm_exit' => true, 'use_select2' => true, 'use_icheck' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'dropdown_number_groups_per_colums' => 2, 'title_mode' => 'both', 'javascripts' => array(0 => 'bundles/sonataadmin/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js', 2 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 3 => 'bundles/sonataadmin/vendor/bootstrap/dist/js/bootstrap.min.js', 4 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 5 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 6 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 7 => 'bundles/sonataadmin/jquery/jquery.form.js', 8 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 9 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 10 => 'bundles/sonataadmin/vendor/select2/select2.min.js', 11 => 'bundles/sonataadmin/App.js', 12 => 'bundles/sonataadmin/Admin.js'), 'stylesheets' => array(0 => 'bundles/sonataadmin/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonataadmin/vendor/AdminLTE/css/font-awesome.min.css', 2 => 'bundles/sonataadmin/vendor/AdminLTE/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/AdminLTE/css/AdminLTE.css', 4 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 5 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 6 => 'bundles/sonataadmin/vendor/select2/select2.css', 7 => 'bundles/sonataadmin/vendor/select2/select2-bootstrap.css', 8 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 9 => 'bundles/sonataadmin/css/styles.css', 10 => 'bundles/sonataadmin/css/layout.css')), array());

        $instance->setTemplates(array('layout' => 'AcmeBasicCmsBundle::admin_layout.html.twig', 'user_block' => 'SonataAdminBundle:Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig'));
        $instance->setAdminServiceIds(array(0 => 'acme.basic_cms.admin.page', 1 => 'acme.basic_cms.admin.comment', 2 => 'acme.basic_cms.admin.post'));
        $instance->setAdminGroups(array('Basic CMS' => array('label' => 'Basic CMS', 'label_catalogue' => 'SonataAdminBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'items' => array(0 => 'acme.basic_cms.admin.page', 1 => 'acme.basic_cms.admin.comment', 2 => 'acme.basic_cms.admin.post'))));
        $instance->setAdminClasses(array('Acme\\BasicCmsBundle\\Document\\Page' => array(0 => 'acme.basic_cms.admin.page'), 'Acme\\BasicCmsBundle\\Document\\Comment' => array(0 => 'acme.basic_cms.admin.comment'), 'Acme\\BasicCmsBundle\\Document\\Post' => array(0 => 'acme.basic_cms.admin.post')));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.route.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\RoutesCache A Sonata\AdminBundle\Route\RoutesCache instance.
     */
    protected function getSonata_Admin_Route_CacheService()
    {
        return $this->services['sonata.admin.route.cache'] = new \Sonata\AdminBundle\Route\RoutesCache((__DIR__.'/sonata/admin'), true);
    }

    /**
     * Gets the 'sonata.admin.route.cache_warmup' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\RoutesCacheWarmUp A Sonata\AdminBundle\Route\RoutesCacheWarmUp instance.
     */
    protected function getSonata_Admin_Route_CacheWarmupService()
    {
        return $this->services['sonata.admin.route.cache_warmup'] = new \Sonata\AdminBundle\Route\RoutesCacheWarmUp($this->get('sonata.admin.route.cache'), $this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.route.default_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\DefaultRouteGenerator A Sonata\AdminBundle\Route\DefaultRouteGenerator instance.
     */
    protected function getSonata_Admin_Route_DefaultGeneratorService()
    {
        return $this->services['sonata.admin.route.default_generator'] = new \Sonata\AdminBundle\Route\DefaultRouteGenerator($this->get('cmf_routing.router'), $this->get('sonata.admin.route.cache'));
    }

    /**
     * Gets the 'sonata.admin.route.path_info' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\PathInfoBuilder A Sonata\AdminBundle\Route\PathInfoBuilder instance.
     */
    protected function getSonata_Admin_Route_PathInfoService()
    {
        return $this->services['sonata.admin.route.path_info'] = new \Sonata\AdminBundle\Route\PathInfoBuilder($this->get('sonata.admin.audit.manager'));
    }

    /**
     * Gets the 'sonata.admin.route.path_info_slashes' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Route\PathInfoBuilderSlashes A Sonata\DoctrinePHPCRAdminBundle\Route\PathInfoBuilderSlashes instance.
     */
    protected function getSonata_Admin_Route_PathInfoSlashesService()
    {
        return $this->services['sonata.admin.route.path_info_slashes'] = new \Sonata\DoctrinePHPCRAdminBundle\Route\PathInfoBuilderSlashes();
    }

    /**
     * Gets the 'sonata.admin.route.query_string' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\QueryStringBuilder A Sonata\AdminBundle\Route\QueryStringBuilder instance.
     */
    protected function getSonata_Admin_Route_QueryStringService()
    {
        return $this->services['sonata.admin.route.query_string'] = new \Sonata\AdminBundle\Route\QueryStringBuilder($this->get('sonata.admin.audit.manager'));
    }

    /**
     * Gets the 'sonata.admin.route_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\AdminPoolLoader A Sonata\AdminBundle\Route\AdminPoolLoader instance.
     */
    protected function getSonata_Admin_RouteLoaderService()
    {
        return $this->services['sonata.admin.route_loader'] = new \Sonata\AdminBundle\Route\AdminPoolLoader($this->get('sonata.admin.pool'), array(0 => 'acme.basic_cms.admin.page', 1 => 'acme.basic_cms.admin.comment', 2 => 'acme.basic_cms.admin.post'), $this);
    }

    /**
     * Gets the 'sonata.admin.search.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Search\SearchHandler A Sonata\AdminBundle\Search\SearchHandler instance.
     */
    protected function getSonata_Admin_Search_HandlerService()
    {
        return $this->services['sonata.admin.search.handler'] = new \Sonata\AdminBundle\Search\SearchHandler($this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.security.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler A Sonata\AdminBundle\Security\Handler\NoopSecurityHandler instance.
     */
    protected function getSonata_Admin_Security_HandlerService()
    {
        return $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler();
    }

    /**
     * Gets the 'sonata.admin.twig.doctrine_phpcr_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Twig\Extension\SonataDoctrinePHPCRAdminExtension A Sonata\DoctrinePHPCRAdminBundle\Twig\Extension\SonataDoctrinePHPCRAdminExtension instance.
     */
    protected function getSonata_Admin_Twig_DoctrinePhpcrExtensionService()
    {
        return $this->services['sonata.admin.twig.doctrine_phpcr_extension'] = new \Sonata\DoctrinePHPCRAdminBundle\Twig\Extension\SonataDoctrinePHPCRAdminExtension();
    }

    /**
     * Gets the 'sonata.admin.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension A Sonata\AdminBundle\Twig\Extension\SonataAdminExtension instance.
     */
    protected function getSonata_Admin_Twig_ExtensionService()
    {
        return $this->services['sonata.admin.twig.extension'] = new \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension($this->get('sonata.admin.pool'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sonata.admin.validator.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Validator\InlineValidator A Sonata\AdminBundle\Validator\InlineValidator instance.
     */
    protected function getSonata_Admin_Validator_InlineService()
    {
        return $this->services['sonata.admin.validator.inline'] = new \Sonata\AdminBundle\Validator\InlineValidator($this, $this->get('validator.validator_factory'));
    }

    /**
     * Gets the 'sonata.block.cache.handler.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Cache\HttpCacheHandler A Sonata\BlockBundle\Cache\HttpCacheHandler instance.
     */
    protected function getSonata_Block_Cache_Handler_DefaultService()
    {
        return $this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler();
    }

    /**
     * Gets the 'sonata.block.cache.handler.noop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Cache\NoopHttpCacheHandler A Sonata\BlockBundle\Cache\NoopHttpCacheHandler instance.
     */
    protected function getSonata_Block_Cache_Handler_NoopService()
    {
        return $this->services['sonata.block.cache.handler.noop'] = new \Sonata\BlockBundle\Cache\NoopHttpCacheHandler();
    }

    /**
     * Gets the 'sonata.block.context_manager.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\BlockContextManager A Sonata\BlockBundle\Block\BlockContextManager instance.
     */
    protected function getSonata_Block_ContextManager_DefaultService()
    {
        return $this->services['sonata.block.context_manager.default'] = new \Sonata\BlockBundle\Block\BlockContextManager($this->get('sonata.block.loader.chain'), $this->get('sonata.block.manager'), array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop')), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sonata.block.exception.filter.debug_only' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter A Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter instance.
     */
    protected function getSonata_Block_Exception_Filter_DebugOnlyService()
    {
        return $this->services['sonata.block.exception.filter.debug_only'] = new \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter(true);
    }

    /**
     * Gets the 'sonata.block.exception.filter.ignore_block_exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter A Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter instance.
     */
    protected function getSonata_Block_Exception_Filter_IgnoreBlockExceptionService()
    {
        return $this->services['sonata.block.exception.filter.ignore_block_exception'] = new \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter('Sonata\\BlockBundle\\Exception\\BlockExceptionInterface');
    }

    /**
     * Gets the 'sonata.block.exception.filter.keep_all' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\KeepAllFilter A Sonata\BlockBundle\Exception\Filter\KeepAllFilter instance.
     */
    protected function getSonata_Block_Exception_Filter_KeepAllService()
    {
        return $this->services['sonata.block.exception.filter.keep_all'] = new \Sonata\BlockBundle\Exception\Filter\KeepAllFilter();
    }

    /**
     * Gets the 'sonata.block.exception.filter.keep_none' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter A Sonata\BlockBundle\Exception\Filter\KeepNoneFilter instance.
     */
    protected function getSonata_Block_Exception_Filter_KeepNoneService()
    {
        return $this->services['sonata.block.exception.filter.keep_none'] = new \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter();
    }

    /**
     * Gets the 'sonata.block.exception.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\InlineRenderer A Sonata\BlockBundle\Exception\Renderer\InlineRenderer instance.
     */
    protected function getSonata_Block_Exception_Renderer_InlineService()
    {
        return $this->services['sonata.block.exception.renderer.inline'] = new \Sonata\BlockBundle\Exception\Renderer\InlineRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception.html.twig');
    }

    /**
     * Gets the 'sonata.block.exception.renderer.inline_debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer A Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer instance.
     */
    protected function getSonata_Block_Exception_Renderer_InlineDebugService()
    {
        return $this->services['sonata.block.exception.renderer.inline_debug'] = new \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception_debug.html.twig', true, true);
    }

    /**
     * Gets the 'sonata.block.exception.renderer.throw' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer A Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer instance.
     */
    protected function getSonata_Block_Exception_Renderer_ThrowService()
    {
        return $this->services['sonata.block.exception.renderer.throw'] = new \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer();
    }

    /**
     * Gets the 'sonata.block.exception.strategy.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Strategy\StrategyManager A Sonata\BlockBundle\Exception\Strategy\StrategyManager instance.
     */
    protected function getSonata_Block_Exception_Strategy_ManagerService()
    {
        $this->services['sonata.block.exception.strategy.manager'] = $instance = new \Sonata\BlockBundle\Exception\Strategy\StrategyManager($this, array('debug_only' => 'sonata.block.exception.filter.debug_only', 'ignore_block_exception' => 'sonata.block.exception.filter.ignore_block_exception', 'keep_all' => 'sonata.block.exception.filter.keep_all', 'keep_none' => 'sonata.block.exception.filter.keep_none'), array('inline' => 'sonata.block.exception.renderer.inline', 'inline_debug' => 'sonata.block.exception.renderer.inline_debug', 'throw' => 'sonata.block.exception.renderer.throw'), array(), array());

        $instance->setDefaultFilter('debug_only');
        $instance->setDefaultRenderer('throw');

        return $instance;
    }

    /**
     * Gets the 'sonata.block.form.type.block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Form\Type\ServiceListType A Sonata\BlockBundle\Form\Type\ServiceListType instance.
     */
    protected function getSonata_Block_Form_Type_BlockService()
    {
        return $this->services['sonata.block.form.type.block'] = new \Sonata\BlockBundle\Form\Type\ServiceListType($this->get('sonata.block.manager'));
    }

    /**
     * Gets the 'sonata.block.form.type.container_template' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Form\Type\ContainerTemplateType A Sonata\BlockBundle\Form\Type\ContainerTemplateType instance.
     */
    protected function getSonata_Block_Form_Type_ContainerTemplateService()
    {
        return $this->services['sonata.block.form.type.container_template'] = new \Sonata\BlockBundle\Form\Type\ContainerTemplateType(array('SonataBlockBundle:Block:block_container.html.twig' => 'SonataBlockBundle default template'));
    }

    /**
     * Gets the 'sonata.block.loader.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\BlockLoaderChain A Sonata\BlockBundle\Block\BlockLoaderChain instance.
     */
    protected function getSonata_Block_Loader_ChainService()
    {
        return $this->services['sonata.block.loader.chain'] = new \Sonata\BlockBundle\Block\BlockLoaderChain(array(0 => $this->get('sonata.block.loader.service')));
    }

    /**
     * Gets the 'sonata.block.loader.service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Loader\ServiceLoader A Sonata\BlockBundle\Block\Loader\ServiceLoader instance.
     */
    protected function getSonata_Block_Loader_ServiceService()
    {
        return $this->services['sonata.block.loader.service'] = new \Sonata\BlockBundle\Block\Loader\ServiceLoader(array(0 => 'sonata.admin.block.admin_list'));
    }

    /**
     * Gets the 'sonata.block.renderer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\BlockRenderer A Sonata\BlockBundle\Block\BlockRenderer instance.
     */
    protected function getSonata_Block_Renderer_DefaultService()
    {
        return $this->services['sonata.block.renderer.default'] = new \Sonata\BlockBundle\Block\BlockRenderer($this->get('sonata.block.manager'), $this->get('sonata.block.exception.strategy.manager'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE), true);
    }

    /**
     * Gets the 'sonata.block.service.container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\ContainerBlockService A Sonata\BlockBundle\Block\Service\ContainerBlockService instance.
     */
    protected function getSonata_Block_Service_ContainerService()
    {
        return $this->services['sonata.block.service.container'] = new \Sonata\BlockBundle\Block\Service\ContainerBlockService('sonata.block.container', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.empty' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\EmptyBlockService A Sonata\BlockBundle\Block\Service\EmptyBlockService instance.
     */
    protected function getSonata_Block_Service_EmptyService()
    {
        return $this->services['sonata.block.service.empty'] = new \Sonata\BlockBundle\Block\Service\EmptyBlockService('sonata.block.empty', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\MenuBlockService A Sonata\BlockBundle\Block\Service\MenuBlockService instance.
     */
    protected function getSonata_Block_Service_MenuService()
    {
        return $this->services['sonata.block.service.menu'] = new \Sonata\BlockBundle\Block\Service\MenuBlockService('sonata.block.menu', $this->get('templating'), $this->get('knp_menu.menu_provider'), array());
    }

    /**
     * Gets the 'sonata.block.service.rss' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\RssBlockService A Sonata\BlockBundle\Block\Service\RssBlockService instance.
     */
    protected function getSonata_Block_Service_RssService()
    {
        return $this->services['sonata.block.service.rss'] = new \Sonata\BlockBundle\Block\Service\RssBlockService('sonata.block.rss', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.template' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\TemplateBlockService A Sonata\BlockBundle\Block\Service\TemplateBlockService instance.
     */
    protected function getSonata_Block_Service_TemplateService()
    {
        return $this->services['sonata.block.service.template'] = new \Sonata\BlockBundle\Block\Service\TemplateBlockService('sonata.block.template', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\TextBlockService A Sonata\BlockBundle\Block\Service\TextBlockService instance.
     */
    protected function getSonata_Block_Service_TextService()
    {
        return $this->services['sonata.block.service.text'] = new \Sonata\BlockBundle\Block\Service\TextBlockService('sonata.block.text', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.templating.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Templating\Helper\BlockHelper A Sonata\BlockBundle\Templating\Helper\BlockHelper instance.
     */
    protected function getSonata_Block_Templating_HelperService()
    {
        return $this->services['sonata.block.templating.helper'] = new \Sonata\BlockBundle\Templating\Helper\BlockHelper($this->get('sonata.block.manager'), array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop')), $this->get('sonata.block.renderer.default'), $this->get('sonata.block.context_manager.default'), $this->get('debug.event_dispatcher'), NULL, $this->get('sonata.block.cache.handler.default', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sonata.block.twig.global' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Twig\GlobalVariables A Sonata\BlockBundle\Twig\GlobalVariables instance.
     */
    protected function getSonata_Block_Twig_GlobalService()
    {
        return $this->services['sonata.block.twig.global'] = new \Sonata\BlockBundle\Twig\GlobalVariables(array('block_base' => 'SonataBlockBundle:Block:block_base.html.twig', 'block_container' => 'SonataBlockBundle:Block:block_container.html.twig'));
    }

    /**
     * Gets the 'sonata.core.date.moment_format_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Date\MomentFormatConverter A Sonata\CoreBundle\Date\MomentFormatConverter instance.
     */
    protected function getSonata_Core_Date_MomentFormatConverterService()
    {
        return $this->services['sonata.core.date.moment_format_converter'] = new \Sonata\CoreBundle\Date\MomentFormatConverter();
    }

    /**
     * Gets the 'sonata.core.flashmessage.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\FlashMessage\FlashManager A Sonata\CoreBundle\FlashMessage\FlashManager instance.
     */
    protected function getSonata_Core_Flashmessage_ManagerService()
    {
        return $this->services['sonata.core.flashmessage.manager'] = new \Sonata\CoreBundle\FlashMessage\FlashManager($this->get('session'), $this->get('translator'), array('success' => array('success' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_success' => array('domain' => 'SonataAdminBundle'), 'sonata_user_success' => array('domain' => 'SonataUserBundle'), 'fos_user_success' => array('domain' => 'FOSUserBundle')), 'warning' => array('warning' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_info' => array('domain' => 'SonataAdminBundle')), 'danger' => array('error' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_error' => array('domain' => 'SonataAdminBundle'), 'sonata_user_error' => array('domain' => 'SonataUserBundle'))), array('success' => 'success', 'warning' => 'warning', 'danger' => 'danger'));
    }

    /**
     * Gets the 'sonata.core.flashmessage.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension A Sonata\CoreBundle\Twig\Extension\FlashMessageExtension instance.
     */
    protected function getSonata_Core_Flashmessage_Twig_ExtensionService()
    {
        return $this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension($this->get('sonata.core.flashmessage.manager'));
    }

    /**
     * Gets the 'sonata.core.form.type.array' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\ImmutableArrayType A Sonata\CoreBundle\Form\Type\ImmutableArrayType instance.
     */
    protected function getSonata_Core_Form_Type_ArrayService()
    {
        return $this->services['sonata.core.form.type.array'] = new \Sonata\CoreBundle\Form\Type\ImmutableArrayType();
    }

    /**
     * Gets the 'sonata.core.form.type.boolean' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\BooleanType A Sonata\CoreBundle\Form\Type\BooleanType instance.
     */
    protected function getSonata_Core_Form_Type_BooleanService()
    {
        return $this->services['sonata.core.form.type.boolean'] = new \Sonata\CoreBundle\Form\Type\BooleanType();
    }

    /**
     * Gets the 'sonata.core.form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\CollectionType A Sonata\CoreBundle\Form\Type\CollectionType instance.
     */
    protected function getSonata_Core_Form_Type_CollectionService()
    {
        return $this->services['sonata.core.form.type.collection'] = new \Sonata\CoreBundle\Form\Type\CollectionType();
    }

    /**
     * Gets the 'sonata.core.form.type.color_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\ColorSelectorType A Sonata\CoreBundle\Form\Type\ColorSelectorType instance.
     */
    protected function getSonata_Core_Form_Type_ColorSelectorService()
    {
        return $this->services['sonata.core.form.type.color_selector'] = new \Sonata\CoreBundle\Form\Type\ColorSelectorType();
    }

    /**
     * Gets the 'sonata.core.form.type.date_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DatePickerType A Sonata\CoreBundle\Form\Type\DatePickerType instance.
     */
    protected function getSonata_Core_Form_Type_DatePickerService()
    {
        return $this->services['sonata.core.form.type.date_picker'] = new \Sonata\CoreBundle\Form\Type\DatePickerType($this->get('sonata.core.date.moment_format_converter'));
    }

    /**
     * Gets the 'sonata.core.form.type.date_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateRangeType A Sonata\CoreBundle\Form\Type\DateRangeType instance.
     */
    protected function getSonata_Core_Form_Type_DateRangeService()
    {
        return $this->services['sonata.core.form.type.date_range'] = new \Sonata\CoreBundle\Form\Type\DateRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.date_range_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateRangePickerType A Sonata\CoreBundle\Form\Type\DateRangePickerType instance.
     */
    protected function getSonata_Core_Form_Type_DateRangePickerService()
    {
        return $this->services['sonata.core.form.type.date_range_picker'] = new \Sonata\CoreBundle\Form\Type\DateRangePickerType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.datetime_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimePickerType A Sonata\CoreBundle\Form\Type\DateTimePickerType instance.
     */
    protected function getSonata_Core_Form_Type_DatetimePickerService()
    {
        return $this->services['sonata.core.form.type.datetime_picker'] = new \Sonata\CoreBundle\Form\Type\DateTimePickerType($this->get('sonata.core.date.moment_format_converter'));
    }

    /**
     * Gets the 'sonata.core.form.type.datetime_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimeRangeType A Sonata\CoreBundle\Form\Type\DateTimeRangeType instance.
     */
    protected function getSonata_Core_Form_Type_DatetimeRangeService()
    {
        return $this->services['sonata.core.form.type.datetime_range'] = new \Sonata\CoreBundle\Form\Type\DateTimeRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.datetime_range_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimeRangePickerType A Sonata\CoreBundle\Form\Type\DateTimeRangePickerType instance.
     */
    protected function getSonata_Core_Form_Type_DatetimeRangePickerService()
    {
        return $this->services['sonata.core.form.type.datetime_range_picker'] = new \Sonata\CoreBundle\Form\Type\DateTimeRangePickerType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.equal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\EqualType A Sonata\CoreBundle\Form\Type\EqualType instance.
     */
    protected function getSonata_Core_Form_Type_EqualService()
    {
        return $this->services['sonata.core.form.type.equal'] = new \Sonata\CoreBundle\Form\Type\EqualType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.translatable_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\TranslatableChoiceType A Sonata\CoreBundle\Form\Type\TranslatableChoiceType instance.
     */
    protected function getSonata_Core_Form_Type_TranslatableChoiceService()
    {
        return $this->services['sonata.core.form.type.translatable_choice'] = new \Sonata\CoreBundle\Form\Type\TranslatableChoiceType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.model.adapter.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Model\Adapter\AdapterChain A Sonata\CoreBundle\Model\Adapter\AdapterChain instance.
     */
    protected function getSonata_Core_Model_Adapter_ChainService()
    {
        $this->services['sonata.core.model.adapter.chain'] = $instance = new \Sonata\CoreBundle\Model\Adapter\AdapterChain();

        $instance->addAdapter(new \Sonata\CoreBundle\Model\Adapter\DoctrineORMAdapter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addAdapter(new \Sonata\CoreBundle\Model\Adapter\DoctrinePHPCRAdapter($this->get('doctrine_phpcr', ContainerInterface::NULL_ON_INVALID_REFERENCE)));

        return $instance;
    }

    /**
     * Gets the 'sonata.core.slugify.cocur' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocur\Slugify\Slugify A Cocur\Slugify\Slugify instance.
     */
    protected function getSonata_Core_Slugify_CocurService()
    {
        return $this->services['sonata.core.slugify.cocur'] = new \Cocur\Slugify\Slugify();
    }

    /**
     * Gets the 'sonata.core.slugify.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Component\NativeSlugify A Sonata\CoreBundle\Component\NativeSlugify instance.
     */
    protected function getSonata_Core_Slugify_NativeService()
    {
        return $this->services['sonata.core.slugify.native'] = new \Sonata\CoreBundle\Component\NativeSlugify();
    }

    /**
     * Gets the 'sonata.core.twig.extension.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Extensions_Extension_Text A Twig_Extensions_Extension_Text instance.
     */
    protected function getSonata_Core_Twig_Extension_TextService()
    {
        return $this->services['sonata.core.twig.extension.text'] = new \Twig_Extensions_Extension_Text();
    }

    /**
     * Gets the 'sonata.core.twig.extension.wrapping' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\FormTypeExtension A Sonata\CoreBundle\Twig\Extension\FormTypeExtension instance.
     */
    protected function getSonata_Core_Twig_Extension_WrappingService()
    {
        return $this->services['sonata.core.twig.extension.wrapping'] = new \Sonata\CoreBundle\Twig\Extension\FormTypeExtension('standard');
    }

    /**
     * Gets the 'sonata.core.twig.status_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\StatusExtension A Sonata\CoreBundle\Twig\Extension\StatusExtension instance.
     */
    protected function getSonata_Core_Twig_StatusExtensionService()
    {
        $this->services['sonata.core.twig.status_extension'] = $instance = new \Sonata\CoreBundle\Twig\Extension\StatusExtension();

        $instance->addStatusService($this->get('sonata.core.flashmessage.manager'));

        return $instance;
    }

    /**
     * Gets the 'sonata.core.twig.template_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\TemplateExtension A Sonata\CoreBundle\Twig\Extension\TemplateExtension instance.
     */
    protected function getSonata_Core_Twig_TemplateExtensionService()
    {
        return $this->services['sonata.core.twig.template_extension'] = new \Sonata\CoreBundle\Twig\Extension\TemplateExtension(true, $this->get('translator'), $this->get('sonata.core.model.adapter.chain'));
    }

    /**
     * Gets the 'sonata.core.validator.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Validator\InlineValidator A Sonata\CoreBundle\Validator\InlineValidator instance.
     */
    protected function getSonata_Core_Validator_InlineService()
    {
        return $this->services['sonata.core.validator.inline'] = new \Sonata\CoreBundle\Validator\InlineValidator($this, $this->get('validator.validator_factory'));
    }

    /**
     * Gets the 'sonata_admin_doctrine_phpcr.tree_block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrinePHPCRAdminBundle\Block\TreeBlockService A Sonata\DoctrinePHPCRAdminBundle\Block\TreeBlockService instance.
     */
    protected function getSonataAdminDoctrinePhpcr_TreeBlockService()
    {
        return $this->services['sonata_admin_doctrine_phpcr.tree_block'] = new \Sonata\DoctrinePHPCRAdminBundle\Block\TreeBlockService('sonata_admin_doctrine_phpcr.tree_block', $this->get('templating'), array());
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance.
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance.
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Mailer A Swift_Mailer instance.
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the 'swiftmailer.mailer.default.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Plugins_MessageLogger A Swift_Plugins_MessageLogger instance.
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.spool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_MemorySpool A Swift_MemorySpool instance.
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_SpoolTransport A Swift_Transport_SpoolTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));

        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);

        return $instance;
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine A Symfony\Bundle\TwigBundle\TwigEngine instance.
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance.
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper instance.
     */
    protected function getTemplating_Helper_AssetsService()
    {
        return $this->services['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper($this->get('assets.packages'), array());
    }

    /**
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance.
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this->get('security.logout_url_generator'));
    }

    /**
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance.
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance.
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance.
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance.
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance.
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance.
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance.
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance.
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance.
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance.
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance.
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance.
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance.
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance.
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance.
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance.
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /**
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance.
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance.
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance.
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance.
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance.
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance.
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance.
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance.
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance.
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance.
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance.
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance.
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the 'translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator A Symfony\Component\Translation\DataCollectorTranslator instance.
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(new \Symfony\Component\Translation\LoggingTranslator($this->get('translator.default'), $this->get('monolog.logger.translation')));
    }

    /**
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance.
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true, 'resource_files' => array('hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.tr.xliff')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.bg.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.bg.xliff'), 4 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/gregwar_captcha.bg.yml'), 5 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/validators.bg.yml')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/doctrine-phpcr-admin-bundle/Resources/translations/SonataDoctrinePHPCRAdmin.sl.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.sl.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.sl.xliff'), 6 => ($this->targetDirs[3].'/vendor/symfony-cmf/core-bundle/Resources/translations/CmfCoreBundle.sl.xliff'), 7 => ($this->targetDirs[3].'/vendor/symfony-cmf/menu-bundle/Resources/translations/CmfMenuBundle.sl.xliff'), 8 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sl.xliff')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pt.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pt.xliff'), 4 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pt.xliff')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.lt.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.lt.xliff')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.da.xliff')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.uk.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.uk.xliff'), 4 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.uk.xliff'), 5 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/gregwar_captcha.uk.yml'), 6 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/validators.uk.yml')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Latn.xliff')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/doctrine-phpcr-admin-bundle/Resources/translations/SonataDoctrinePHPCRAdmin.cs.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.cs.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.cs.xliff'), 6 => ($this->targetDirs[3].'/vendor/symfony-cmf/core-bundle/Resources/translations/CmfCoreBundle.cs.xliff'), 7 => ($this->targetDirs[3].'/vendor/symfony-cmf/menu-bundle/Resources/translations/CmfMenuBundle.cs.xliff'), 8 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.cs.xliff'), 9 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/validators.cs.yml'), 10 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/gregwar_captcha.cs.yml')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ja.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ja.xliff')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sv.xlf')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.eu.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.eu.xliff')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ca.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ca.xliff'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ca.xliff')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Resources/translations/CmfRoutingBundle.nl.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.nl.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.nl.xliff'), 6 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.nl.xliff'), 7 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/validators.nl.yml'), 8 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/gregwar_captcha.nl.yml')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.fa.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.fa.xliff'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fa.xliff')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.gl.xlf')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/doctrine-phpcr-admin-bundle/Resources/translations/SonataDoctrinePHPCRAdmin.sk.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.sk.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.sk.xliff'), 6 => ($this->targetDirs[3].'/vendor/symfony-cmf/core-bundle/Resources/translations/CmfCoreBundle.sk.xliff'), 7 => ($this->targetDirs[3].'/vendor/symfony-cmf/menu-bundle/Resources/translations/CmfMenuBundle.sk.xliff'), 8 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sk.xliff')), 'af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Resources/translations/CmfRoutingBundle.en.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/doctrine-phpcr-admin-bundle/Resources/translations/SonataDoctrinePHPCRAdmin.en.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.en.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.en.xliff'), 7 => ($this->targetDirs[3].'/vendor/symfony-cmf/core-bundle/Resources/translations/CmfCoreBundle.en.xliff'), 8 => ($this->targetDirs[3].'/vendor/symfony-cmf/menu-bundle/Resources/translations/CmfMenuBundle.en.xliff'), 9 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.en.xliff'), 10 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/gregwar_captcha.en.yml'), 11 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/validators.en.yml')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sr_Cyrl.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Cyrl.xliff')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.no.xlf')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ar.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ar.xliff'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ar.xliff')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf')), 'nb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.hr.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.hr.xliff'), 4 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.hr.xliff')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.th.xliff')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.fi.xliff')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.lb.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.lb.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.lb.xliff')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.hu.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.hu.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.hu.xliff')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.az.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.az.xliff')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ru.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ru.xliff'), 5 => ($this->targetDirs[3].'/vendor/symfony-cmf/core-bundle/Resources/translations/CmfCoreBundle.ru.xliff'), 6 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ru.xliff'), 7 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/validators.ru.yml'), 8 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/gregwar_captcha.ru.yml')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.el.xlf')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pt_BR.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pt_BR.xliff'), 5 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/gregwar_captcha.pt_BR.yml'), 6 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/validators.pt_BR.yml')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Resources/translations/CmfRoutingBundle.it.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/doctrine-phpcr-admin-bundle/Resources/translations/SonataDoctrinePHPCRAdmin.it.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.it.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.it.xliff'), 7 => ($this->targetDirs[3].'/vendor/symfony-cmf/core-bundle/Resources/translations/CmfCoreBundle.it.xliff'), 8 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.it.xliff'), 9 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/gregwar_captcha.it.yml'), 10 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/validators.it.yml')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ro.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ro.xliff'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ro.xliff'), 6 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/gregwar_captcha.ro.yml'), 7 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/validators.ro.yml')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.es.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.es.xliff'), 5 => ($this->targetDirs[3].'/vendor/symfony-cmf/core-bundle/Resources/translations/CmfCoreBundle.es.xliff'), 6 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.es.xliff'), 7 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/validators.es.yml'), 8 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/gregwar_captcha.es.yml')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.he.xlf')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Resources/translations/CmfRoutingBundle.fr.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/doctrine-phpcr-admin-bundle/Resources/translations/SonataDoctrinePHPCRAdmin.fr.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.fr.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.fr.xliff'), 7 => ($this->targetDirs[3].'/vendor/symfony-cmf/core-bundle/Resources/translations/CmfCoreBundle.fr.xliff'), 8 => ($this->targetDirs[3].'/vendor/symfony-cmf/menu-bundle/Resources/translations/CmfMenuBundle.fr.xliff'), 9 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fr.xliff'), 10 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/validators.fr.yml'), 11 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/gregwar_captcha.fr.yml')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.zh_CN.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.zh_CN.xliff'), 4 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.zh_CN.xliff'), 5 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/validators.zh_CN.yml'), 6 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/gregwar_captcha.zh_CN.yml')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Resources/translations/CmfRoutingBundle.pl.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pl.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pl.xliff'), 6 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pl.xliff'), 7 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/gregwar_captcha.pl.yml'), 8 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/validators.pl.yml')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Resources/translations/CmfRoutingBundle.de.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/doctrine-phpcr-admin-bundle/Resources/translations/SonataDoctrinePHPCRAdmin.de.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.de.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.de.xliff'), 7 => ($this->targetDirs[3].'/vendor/symfony-cmf/core-bundle/Resources/translations/CmfCoreBundle.de.xliff'), 8 => ($this->targetDirs[3].'/vendor/symfony-cmf/menu-bundle/Resources/translations/CmfMenuBundle.de.xliff'), 9 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.de.xliff'), 10 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/gregwar_captcha.de.yml'), 11 => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/translations/validators.de.yml')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ua.xlf')))), array());

        $instance->setFallbackLocales(array(0 => 'en'));

        return $instance;
    }

    /**
     * Gets the 'translator_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener A Symfony\Component\HttpKernel\EventListener\TranslatorListener instance.
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator'), $this->get('request_stack'));
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Environment A Twig_Environment instance.
     */
    protected function getTwigService()
    {
        $a = $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('request_stack');
        $c = $this->get('fragment.handler');
        $d = $this->get('markdown.parser');

        $e = new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($b);

        $f = new \Knp\Bundle\MarkdownBundle\Helper\MarkdownHelper($d);
        $f->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Min(), 'min');
        $f->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Light(), 'light');
        $f->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Medium(), 'medium');
        $f->addParser($d, 'default');
        $f->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Flavored(), 'flavored');

        $g = new \Symfony\Bridge\Twig\AppVariable();
        $g->setEnvironment('dev');
        $g->setDebug(true);
        if ($this->has('security.token_storage')) {
            $g->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $g->setRequestStack($b);
        }
        $g->setContainer($this);

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig', 1 => 'AcmeBasicCmsBundle::form.html.twig'), 'autoescape' => 'filename', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($this->get('security.logout_url_generator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension($this->get('twig.profile'), $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages'), $e));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, $this->targetDirs[2], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('cmf_routing.router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($c));
        $instance->addExtension($e);
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'GregwarCaptchaBundle::captcha.html.twig', 1 => 'form_div_layout.html.twig', 2 => 'AcmeBasicCmsBundle::form.html.twig', 3 => 'CmfCoreBundle:Form:checkbox_url_label_form_type.html.twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Twig_Extension_Debug());
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), true, array(), array(), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension($this->get('sonata.block.templating.helper')));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'))));
        $instance->addExtension($this->get('sonata.admin.twig.doctrine_phpcr_extension'));
        $instance->addExtension($this->get('sonata.admin.twig.extension'));
        $instance->addExtension($this->get('sonata.core.flashmessage.twig.extension'));
        $instance->addExtension($this->get('sonata.core.twig.extension.wrapping'));
        $instance->addExtension($this->get('sonata.core.twig.extension.text'));
        $instance->addExtension($this->get('sonata.core.twig.status_extension'));
        $instance->addExtension($this->get('sonata.core.twig.template_extension'));
        $instance->addExtension(new \Symfony\Cmf\Bundle\CoreBundle\Twig\Extension\CmfExtension(new \Symfony\Cmf\Bundle\CoreBundle\Templating\Helper\CmfHelper($this->get('cmf_core.publish_workflow.checker.default', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension($this));
        $instance->addExtension(new \Knp\Bundle\MarkdownBundle\Twig\Extension\MarkdownTwigExtension($f));
        $instance->addExtension($this->get('twig.extension.acme.demo'));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension());
        $instance->addGlobal('app', $g);
        $instance->addGlobal('sonata_block', $this->get('sonata.block.twig.global'));
        call_user_func(array(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','), 'configure'), $instance);

        return $instance;
    }

    /**
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance.
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance.
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance.
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Doctrine/Bundle/DoctrineBundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/phpcr-bundle/Resources/views'), 'DoctrinePHPCR');
        $instance->addPath(($this->targetDirs[3].'/src/Acme/BasicCmsBundle/Resources/views'), 'AcmeBasicCms');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/views'), 'SonataBlock');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/doctrine-phpcr-admin-bundle/Resources/views'), 'SonataDoctrinePHPCRAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/views'), 'SonataAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/views'), 'SonataCore');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony-cmf/core-bundle/Resources/views'), 'CmfCore');
        $instance->addPath(($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/Resources/views'), 'GregwarCaptcha');
        $instance->addPath(($this->targetDirs[3].'/src/Acme/DemoBundle/Resources/views'), 'AcmeDemo');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views'), 'SensioDistribution');
        $instance->addPath(($this->targetDirs[2].'/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));
        $instance->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'));

        return $instance;
    }

    /**
     * Gets the 'twig.profile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Profiler_Profile A Twig_Profiler_Profile instance.
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig_Profiler_Profile();
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance.
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance.
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface A Symfony\Component\Validator\Validator\ValidatorInterface instance.
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /**
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance.
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory($this->get('validator.validator_factory'));
        $instance->setTranslator($this->get('translator'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Resources/config/validation.xml'), 2 => ($this->targetDirs[3].'/vendor/symfony-cmf/menu-bundle/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer')));

        return $instance;
    }

    /**
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance.
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance.
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }

    /**
     * Gets the 'web_profiler.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController A Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController instance.
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), true);
    }

    /**
     * Gets the 'web_profiler.controller.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController A Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController instance.
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController($this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), array('data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig'), 'data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.ajax' => array(0 => 'ajax', 1 => '@WebProfiler/Collector/ajax.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'data_collector.translation' => array(0 => 'translation', 1 => '@WebProfiler/Collector/translation.html.twig'), 'data_collector.twig' => array(0 => 'twig', 1 => '@WebProfiler/Collector/twig.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => '@Security/Collector/security.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => 'DoctrineBundle:Collector:db'), 'doctrine_phpcr.data_collector' => array(0 => 'phpcr', 1 => 'DoctrinePHPCRBundle:Collector:phpcr'), 'sonata.block.data_collector' => array(0 => 'block', 1 => 'SonataBlockBundle:Profiler:block.html.twig')), 'bottom');
    }

    /**
     * Gets the 'web_profiler.controller.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController A Symfony\Bundle\WebProfilerBundle\Controller\RouterController instance.
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), $this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'web_profiler.debug_toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener instance.
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('twig'), true, 2, 'bottom', $this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), '^/bundles|^/_wdt');
    }

    /**
     * Gets the 'white_october_pagerfanta.view_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Pagerfanta\View\ViewFactory A Pagerfanta\View\ViewFactory instance.
     */
    protected function getWhiteOctoberPagerfanta_ViewFactoryService()
    {
        $a = $this->get('translator');

        $b = new \Pagerfanta\View\DefaultView();

        $c = new \Pagerfanta\View\TwitterBootstrapView();

        $d = new \Pagerfanta\View\TwitterBootstrap3View();

        $this->services['white_october_pagerfanta.view_factory'] = $instance = new \Pagerfanta\View\ViewFactory(array());

        $instance->add(array('default' => $b, 'default_translated' => new \WhiteOctober\PagerfantaBundle\View\DefaultTranslatedView($b, $a), 'twitter_bootstrap' => $c, 'twitter_bootstrap3' => $d, 'twitter_bootstrap3_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrap3TranslatedView($d, $a), 'twitter_bootstrap_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrapTranslatedView($c, $a)));

        return $instance;
    }

    /**
     * Updates the 'request' service.
     */
    protected function synchronizeRequestService()
    {
        if ($this->initialized('acme.basic_cms.menu_provider')) {
            $this->get('acme.basic_cms.menu_provider')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('cmf_routing.dynamic_router')) {
            $this->get('cmf_routing.dynamic_router')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('cmf_menu.current_item_voter.uri_prefix')) {
            $this->get('cmf_menu.current_item_voter.uri_prefix')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
    }

    /**
     * Gets the 'annotations.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader A Doctrine\Common\Annotations\AnnotationReader instance.
     */
    protected function getAnnotations_ReaderService()
    {
        return $this->services['annotations.reader'] = new \Doctrine\Common\Annotations\AnnotationReader();
    }

    /**
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance.
     */
    protected function getAssetic_AssetFactoryService()
    {
        $this->services['assetic.asset_factory'] = $instance = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), ($this->targetDirs[2].'/../web'), true);

        $instance->addWorker(new \Symfony\Bundle\AsseticBundle\Factory\Worker\UseControllerWorker());

        return $instance;
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance.
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver A Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver instance.
     */
    protected function getControllerResolverService()
    {
        return $this->services['controller_resolver'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'doctrine.dbal.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bridge\Doctrine\Logger\DbalLogger A Symfony\Bridge\Doctrine\Logger\DbalLogger instance.
     */
    protected function getDoctrine_Dbal_LoggerService()
    {
        return $this->services['doctrine.dbal.logger'] = new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.dantleech2' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance.
     */
    protected function getDoctrine_Dbal_Logger_Profiling_Dantleech2Service()
    {
        return $this->services['doctrine.dbal.logger.profiling.dantleech2'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance.
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance.
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager A Symfony\Component\Security\Core\Authorization\AccessDecisionManager instance.
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('security.authentication.trust_resolver');
        $b = $this->get('security.role_hierarchy');

        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => new \Symfony\Cmf\Bundle\CoreBundle\PublishWorkflow\Voter\PublishableVoter($this), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $a, $b), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($b), 3 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($a)), 'affirmative', false, true);
    }

    /**
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance.
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('security.user.provider.concrete.in_memory'), new \Symfony\Component\Security\Core\User\UserChecker(), 'secured_area', $this->get('security.encoder_factory'), true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5657423ecfb90')), true);

        $instance->setEventDispatcher($this->get('debug.event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance.
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the 'security.logout_url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator A Symfony\Component\Security\Http\Logout\LogoutUrlGenerator instance.
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        return $this->services['security.logout_url_generator'] = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance.
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_USER'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_ADMIN', 2 => 'ROLE_ALLOWED_TO_SWITCH')));
    }

    /**
     * Gets the 'security.user.provider.concrete.in_memory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\User\InMemoryUserProvider A Symfony\Component\Security\Core\User\InMemoryUserProvider instance.
     */
    protected function getSecurity_User_Provider_Concrete_InMemoryService()
    {
        $this->services['security.user.provider.concrete.in_memory'] = $instance = new \Symfony\Component\Security\Core\User\InMemoryUserProvider();

        $instance->createUser(new \Symfony\Component\Security\Core\User\User('admin', 'dan3bleach', array(0 => 'ROLE_ADMIN')));

        return $instance;
    }

    /**
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance.
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the 'sonata.block.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Sonata\BlockBundle\Block\BlockServiceManager A Sonata\BlockBundle\Block\BlockServiceManager instance.
     */
    protected function getSonata_Block_ManagerService()
    {
        $this->services['sonata.block.manager'] = $instance = new \Sonata\BlockBundle\Block\BlockServiceManager($this, true, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->add('sonata.block.service.container', 'sonata.block.service.container', array());
        $instance->add('sonata.block.service.empty', 'sonata.block.service.empty', array());
        $instance->add('sonata.block.service.text', 'sonata.block.service.text', array());
        $instance->add('sonata.block.service.rss', 'sonata.block.service.rss', array());
        $instance->add('sonata.block.service.menu', 'sonata.block.service.menu', array());
        $instance->add('sonata.block.service.template', 'sonata.block.service.template', array());
        $instance->add('sonata_admin_doctrine_phpcr.tree_block', 'sonata_admin_doctrine_phpcr.tree_block', array());
        $instance->add('sonata.admin.block.admin_list', 'sonata.admin.block.admin_list', array(0 => 'admin'));
        $instance->add('sonata.admin.block.search_result', 'sonata.admin.block.search_result', array());

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.eventdispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Swift_Events_SimpleEventDispatcher A Swift_Events_SimpleEventDispatcher instance.
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance.
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /**
     * Gets the 'twig.extension.acme.demo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Acme\DemoBundle\Twig\Extension\DemoExtension A Acme\DemoBundle\Twig\Extension\DemoExtension instance.
     */
    protected function getTwig_Extension_Acme_DemoService()
    {
        return $this->services['twig.extension.acme.demo'] = new \Acme\DemoBundle\Twig\Extension\DemoExtension($this->get('twig.loader'));
    }

    /**
     * Gets the 'validator.validator_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory A Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory instance.
     */
    protected function getValidator_ValidatorFactoryService()
    {
        return $this->services['validator.validator_factory'] = new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'doctrine_phpcr.odm.validator.valid_phpcr_odm' => 'doctrine_phpcr.odm.validator.valid_phpcr_odm', 'cmf_routing.validator.route_defaults' => 'cmf_routing.validator.route_defaults', 'sonata.admin.validator.inline' => 'sonata.admin.validator.inline', 'sonata.core.validator.inline' => 'sonata.core.validator.inline'));
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => $this->targetDirs[2],
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'/logs'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'DoctrinePHPCRBundle' => 'Doctrine\\Bundle\\PHPCRBundle\\DoctrinePHPCRBundle',
                'AcmeBasicCmsBundle' => 'Acme\\BasicCmsBundle\\AcmeBasicCmsBundle',
                'CmfRoutingBundle' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\CmfRoutingBundle',
                'CmfRoutingAutoBundle' => 'Symfony\\Cmf\\Bundle\\RoutingAutoBundle\\CmfRoutingAutoBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'SonatajQueryBundle' => 'Sonata\\jQueryBundle\\SonatajQueryBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'SonataDoctrinePHPCRAdminBundle' => 'Sonata\\DoctrinePHPCRAdminBundle\\SonataDoctrinePHPCRAdminBundle',
                'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle',
                'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle',
                'CmfCoreBundle' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\CmfCoreBundle',
                'CmfMenuBundle' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\CmfMenuBundle',
                'DTLPhpcrTaxonomyBundle' => 'DTL\\PhpcrTaxonomyBundle\\DTLPhpcrTaxonomyBundle',
                'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle',
                'DTLExpressionCaptchaFormTypeBundle' => 'DTL\\ExpressionCaptchaFormTypeBundle\\DTLExpressionCaptchaFormTypeBundle',
                'GregwarCaptchaBundle' => 'Gregwar\\CaptchaBundle\\GregwarCaptchaBundle',
                'FOSHttpCacheBundle' => 'FOS\\HttpCacheBundle\\FOSHttpCacheBundle',
                'KnpMarkdownBundle' => 'Knp\\Bundle\\MarkdownBundle\\KnpMarkdownBundle',
                'AcmeDemoBundle' => 'Acme\\DemoBundle\\AcmeDemoBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'database_driver' => 'pdo_mysql',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'dtlweb',
            'database_user' => 'root',
            'database_password' => NULL,
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'locale' => 'en',
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'phpcr_backend' => array(
                'type' => 'doctrinedbal',
                'connection' => 'default',
            ),
            'phpcr_workspace' => 'default',
            'phpcr_user' => 'admin',
            'phpcr_pass' => 'admin',
            'site_password' => 'dan3bleach',
            'contact_email' => 'daniel@dantleech.com',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\HIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'en',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'gc_probability' => 1,
            ),
            'session.save_path' => (__DIR__.'/sessions'),
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.form.request_handler.class' => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.helper.assets.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper',
            'templating.helper.code.file_link_format' => NULL,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
            'validator.builder.class' => 'Symfony\\Component\\Validator\\ValidatorBuilderInterface',
            'validator.builder.factory.class' => 'Symfony\\Component\\Validator\\Validation',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.email.class' => 'Symfony\\Component\\Validator\\Constraints\\EmailValidator',
            'validator.translation_domain' => 'validators',
            'validator.api' => '2.5-bc',
            'fragment.listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener',
            'translator.logging' => true,
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener',
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.time.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'data_collector.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector',
            'form.resolved_type_factory.data_collector_proxy.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Proxy\\ResolvedTypeFactoryDataCollectorProxy',
            'form.type_extension.form.data_collector.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension',
            'data_collector.form.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataCollector',
            'data_collector.form.extractor.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataExtractor',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'profiler.storage.username' => '',
            'profiler.storage.password' => '',
            'profiler.storage.lifetime' => 86400,
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appDevUrlMatcher',
            'router.options.generator.cache_class' => 'appDevUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => (__DIR__.'/assetic/routing.yml'),
            'router.cache_class_prefix' => 'appDev',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'debug.debug_handlers_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.error_handler.throw_at' => -1,
            'debug.event_dispatcher.class' => 'Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher',
            'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'),
            'debug.controller_resolver.class' => 'Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access.expression_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.expression_matcher.class' => 'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.expression_language.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.simple_form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener',
            'security.authentication.listener.simple_preauth.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.simple.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.simple_success_failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bridge\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_USER',
                    1 => 'ROLE_ADMIN',
                    2 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
            ),
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.controller.preview_error.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'GregwarCaptchaBundle::captcha.html.twig',
                1 => 'form_div_layout.html.twig',
                2 => 'AcmeBasicCmsBundle::form.html.twig',
                3 => 'CmfCoreBundle:Form:checkbox_url_label_form_type.html.twig',
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.gelfphp.publisher.class' => 'Gelf\\Publisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.syslogudp.class' => 'Monolog\\Handler\\SyslogUdpHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.rollbar.class' => 'Monolog\\Handler\\RollbarHandler',
            'monolog.handler.flowdock.class' => 'Monolog\\Handler\\FlowdockHandler',
            'monolog.handler.browser_console.class' => 'Monolog\\Handler\\BrowserConsoleHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.slack.class' => 'Monolog\\Handler\\SlackHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.handler.logentries.class' => 'Monolog\\Handler\\LogEntriesHandler',
            'monolog.handler.whatfailuregroup.class' => 'Monolog\\Handler\\WhatFailureGroupHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.filter.class' => 'Monolog\\Handler\\FilterHandler',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.handler.elasticsearch.class' => 'Monolog\\Handler\\ElasticSearchHandler',
            'monolog.elastica.client.class' => 'Elastica\\Client',
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => (__DIR__.'/assetic'),
            'assetic.bundles' => array(

            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => true,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => ($this->targetDirs[2].'/../web'),
            'assetic.write_to' => ($this->targetDirs[2].'/../web'),
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.reactjsx.bin' => '/usr/bin/jsx',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(

            ),
            'assetic.controller.class' => 'Symfony\\Bundle\\AsseticBundle\\Controller\\AsseticController',
            'assetic.routing_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Routing\\AsseticLoader',
            'assetic.cache.class' => 'Assetic\\Cache\\FilesystemCache',
            'assetic.use_controller_worker.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Worker\\UseControllerWorker',
            'assetic.request_listener.class' => 'Symfony\\Bundle\\AsseticBundle\\EventListener\\RequestListener',
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
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
                'dantleech2' => 'doctrine.dbal.dantleech2_connection',
            ),
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
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
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
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'doctrine_phpcr.credentials.class' => 'PHPCR\\SimpleCredentials',
            'doctrine_phpcr.class' => 'Doctrine\\Bundle\\PHPCRBundle\\ManagerRegistry',
            'doctrine_phpcr.proxy.class' => 'Doctrine\\Common\\Proxy\\Proxy',
            'doctrine_phpcr.sessions' => array(
                'default' => 'doctrine_phpcr.default_session',
            ),
            'doctrine_phpcr.odm.document_managers' => array(
                'default' => 'doctrine_phpcr.odm.default_document_manager',
            ),
            'doctrine_phpcr.default_session' => 'default',
            'doctrine_phpcr.odm.default_document_manager' => 'default',
            'doctrine_phpcr.console_dumper.class' => 'PHPCR\\Util\\Console\\Helper\\PhpcrConsoleDumperHelper',
            'doctrine_phpcr.initializer_manager.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Initializer\\InitializerManager',
            'doctrine_phpcr.form.type.phpcr_reference.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Form\\Type\\PHPCRReferenceType',
            'doctrine_phpcr.logger.chain.class' => 'Jackalope\\Transport\\Logging\\LoggerChain',
            'doctrine_phpcr.logger.class' => 'Jackalope\\Transport\\Logging\\Psr3Logger',
            'doctrine_phpcr.logger.profiling.class' => 'Jackalope\\Transport\\Logging\\DebugStack',
            'doctrine_phpcr.logger.stop_watch.class' => 'Doctrine\\Bundle\\PHPCRBundle\\DataCollector\\StopWatchLogger',
            'doctrine_phpcr.data_collector.class' => 'Doctrine\\Bundle\\PHPCRBundle\\DataCollector\\PHPCRDataCollector',
            'doctrine_phpcr.session.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine_phpcr.dump_max_line_length' => 120,
            'doctrine_phpcr.jackalope_doctrine_dbal.schema_listener.class' => 'Doctrine\\Bundle\\PHPCRBundle\\EventListener\\JackalopeDoctrineDbalSchemaListener',
            'doctrine_phpcr.jackalope_doctrine_dbal.repository_schema.class' => 'Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema',
            'doctrine_phpcr.odm.configuration.class' => 'Doctrine\\ODM\\PHPCR\\Configuration',
            'doctrine_phpcr.odm.document_manager.class' => 'Doctrine\\ODM\\PHPCR\\DocumentManager',
            'doctrine_phpcr.odm.translation.strategy.attribute.class' => 'Doctrine\\ODM\\PHPCR\\Translation\\TranslationStrategy\\AttributeTranslationStrategy',
            'doctrine_phpcr.odm.translation.strategy.child.class' => 'Doctrine\\ODM\\PHPCR\\Translation\\TranslationStrategy\\ChildTranslationStrategy',
            'doctrine_phpcr.odm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_phpcr.odm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_phpcr.odm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_phpcr.odm.cache.memcache_host' => 'localhost',
            'doctrine_phpcr.odm.cache.memcache_port' => 11211,
            'doctrine_phpcr.odm.cache.memcache_instance.class' => 'Memcache',
            'doctrine_phpcr.odm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_phpcr.odm.cache.memcached_host' => 'localhost',
            'doctrine_phpcr.odm.cache.memcached_port' => 11211,
            'doctrine_phpcr.odm.cache.memcached_instance.class' => 'Memcached',
            'doctrine_phpcr.odm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'form.type_guesser.doctrine_phpcr.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Form\\PhpcrOdmTypeGuesser',
            'doctrine_phpcr.odm.form.path.type.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Form\\Type\\PathType',
            'doctrine_phpcr.odm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine_phpcr.odm.metadata.annotation.class' => 'Doctrine\\ODM\\PHPCR\\Mapping\\Driver\\AnnotationDriver',
            'doctrine_phpcr.odm.metadata.xml.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Mapping\\Driver\\XmlDriver',
            'doctrine_phpcr.odm.metadata.yml.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Mapping\\Driver\\YamlDriver',
            'doctrine_phpcr.odm.metadata.php.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine_phpcr.odm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'doctrine_phpcr.odm.validator.valid_phpcr_odm.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Validator\\Constraints\\ValidPhpcrOdmValidator',
            'doctrine_phpcr.odm.auto_generate_proxy_classes' => true,
            'doctrine_phpcr.odm.proxy_dir' => (__DIR__.'/doctrine/PHPCRProxies'),
            'doctrine_phpcr.odm.proxy_namespace' => 'PHPCRProxies',
            'doctrine_phpcr.odm.namespaces.translation.alias' => 'phpcr_locale',
            'doctrine_phpcr.form.type_guess' => array(

            ),
            'cmf_routing.default_controller' => NULL,
            'cmf_routing.generic_controller' => NULL,
            'cmf_routing.controllers_by_type' => array(

            ),
            'cmf_routing.controllers_by_class' => array(
                'Acme\\BasicCmsBundle\\Document\\LatestBlogPost' => 'Acme\\BasicCmsBundle\\Controller\\DefaultController::latestPostAction',
                'Acme\\BasicCmsBundle\\Document\\ContactPage' => 'Acme\\BasicCmsBundle\\Controller\\DefaultController::contactAction',
                'Acme\\BasicCmsBundle\\Document\\PostIndex' => 'Acme\\BasicCmsBundle\\Controller\\DefaultController::postIndexAction',
                'Acme\\BasicCmsBundle\\Document\\Page' => 'Acme\\BasicCmsBundle\\Controller\\DefaultController::pageAction',
                'Acme\\BasicCmsBundle\\Document\\Post' => 'Acme\\BasicCmsBundle\\Controller\\DefaultController::postAction',
                'cmf_routing_auto.redirect' => 'cmf_routing.redirect_controller:redirectAction',
            ),
            'cmf_routing.templates_by_class' => array(

            ),
            'cmf_routing.uri_filter_regexp' => NULL,
            'cmf_routing.route_collection_limit' => 0,
            'cmf_routing.dynamic.locales' => array(

            ),
            'cmf_routing.dynamic.auto_locale_pattern' => false,
            'cmf_routing.dynamic.limit_candidates' => 20,
            'cmf_routing.dynamic_router.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Routing\\DynamicRouter',
            'cmf_routing.route_model.class' => NULL,
            'cmf_routing.nested_matcher.class' => 'Symfony\\Cmf\\Component\\Routing\\NestedMatcher\\NestedMatcher',
            'cmf_routing.final_matcher.class' => 'Symfony\\Cmf\\Component\\Routing\\NestedMatcher\\UrlMatcher',
            'cmf_routing.url_matcher.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'cmf_routing.generator.class' => 'Symfony\\Cmf\\Component\\Routing\\ContentAwareGenerator',
            'cmf_routing.enhancer.route_content.class' => 'Symfony\\Cmf\\Component\\Routing\\Enhancer\\RouteContentEnhancer',
            'cmf_routing.enhancer.default_controller.class' => 'Symfony\\Cmf\\Component\\Routing\\Enhancer\\FieldPresenceEnhancer',
            'cmf_routing.enhancer.explicit_template.class' => 'Symfony\\Cmf\\Component\\Routing\\Enhancer\\FieldPresenceEnhancer',
            'cmf_routing.enhancer.controllers_by_type.class' => 'Symfony\\Cmf\\Component\\Routing\\Enhancer\\FieldMapEnhancer',
            'cmf_routing.enhancer.field_by_class.class' => 'Symfony\\Cmf\\Component\\Routing\\Enhancer\\FieldByClassEnhancer',
            'cmf_routing.redirect_controller.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Controller\\RedirectController',
            'cmf_routing.phpcr_route_provider.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Doctrine\\Phpcr\\RouteProvider',
            'cmf_routing.phpcr_candidates_prefix.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Doctrine\\Phpcr\\PrefixCandidates',
            'cmf_routing.content_repository.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Doctrine\\Phpcr\\ContentRepository',
            'cmf_routing.phpcrodm_route_idprefix_listener.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Doctrine\\Phpcr\\IdPrefixListener',
            'cmf_routing.phpcrodm_route_locale_listener.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Doctrine\\Phpcr\\LocaleListener',
            'cmf_routing.backend_type_phpcr' => true,
            'cmf_routing.dynamic.persistence.phpcr.route_basepaths' => array(
                0 => '/cms/routes',
                1 => '/cms/routes',
            ),
            'cmf_routing.dynamic.persistence.phpcr.route_basepath' => '/cms/routes',
            'cmf_routing.dynamic.persistence.phpcr.content_basepath' => '/cms/content',
            'cmf_routing.dynamic.persistence.phpcr.manager_name' => NULL,
            'cmf_routing.chain_router.class' => 'Symfony\\Cmf\\Component\\Routing\\ChainRouter',
            'cmf_routing.replace_symfony_router' => true,
            'cmf_routing.route_type_type.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Form\\Type\\RouteTypeType',
            'cmf_routing.validator.route_defaults.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Validator\\Constraints\\RouteDefaultsValidator',
            'cmf_routing_auto.phpcrodm_auto_route_listener.class' => 'Symfony\\Cmf\\Bundle\\RoutingAutoBundle\\Doctrine\\Phpcr\\AutoRouteListener',
            'cmf_routing_auto.auto_route_manager.class' => 'Symfony\\Cmf\\Component\\RoutingAuto\\AutoRouteManager',
            'cmf_routing_auto.service_registry.class' => 'Symfony\\Cmf\\Component\\RoutingAuto\\ServiceRegistry',
            'cmf_routing_auto.uri_generator.class' => 'Symfony\\Cmf\\Component\\RoutingAuto\\UriGenerator',
            'cmf_routing_auto.metadata.loader.yaml.class' => 'Symfony\\Cmf\\Component\\RoutingAuto\\Mapping\\Loader\\YmlFileLoader',
            'cmf_routing_auto.metadata.loader.xml.class' => 'Symfony\\Cmf\\Component\\RoutingAuto\\Mapping\\Loader\\XmlFileLoader',
            'cmf_routing_auto.metadata.loader.delegating.class' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
            'cmf_routing_auto.metadata.loader.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'cmf_routing_auto.metadata.factory.class' => 'Symfony\\Cmf\\Component\\RoutingAuto\\Mapping\\MetadataFactory',
            'cmf_routing_auto.metadata.factory.builder.class' => 'Symfony\\Cmf\\Component\\RoutingAuto\\Mapping\\MetadataFactoryBuilder',
            'cmf_routing_auto.token_provider.content_method.class' => 'Symfony\\Cmf\\Component\\RoutingAuto\\TokenProvider\\ContentMethodProvider',
            'cmf_routing_auto.token_provider.content_datetime.class' => 'Symfony\\Cmf\\Component\\RoutingAuto\\TokenProvider\\ContentDateTimeProvider',
            'cmf_routing_auto.token_provider.content_locale.class' => 'Symfony\\Cmf\\Component\\RoutingAuto\\TokenProvider\\ContentLocaleProvider',
            'cmf_routing_auto.token_provider.container.class' => 'Symfony\\Cmf\\Component\\RoutingAuto\\TokenProvider\\SymfonyContainerParameterProvider',
            'cmf_routing_auto.defunct_route_handler.remove.class' => 'Symfony\\Cmf\\Component\\RoutingAuto\\DefunctRouteHandler\\RemoveDefunctRouteHandler',
            'cmf_routing_auto.defunct_route_handler.leave_redirect.class' => 'Symfony\\Cmf\\Component\\RoutingAuto\\DefunctRouteHandler\\LeaveRedirectDefunctRouteHandler',
            'cmf_routing_auto.defunct_route_handler.delegating.class' => 'Symfony\\Cmf\\Component\\RoutingAuto\\DefunctRouteHandler\\DelegatingDefunctRouteHandler',
            'cmf_routing_auto.conflict_resolver.auto_increment.class' => 'Symfony\\Cmf\\Component\\RoutingAuto\\ConflictResolver\\AutoIncrementConflictResolver',
            'cmf_routing_auto.conflict_resolver.throw_exception.class' => 'Symfony\\Cmf\\Component\\RoutingAuto\\ConflictResolver\\ThrowExceptionConflictResolver',
            'cmf_routing_auto.metadata.loader.resources' => array(
                0 => array(
                    'path' => '../config/routing_auto.yml',
                    'type' => NULL,
                ),
            ),
            'cmf_routing_auto.adapter.phpcr_odm.class' => 'Symfony\\Cmf\\Bundle\\RoutingAutoBundle\\Adapter\\PhpcrOdmAdapter',
            'cmf_routing_auto.persistence.phpcr.route_basepath' => '/cms/routes',
            'cmf_routing_auto.adapter_name' => 'doctrine_phpcr_odm',
            'sonata.block.service.container.class' => 'Sonata\\BlockBundle\\Block\\Service\\ContainerBlockService',
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.service.menu.class' => 'Sonata\\BlockBundle\\Block\\Service\\MenuBlockService',
            'sonata.block.service.template.class' => 'Sonata\\BlockBundle\\Block\\Service\\TemplateBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata.block.container.types' => array(
                0 => 'sonata.block.service.container',
                1 => 'sonata.page.block.container',
                2 => 'cmf.block.container',
                3 => 'cmf.block.slideshow',
            ),
            'sonata_block.blocks' => array(
                'sonata.admin.block.admin_list' => array(
                    'contexts' => array(
                        0 => 'admin',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
            ),
            'sonata_block.blocks_by_class' => array(

            ),
            'sonata_block.cache_blocks' => array(
                'by_type' => array(
                    'sonata.admin.block.admin_list' => 'sonata.cache.noop',
                ),
            ),
            'knp_menu.factory.class' => 'Knp\\Menu\\Silex\\RouterAwareFactory',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(

            ),
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(

            ),
            'knp_menu.renderer.twig.template' => 'knp_menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            0 => array(

            ),
            'sonata_admin_doctrine_phpcr.tree_block.defaults' => array(

            ),
            'sonata_admin_doctrine_phpcr.tree_confirm_move' => true,
            'sonata.admin.configuration.templates' => array(
                'layout' => 'AcmeBasicCmsBundle::admin_layout.html.twig',
                'user_block' => 'SonataAdminBundle:Core:user_block.html.twig',
                'add_block' => 'SonataAdminBundle:Core:add_block.html.twig',
                'ajax' => 'SonataAdminBundle::ajax_layout.html.twig',
                'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig',
                'search' => 'SonataAdminBundle:Core:search.html.twig',
                'list' => 'SonataAdminBundle:CRUD:list.html.twig',
                'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig',
                'show' => 'SonataAdminBundle:CRUD:show.html.twig',
                'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig',
                'edit' => 'SonataAdminBundle:CRUD:edit.html.twig',
                'preview' => 'SonataAdminBundle:CRUD:preview.html.twig',
                'history' => 'SonataAdminBundle:CRUD:history.html.twig',
                'acl' => 'SonataAdminBundle:CRUD:acl.html.twig',
                'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig',
                'action' => 'SonataAdminBundle:CRUD:action.html.twig',
                'select' => 'SonataAdminBundle:CRUD:list__select.html.twig',
                'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig',
                'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig',
                'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig',
                'delete' => 'SonataAdminBundle:CRUD:delete.html.twig',
                'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig',
                'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig',
                'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig',
                'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig',
                'pager_links' => 'SonataAdminBundle:Pager:links.html.twig',
                'pager_results' => 'SonataAdminBundle:Pager:results.html.twig',
                'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig',
            ),
            'sonata.admin.configuration.admin_services' => array(

            ),
            'sonata.admin.configuration.dashboard_groups' => array(

            ),
            'sonata.admin.configuration.dashboard_blocks' => array(
                0 => array(
                    'position' => 'left',
                    'settings' => array(

                    ),
                    'type' => 'sonata.admin.block.admin_list',
                ),
            ),
            'sonata.admin.security.acl_user_manager' => NULL,
            'sonata.admin.configuration.security.information' => array(

            ),
            'sonata.admin.configuration.security.admin_permissions' => array(
                0 => 'CREATE',
                1 => 'LIST',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'EXPORT',
                5 => 'OPERATOR',
                6 => 'MASTER',
            ),
            'sonata.admin.configuration.security.object_permissions' => array(
                0 => 'VIEW',
                1 => 'EDIT',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'OPERATOR',
                5 => 'MASTER',
                6 => 'OWNER',
            ),
            'sonata.admin.security.handler.noop.class' => 'Sonata\\AdminBundle\\Security\\Handler\\NoopSecurityHandler',
            'sonata.admin.security.handler.role.class' => 'Sonata\\AdminBundle\\Security\\Handler\\RoleSecurityHandler',
            'sonata.admin.security.handler.acl.class' => 'Sonata\\AdminBundle\\Security\\Handler\\AclSecurityHandler',
            'sonata.admin.security.mask.builder.class' => 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder',
            'sonata.admin.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminAclManipulator',
            'sonata.admin.object.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminObjectAclManipulator',
            'sonata.admin.extension.map' => array(
                'admins' => array(

                ),
                'excludes' => array(

                ),
                'implements' => array(

                ),
                'extends' => array(

                ),
                'instanceof' => array(

                ),
            ),
            'sonata.admin.configuration.filters.persist' => false,
            'sonata.core.flashmessage.manager.class' => 'Sonata\\CoreBundle\\FlashMessage\\FlashManager',
            'sonata.core.twig.extension.flashmessage.class' => 'Sonata\\CoreBundle\\Twig\\Extension\\FlashMessageExtension',
            'sonata.core.form_type' => 'standard',
            'cmf_core.persistence.phpcr.manager_name' => NULL,
            'cmf_core.twig_extension.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\Twig\\Extension\\CmfExtension',
            'cmf_core.templating.helper.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\Templating\\Helper\\CmfHelper',
            'cmf_core.publish_workflow.view_non_published_role' => 'ROLE_CAN_VIEW_NON_PUBLISHED',
            'cmf_core.publish_workflow.checker.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\PublishWorkflow\\PublishWorkflowChecker',
            'cmf_core.publish_workflow.access_decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'cmf_core.security.publishable_voter.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\PublishWorkflow\\Voter\\PublishableVoter',
            'cmf_core.security.publish_time_period_voter.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\PublishWorkflow\\Voter\\PublishTimePeriodVoter',
            'cmf_core.publish_workflow.request_listener.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\EventListener\\PublishWorkflowListener',
            'cmf_core.security.published_voter.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\Security\\Authorization\\Voter\\PublishedVoter',
            'cmf_core.admin_extension.publish_workflow.publishable.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\Admin\\Extension\\PublishableExtension',
            'cmf_core.admin_extension.publish_workflow.time_period.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\Admin\\Extension\\PublishTimePeriodExtension',
            'cmf_core.persistence.phpcr.non_translatable_metadata_listener.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\Doctrine\\Phpcr\\NonTranslatableMetadataListener',
            'cmf_core.phpcr.multilang.locales' => array(

            ),
            'cmf_core.sonata_admin.extension.publishable.form_group' => 'form.group_publish_workflow',
            'cmf_core.sonata_admin.extension.publish_time.form_group' => 'form.group_publish_workflow',
            'cmf_core.sonata_admin.extension.translatable.form_group' => 'form.group_general',
            'cmf_core.form.type.checkbox_url_label.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\Form\\Type\\CheckboxUrlLabelFormType',
            'cmf_menu.factory.class' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\ContentAwareFactory',
            'cmf_menu.allow_empty_items' => false,
            'cmf_menu.current_item_voter.uri_prefix.class' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\Voter\\UriPrefixVoter',
            'cmf_menu.current_item_voter.content_identity.class' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\Voter\\RequestContentIdentityVoter',
            'cmf_menu.admin_extensions.menu_options.advanced' => false,
            'cmf_menu.admin_extension.menu_node_options.class' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\Admin\\Extension\\MenuOptionsExtension',
            'cmf_menu.security.menu_content_voter.class' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\PublishWorkflow\\Voter\\MenuContentVoter',
            'cmf_menu.publish_workflow.create_menu_item_from_node_listener.class' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\PublishWorkflow\\CreateMenuItemFromNodeListener',
            'white_october_pagerfanta.default_view' => 'default',
            'white_october_pagerfanta.view_factory.class' => 'Pagerfanta\\View\\ViewFactory',
            'gregwar_captcha.captcha_type.class' => 'Gregwar\\CaptchaBundle\\Type\\CaptchaType',
            'gregwar_captcha.captcha_generator.class' => 'Gregwar\\CaptchaBundle\\Generator\\CaptchaGenerator',
            'gregwar_captcha.image_file_handler.class' => 'Gregwar\\CaptchaBundle\\Generator\\ImageFileHandler',
            'gregwar_captcha.captcha_builder.class' => 'Gregwar\\Captcha\\CaptchaBuilder',
            'gregwar_captcha.phrase_builder.class' => 'Gregwar\\Captcha\\PhraseBuilder',
            'gregwar_captcha.config' => array(
                'length' => 5,
                'width' => 130,
                'height' => 50,
                'font' => ($this->targetDirs[3].'/vendor/gregwar/captcha-bundle/DependencyInjection/../Generator/Font/captcha.ttf'),
                'keep_value' => false,
                'charset' => 'abcdefhjkmnprstuvwxyz23456789',
                'as_file' => false,
                'as_url' => false,
                'reload' => false,
                'image_folder' => 'captcha',
                'web_path' => ($this->targetDirs[2].'/../web'),
                'gc_freq' => 100,
                'expiration' => 60,
                'quality' => 30,
                'invalid_message' => 'Bad code value',
                'bypass_code' => NULL,
                'whitelist_key' => 'captcha_whitelist_key',
                'humanity' => 0,
                'distortion' => true,
                'max_front_lines' => NULL,
                'max_behind_lines' => NULL,
                'interpolation' => true,
                'text_color' => array(

                ),
                'background_color' => array(

                ),
                'disabled' => false,
            ),
            'gregwar_captcha.config.image_folder' => 'captcha',
            'gregwar_captcha.config.web_path' => ($this->targetDirs[2].'/../web'),
            'gregwar_captcha.config.gc_freq' => 100,
            'gregwar_captcha.config.expiration' => 60,
            'gregwar_captcha.config.whitelist_key' => 'captcha_whitelist_key',
            'fos_http_cache.request_matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'fos_http_cache.rule_matcher.class' => 'FOS\\HttpCacheBundle\\Http\\RuleMatcher',
            'fos_http_cache.debug_header' => 'X-Cache-Debug',
            'fos_http_cache.event_listener.cache_control.class' => 'FOS\\HttpCacheBundle\\EventListener\\CacheControlSubscriber',
            'fos_http_cache.compiler_pass.tag_annotations' => false,
            'templating.helper.markdown.class' => 'Knp\\Bundle\\MarkdownBundle\\Helper\\MarkdownHelper',
            'web_profiler.controller.profiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController',
            'web_profiler.controller.router.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\RouterController',
            'web_profiler.controller.exception.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController',
            'twig.extension.webprofiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension',
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.class' => 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener',
            'web_profiler.debug_toolbar.intercept_redirects' => true,
            'web_profiler.debug_toolbar.mode' => 2,
            'sensio_distribution.webconfigurator.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Configurator',
            'data_collector.templates' => array(
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.translation' => array(
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => 'DoctrineBundle:Collector:db',
                ),
                'doctrine_phpcr.data_collector' => array(
                    0 => 'phpcr',
                    1 => 'DoctrinePHPCRBundle:Collector:phpcr',
                ),
                'sonata.block.data_collector' => array(
                    0 => 'block',
                    1 => 'SonataBlockBundle:Profiler:block.html.twig',
                ),
            ),
            'console.command.ids' => array(

            ),
            'doctrine_phpcr.migrate.migrators' => array(

            ),
        );
    }
}
