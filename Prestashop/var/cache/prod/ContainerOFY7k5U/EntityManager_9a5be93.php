<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5b442 = null;
    private $initializerf0678 = null;
    private static $publicProperties83e9f = [
        
    ];
    public function getConnection()
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'getConnection', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'getMetadataFactory', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'getExpressionBuilder', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'beginTransaction', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'getCache', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->getCache();
    }
    public function transactional($func)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'transactional', array('func' => $func), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'commit', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->commit();
    }
    public function rollback()
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'rollback', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'getClassMetadata', array('className' => $className), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'createQuery', array('dql' => $dql), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'createNamedQuery', array('name' => $name), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'createQueryBuilder', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'flush', array('entity' => $entity), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'clear', array('entityName' => $entityName), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->clear($entityName);
    }
    public function close()
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'close', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->close();
    }
    public function persist($entity)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'persist', array('entity' => $entity), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'remove', array('entity' => $entity), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'refresh', array('entity' => $entity), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'detach', array('entity' => $entity), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'merge', array('entity' => $entity), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'contains', array('entity' => $entity), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'getEventManager', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'getConfiguration', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'isOpen', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'getUnitOfWork', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'getProxyFactory', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'initializeObject', array('obj' => $obj), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'getFilters', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'isFiltersStateClean', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'hasFilters', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return $this->valueHolder5b442->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerf0678 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder5b442) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5b442 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder5b442->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, '__get', ['name' => $name], $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        if (isset(self::$publicProperties83e9f[$name])) {
            return $this->valueHolder5b442->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b442;
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
        $targetObject = $this->valueHolder5b442;
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
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b442;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder5b442;
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
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, '__isset', array('name' => $name), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b442;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder5b442;
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
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, '__unset', array('name' => $name), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b442;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5b442;
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
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, '__clone', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        $this->valueHolder5b442 = clone $this->valueHolder5b442;
    }
    public function __sleep()
    {
        $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, '__sleep', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
        return array('valueHolder5b442');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf0678 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf0678;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerf0678 && ($this->initializerf0678->__invoke($valueHolder5b442, $this, 'initializeProxy', array(), $this->initializerf0678) || 1) && $this->valueHolder5b442 = $valueHolder5b442;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5b442;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5b442;
    }
}
