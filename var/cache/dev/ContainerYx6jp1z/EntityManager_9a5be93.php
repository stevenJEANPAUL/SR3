<?php

namespace ContainerYx6jp1z;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf2f0b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer39fba = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfe314 = [
        
    ];

    public function getConnection()
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'getConnection', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'getMetadataFactory', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'getExpressionBuilder', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'beginTransaction', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'getCache', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'transactional', array('func' => $func), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'commit', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->commit();
    }

    public function rollback()
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'rollback', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'getClassMetadata', array('className' => $className), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'createQuery', array('dql' => $dql), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'createNamedQuery', array('name' => $name), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'createQueryBuilder', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'flush', array('entity' => $entity), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'clear', array('entityName' => $entityName), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->clear($entityName);
    }

    public function close()
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'close', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->close();
    }

    public function persist($entity)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'persist', array('entity' => $entity), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'remove', array('entity' => $entity), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'refresh', array('entity' => $entity), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'detach', array('entity' => $entity), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'merge', array('entity' => $entity), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'contains', array('entity' => $entity), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'getEventManager', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'getConfiguration', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'isOpen', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'getUnitOfWork', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'getProxyFactory', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'initializeObject', array('obj' => $obj), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'getFilters', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'isFiltersStateClean', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'hasFilters', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return $this->valueHolderf2f0b->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer39fba = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf2f0b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf2f0b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf2f0b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, '__get', ['name' => $name], $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        if (isset(self::$publicPropertiesfe314[$name])) {
            return $this->valueHolderf2f0b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2f0b;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf2f0b;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2f0b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf2f0b;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, '__isset', array('name' => $name), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2f0b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf2f0b;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, '__unset', array('name' => $name), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2f0b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf2f0b;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, '__clone', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        $this->valueHolderf2f0b = clone $this->valueHolderf2f0b;
    }

    public function __sleep()
    {
        $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, '__sleep', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;

        return array('valueHolderf2f0b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer39fba = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer39fba;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer39fba && ($this->initializer39fba->__invoke($valueHolderf2f0b, $this, 'initializeProxy', array(), $this->initializer39fba) || 1) && $this->valueHolderf2f0b = $valueHolderf2f0b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf2f0b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf2f0b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
