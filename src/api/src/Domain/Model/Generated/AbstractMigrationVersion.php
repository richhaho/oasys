<?php
/**
 * This file has been automatically generated by TDBM.
 *
 * DO NOT edit this file, as it might be overwritten.
 * If you need to perform changes, edit the MigrationVersion class instead!
 */

declare(strict_types=1);

namespace App\Domain\Model\Generated;

use TheCodingMachine\TDBM\AbstractTDBMObject;
use TheCodingMachine\TDBM\ResultIterator;
use TheCodingMachine\TDBM\AlterableResultIterator;
use Ramsey\Uuid\Uuid;
use JsonSerializable;
use TheCodingMachine\TDBM\Schema\ForeignKeys;
use TheCodingMachine\GraphQLite\Annotations\Field as GraphqlField;

/**
 * The AbstractMigrationVersion class maps the 'migration_versions' table in
 * database.
 */
abstract class AbstractMigrationVersion extends \TheCodingMachine\TDBM\AbstractTDBMObject implements JsonSerializable
{

    /**
     * @var \TheCodingMachine\TDBM\Schema\ForeignKeys
     */
    private static $foreignKeys = null;

    /**
     * The constructor takes all compulsory arguments.
     *
     * @param string $version
     * @param \DateTimeImmutable $executedAt
     */
    public function __construct(string $version, \DateTimeImmutable $executedAt)
    {
        parent::__construct();
        $this->setVersion($version);
        $this->setExecutedAt($executedAt);
    }

    /**
     * The getter for the "version" column.
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->get('version', 'migration_versions');
    }

    /**
     * The setter for the "version" column.
     *
     * @param string $version
     */
    public function setVersion(string $version) : void
    {
        $this->set('version', $version, 'migration_versions');
    }

    /**
     * The getter for the "executed_at" column.
     *
     * @return \DateTimeImmutable
     */
    public function getExecutedAt() : \DateTimeImmutable
    {
        return $this->get('executed_at', 'migration_versions');
    }

    /**
     * The setter for the "executed_at" column.
     *
     * @param \DateTimeImmutable $executed_at
     */
    public function setExecutedAt(\DateTimeImmutable $executed_at) : void
    {
        $this->set('executed_at', $executed_at, 'migration_versions');
    }

    /**
     * Internal method used to retrieve the list of foreign keys attached to this bean.
     */
    protected static function getForeignKeys(string $tableName) : \TheCodingMachine\TDBM\Schema\ForeignKeys
    {
        if ($tableName === 'migration_versions') {
            if (self::$foreignKeys === null) {
                self::$foreignKeys = new ForeignKeys([

                ]);
            }
            return self::$foreignKeys;
        }
        return parent::getForeignKeys($tableName);
    }

    /**
     * Serializes the object for JSON encoding.
     *
     * @param bool $stopRecursion Parameter used internally by TDBM to stop embedded
     * objects from embedding other objects.
     * @return array
     */
    public function jsonSerialize(bool $stopRecursion = false)
    {
        $array = [];
        $array['version'] = $this->getVersion();
        $array['executedAt'] = $this->getExecutedAt()->format('c');
        return $array;
    }

    /**
     * Returns an array of used tables by this bean (from parent to child
     * relationship).
     *
     * @return string[]
     */
    public function getUsedTables() : array
    {
        return [ 'migration_versions' ];
    }

    public function __clone()
    {
        parent::__clone();
    }
}