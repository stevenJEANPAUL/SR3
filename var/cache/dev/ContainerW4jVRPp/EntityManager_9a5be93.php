<?php

namespace ContainerW4jVRPp;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8abfc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdd16b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6d44a = [
        
    ];

    public function getConnection()
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'getConnection', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'getMetadataFactory', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'getExpressionBuilder', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'beginTransaction', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'getCache', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'transactional', array('func' => $func), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'commit', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->commit();
    }

    public function rollback()
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'rollback', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'getClassMetadata', array('className' => $className), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'createQuery', array('dql' => $dql), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'createNamedQuery', array('name' => $name), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'createQueryBuilder', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'flush', array('entity' => $entity), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'clear', array('entityName' => $entityName), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->clear($entityName);
    }

    public function close()
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'close', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->close();
    }

    public function persist($entity)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'persist', array('entity' => $entity), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'remove', array('entity' => $entity), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'refresh', array('entity' => $entity), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'detach', array('entity' => $entity), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'merge', array('entity' => $entity), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'contains', array('entity' => $entity), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'getEventManager', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'getConfiguration', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'isOpen', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'getUnitOfWork', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'getProxyFactory', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'initializeObject', array('obj' => $obj), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'getFilters', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'isFiltersStateClean', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'hasFilters', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return $this->valueHolder8abfc->hasFilters();
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

        $instance->initializerdd16b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8abfc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8abfc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8abfc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, '__get', ['name' => $name], $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        if (isset(self::$publicProperties6d44a[$name])) {
            return $this->valueHolder8abfc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8abfc;

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

        $targetObject = $this->valueHolder8abfc;
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
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8abfc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8abfc;
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
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, '__isset', array('name' => $name), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8abfc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8abfc;
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
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, '__unset', array('name' => $name), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8abfc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8abfc;
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
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, '__clone', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        $this->valueHolder8abfc = clone $this->valueHolder8abfc;
    }

    public function __sleep()
    {
        $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, '__sleep', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;

        return array('valueHolder8abfc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdd16b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdd16b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdd16b && ($this->initializerdd16b->__invoke($valueHolder8abfc, $this, 'initializeProxy', array(), $this->initializerdd16b) || 1) && $this->valueHolder8abfc = $valueHolder8abfc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8abfc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8abfc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
