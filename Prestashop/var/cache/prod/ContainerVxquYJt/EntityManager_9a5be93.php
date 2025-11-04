<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderec925 = null;
    private $initializer6d547 = null;
    private static $publicProperties38eab = [
        
    ];
    public function getConnection()
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'getConnection', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'getMetadataFactory', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'getExpressionBuilder', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'beginTransaction', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'getCache', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->getCache();
    }
    public function transactional($func)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'transactional', array('func' => $func), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'commit', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->commit();
    }
    public function rollback()
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'rollback', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'getClassMetadata', array('className' => $className), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'createQuery', array('dql' => $dql), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'createNamedQuery', array('name' => $name), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'createQueryBuilder', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'flush', array('entity' => $entity), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'clear', array('entityName' => $entityName), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->clear($entityName);
    }
    public function close()
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'close', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->close();
    }
    public function persist($entity)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'persist', array('entity' => $entity), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'remove', array('entity' => $entity), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'refresh', array('entity' => $entity), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'detach', array('entity' => $entity), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'merge', array('entity' => $entity), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'contains', array('entity' => $entity), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'getEventManager', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'getConfiguration', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'isOpen', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'getUnitOfWork', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'getProxyFactory', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'initializeObject', array('obj' => $obj), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'getFilters', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'isFiltersStateClean', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'hasFilters', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return $this->valueHolderec925->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer6d547 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderec925) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderec925 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderec925->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, '__get', ['name' => $name], $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        if (isset(self::$publicProperties38eab[$name])) {
            return $this->valueHolderec925->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec925;
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
        $targetObject = $this->valueHolderec925;
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
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec925;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderec925;
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
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, '__isset', array('name' => $name), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec925;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderec925;
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
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, '__unset', array('name' => $name), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec925;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderec925;
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
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, '__clone', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        $this->valueHolderec925 = clone $this->valueHolderec925;
    }
    public function __sleep()
    {
        $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, '__sleep', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
        return array('valueHolderec925');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6d547 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6d547;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer6d547 && ($this->initializer6d547->__invoke($valueHolderec925, $this, 'initializeProxy', array(), $this->initializer6d547) || 1) && $this->valueHolderec925 = $valueHolderec925;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderec925;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderec925;
    }
}
