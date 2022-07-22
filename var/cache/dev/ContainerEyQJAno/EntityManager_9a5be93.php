<?php

namespace ContainerEyQJAno;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd9b01 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere80c2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9477f = [
        
    ];

    public function getConnection()
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'getConnection', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'getMetadataFactory', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'getExpressionBuilder', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'beginTransaction', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'getCache', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->getCache();
    }

    public function transactional($func)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'transactional', array('func' => $func), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'wrapInTransaction', array('func' => $func), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'commit', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->commit();
    }

    public function rollback()
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'rollback', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'getClassMetadata', array('className' => $className), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'createQuery', array('dql' => $dql), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'createNamedQuery', array('name' => $name), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'createQueryBuilder', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'flush', array('entity' => $entity), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'clear', array('entityName' => $entityName), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->clear($entityName);
    }

    public function close()
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'close', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->close();
    }

    public function persist($entity)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'persist', array('entity' => $entity), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'remove', array('entity' => $entity), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'refresh', array('entity' => $entity), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'detach', array('entity' => $entity), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'merge', array('entity' => $entity), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'getRepository', array('entityName' => $entityName), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'contains', array('entity' => $entity), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'getEventManager', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'getConfiguration', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'isOpen', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'getUnitOfWork', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'getProxyFactory', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'initializeObject', array('obj' => $obj), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'getFilters', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'isFiltersStateClean', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'hasFilters', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return $this->valueHolderd9b01->hasFilters();
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

        $instance->initializere80c2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd9b01) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd9b01 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd9b01->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, '__get', ['name' => $name], $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        if (isset(self::$publicProperties9477f[$name])) {
            return $this->valueHolderd9b01->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9b01;

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

        $targetObject = $this->valueHolderd9b01;
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
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9b01;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd9b01;
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
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, '__isset', array('name' => $name), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9b01;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd9b01;
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
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, '__unset', array('name' => $name), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9b01;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd9b01;
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
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, '__clone', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        $this->valueHolderd9b01 = clone $this->valueHolderd9b01;
    }

    public function __sleep()
    {
        $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, '__sleep', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;

        return array('valueHolderd9b01');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere80c2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere80c2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere80c2 && ($this->initializere80c2->__invoke($valueHolderd9b01, $this, 'initializeProxy', array(), $this->initializere80c2) || 1) && $this->valueHolderd9b01 = $valueHolderd9b01;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd9b01;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd9b01;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
