<?php

namespace ContainerBx8kGz4;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd786d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd7160 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4dad4 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'getConnection', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'getMetadataFactory', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'getExpressionBuilder', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'beginTransaction', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'getCache', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'transactional', array('func' => $func), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'commit', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->commit();
    }

    public function rollback()
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'rollback', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'getClassMetadata', array('className' => $className), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'createQuery', array('dql' => $dql), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'createNamedQuery', array('name' => $name), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'createQueryBuilder', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'flush', array('entity' => $entity), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'clear', array('entityName' => $entityName), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->clear($entityName);
    }

    public function close()
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'close', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->close();
    }

    public function persist($entity)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'persist', array('entity' => $entity), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'remove', array('entity' => $entity), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'refresh', array('entity' => $entity), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'detach', array('entity' => $entity), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'merge', array('entity' => $entity), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'contains', array('entity' => $entity), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'getEventManager', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'getConfiguration', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'isOpen', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'getUnitOfWork', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'getProxyFactory', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'initializeObject', array('obj' => $obj), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'getFilters', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'isFiltersStateClean', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'hasFilters', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return $this->valueHolderd786d->hasFilters();
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

        $instance->initializerd7160 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd786d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd786d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd786d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, '__get', ['name' => $name], $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        if (isset(self::$publicProperties4dad4[$name])) {
            return $this->valueHolderd786d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd786d;

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

        $targetObject = $this->valueHolderd786d;
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
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd786d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd786d;
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
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, '__isset', array('name' => $name), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd786d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd786d;
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
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, '__unset', array('name' => $name), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd786d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd786d;
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
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, '__clone', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        $this->valueHolderd786d = clone $this->valueHolderd786d;
    }

    public function __sleep()
    {
        $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, '__sleep', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;

        return array('valueHolderd786d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd7160 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd7160;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd7160 && ($this->initializerd7160->__invoke($valueHolderd786d, $this, 'initializeProxy', array(), $this->initializerd7160) || 1) && $this->valueHolderd786d = $valueHolderd786d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd786d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd786d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
