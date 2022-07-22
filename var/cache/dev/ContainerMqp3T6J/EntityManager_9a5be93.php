<?php

namespace ContainerMqp3T6J;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9d991 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5ce43 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties35af2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'getConnection', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'getMetadataFactory', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'getExpressionBuilder', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'beginTransaction', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'getCache', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'transactional', array('func' => $func), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'commit', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->commit();
    }

    public function rollback()
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'rollback', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'getClassMetadata', array('className' => $className), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'createQuery', array('dql' => $dql), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'createNamedQuery', array('name' => $name), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'createQueryBuilder', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'flush', array('entity' => $entity), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'clear', array('entityName' => $entityName), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->clear($entityName);
    }

    public function close()
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'close', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->close();
    }

    public function persist($entity)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'persist', array('entity' => $entity), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'remove', array('entity' => $entity), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'refresh', array('entity' => $entity), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'detach', array('entity' => $entity), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'merge', array('entity' => $entity), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'contains', array('entity' => $entity), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'getEventManager', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'getConfiguration', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'isOpen', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'getUnitOfWork', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'getProxyFactory', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'initializeObject', array('obj' => $obj), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'getFilters', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'isFiltersStateClean', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'hasFilters', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return $this->valueHolder9d991->hasFilters();
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

        $instance->initializer5ce43 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9d991) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9d991 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9d991->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, '__get', ['name' => $name], $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        if (isset(self::$publicProperties35af2[$name])) {
            return $this->valueHolder9d991->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d991;

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

        $targetObject = $this->valueHolder9d991;
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
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d991;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9d991;
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
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, '__isset', array('name' => $name), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d991;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9d991;
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
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, '__unset', array('name' => $name), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d991;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9d991;
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
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, '__clone', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        $this->valueHolder9d991 = clone $this->valueHolder9d991;
    }

    public function __sleep()
    {
        $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, '__sleep', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;

        return array('valueHolder9d991');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5ce43 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5ce43;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5ce43 && ($this->initializer5ce43->__invoke($valueHolder9d991, $this, 'initializeProxy', array(), $this->initializer5ce43) || 1) && $this->valueHolder9d991 = $valueHolder9d991;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9d991;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9d991;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
