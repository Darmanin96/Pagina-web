<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera82ed = null;
    private $initializerc9d50 = null;
    private static $publicProperties31401 = [
        
    ];
    public function getConnection()
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'getConnection', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'getMetadataFactory', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'getExpressionBuilder', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'beginTransaction', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'getCache', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'transactional', array('func' => $func), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'commit', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->commit();
    }
    public function rollback()
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'rollback', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'getClassMetadata', array('className' => $className), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'createQuery', array('dql' => $dql), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'createNamedQuery', array('name' => $name), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'createQueryBuilder', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'flush', array('entity' => $entity), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'clear', array('entityName' => $entityName), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->clear($entityName);
    }
    public function close()
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'close', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->close();
    }
    public function persist($entity)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'persist', array('entity' => $entity), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'remove', array('entity' => $entity), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'refresh', array('entity' => $entity), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'detach', array('entity' => $entity), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'merge', array('entity' => $entity), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'contains', array('entity' => $entity), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'getEventManager', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'getConfiguration', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'isOpen', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'getUnitOfWork', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'getProxyFactory', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'initializeObject', array('obj' => $obj), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'getFilters', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'isFiltersStateClean', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'hasFilters', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return $this->valueHoldera82ed->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc9d50 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldera82ed) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera82ed = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldera82ed->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, '__get', ['name' => $name], $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        if (isset(self::$publicProperties31401[$name])) {
            return $this->valueHoldera82ed->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera82ed;
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
        $targetObject = $this->valueHoldera82ed;
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
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera82ed;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera82ed;
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
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, '__isset', array('name' => $name), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera82ed;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera82ed;
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
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, '__unset', array('name' => $name), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera82ed;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera82ed;
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
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, '__clone', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        $this->valueHoldera82ed = clone $this->valueHoldera82ed;
    }
    public function __sleep()
    {
        $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, '__sleep', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
        return array('valueHoldera82ed');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc9d50 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc9d50;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc9d50 && ($this->initializerc9d50->__invoke($valueHoldera82ed, $this, 'initializeProxy', array(), $this->initializerc9d50) || 1) && $this->valueHoldera82ed = $valueHoldera82ed;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera82ed;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera82ed;
    }
}
