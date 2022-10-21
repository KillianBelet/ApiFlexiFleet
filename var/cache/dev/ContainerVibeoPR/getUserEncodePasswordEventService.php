<?php

namespace ContainerVibeoPR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserEncodePasswordEventService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\User\UserEncodePasswordEvent' shared autowired service.
     *
     * @return \App\EventSubscriber\User\UserEncodePasswordEvent
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventSubscriber'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'UserEncodePasswordEvent.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'password-hasher'.\DIRECTORY_SEPARATOR.'Hasher'.\DIRECTORY_SEPARATOR.'UserPasswordHasherInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'password-hasher'.\DIRECTORY_SEPARATOR.'Hasher'.\DIRECTORY_SEPARATOR.'UserPasswordHasher.php';

        return $container->privates['App\\EventSubscriber\\User\\UserEncodePasswordEvent'] = new \App\EventSubscriber\User\UserEncodePasswordEvent(new \Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher(($container->privates['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService'))), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
