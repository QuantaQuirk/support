<?php

namespace QuantaQuirk\Support\Facades;

/**
 * @method static \QuantaQuirk\Database\Connection connection(string|null $name = null)
 * @method static void registerDoctrineType(string $class, string $name, string $type)
 * @method static void purge(string|null $name = null)
 * @method static void disconnect(string|null $name = null)
 * @method static \QuantaQuirk\Database\Connection reconnect(string|null $name = null)
 * @method static mixed usingConnection(string $name, callable $callback)
 * @method static string getDefaultConnection()
 * @method static void setDefaultConnection(string $name)
 * @method static string[] supportedDrivers()
 * @method static string[] availableDrivers()
 * @method static void extend(string $name, callable $resolver)
 * @method static void forgetExtension(string $name)
 * @method static array getConnections()
 * @method static void setReconnector(callable $reconnector)
 * @method static \QuantaQuirk\Database\DatabaseManager setApplication(\QuantaQuirk\Contracts\Foundation\Application $app)
 * @method static void macro(string $name, object|callable $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static bool hasMacro(string $name)
 * @method static void flushMacros()
 * @method static mixed macroCall(string $method, array $parameters)
 * @method static void useDefaultQueryGrammar()
 * @method static void useDefaultSchemaGrammar()
 * @method static void useDefaultPostProcessor()
 * @method static \QuantaQuirk\Database\Schema\Builder getSchemaBuilder()
 * @method static \QuantaQuirk\Database\Query\Builder table(\Closure|\QuantaQuirk\Database\Query\Builder|\QuantaQuirk\Contracts\Database\Query\Expression|string $table, string|null $as = null)
 * @method static \QuantaQuirk\Database\Query\Builder query()
 * @method static mixed selectOne(string $query, array $bindings = [], bool $useReadPdo = true)
 * @method static mixed scalar(string $query, array $bindings = [], bool $useReadPdo = true)
 * @method static array selectFromWriteConnection(string $query, array $bindings = [])
 * @method static array select(string $query, array $bindings = [], bool $useReadPdo = true)
 * @method static array selectResultSets(string $query, array $bindings = [], bool $useReadPdo = true)
 * @method static \Generator cursor(string $query, array $bindings = [], bool $useReadPdo = true)
 * @method static bool insert(string $query, array $bindings = [])
 * @method static int update(string $query, array $bindings = [])
 * @method static int delete(string $query, array $bindings = [])
 * @method static bool statement(string $query, array $bindings = [])
 * @method static int affectingStatement(string $query, array $bindings = [])
 * @method static bool unprepared(string $query)
 * @method static array pretend(\Closure $callback)
 * @method static void bindValues(\PDOStatement $statement, array $bindings)
 * @method static array prepareBindings(array $bindings)
 * @method static void logQuery(string $query, array $bindings, float|null $time = null)
 * @method static void whenQueryingForLongerThan(\DateTimeInterface|\Carbon\CarbonInterval|float|int $threshold, callable $handler)
 * @method static void allowQueryDurationHandlersToRunAgain()
 * @method static float totalQueryDuration()
 * @method static void resetTotalQueryDuration()
 * @method static void reconnectIfMissingConnection()
 * @method static \QuantaQuirk\Database\Connection beforeExecuting(\Closure $callback)
 * @method static void listen(\Closure $callback)
 * @method static \QuantaQuirk\Contracts\Database\Query\Expression raw(mixed $value)
 * @method static string escape(string|float|int|bool|null $value, bool $binary = false)
 * @method static bool hasModifiedRecords()
 * @method static void recordsHaveBeenModified(bool $value = true)
 * @method static \QuantaQuirk\Database\Connection setRecordModificationState(bool $value)
 * @method static void forgetRecordModificationState()
 * @method static \QuantaQuirk\Database\Connection useWriteConnectionWhenReading(bool $value = true)
 * @method static bool isDoctrineAvailable()
 * @method static bool usingNativeSchemaOperations()
 * @method static \Doctrine\DBAL\Schema\Column getDoctrineColumn(string $table, string $column)
 * @method static \Doctrine\DBAL\Schema\AbstractSchemaManager getDoctrineSchemaManager()
 * @method static \Doctrine\DBAL\Connection getDoctrineConnection()
 * @method static \PDO getPdo()
 * @method static \PDO|\Closure|null getRawPdo()
 * @method static \PDO getReadPdo()
 * @method static \PDO|\Closure|null getRawReadPdo()
 * @method static \QuantaQuirk\Database\Connection setPdo(\PDO|\Closure|null $pdo)
 * @method static \QuantaQuirk\Database\Connection setReadPdo(\PDO|\Closure|null $pdo)
 * @method static string|null getName()
 * @method static string|null getNameWithReadWriteType()
 * @method static mixed getConfig(string|null $option = null)
 * @method static string getDriverName()
 * @method static \QuantaQuirk\Database\Query\Grammars\Grammar getQueryGrammar()
 * @method static \QuantaQuirk\Database\Connection setQueryGrammar(\QuantaQuirk\Database\Query\Grammars\Grammar $grammar)
 * @method static \QuantaQuirk\Database\Schema\Grammars\Grammar getSchemaGrammar()
 * @method static \QuantaQuirk\Database\Connection setSchemaGrammar(\QuantaQuirk\Database\Schema\Grammars\Grammar $grammar)
 * @method static \QuantaQuirk\Database\Query\Processors\Processor getPostProcessor()
 * @method static \QuantaQuirk\Database\Connection setPostProcessor(\QuantaQuirk\Database\Query\Processors\Processor $processor)
 * @method static \QuantaQuirk\Contracts\Events\Dispatcher getEventDispatcher()
 * @method static \QuantaQuirk\Database\Connection setEventDispatcher(\QuantaQuirk\Contracts\Events\Dispatcher $events)
 * @method static void unsetEventDispatcher()
 * @method static \QuantaQuirk\Database\Connection setTransactionManager(\QuantaQuirk\Database\DatabaseTransactionsManager $manager)
 * @method static void unsetTransactionManager()
 * @method static bool pretending()
 * @method static array getQueryLog()
 * @method static array getRawQueryLog()
 * @method static void flushQueryLog()
 * @method static void enableQueryLog()
 * @method static void disableQueryLog()
 * @method static bool logging()
 * @method static string getDatabaseName()
 * @method static \QuantaQuirk\Database\Connection setDatabaseName(string $database)
 * @method static \QuantaQuirk\Database\Connection setReadWriteType(string|null $readWriteType)
 * @method static string getTablePrefix()
 * @method static \QuantaQuirk\Database\Connection setTablePrefix(string $prefix)
 * @method static \QuantaQuirk\Database\Grammar withTablePrefix(\QuantaQuirk\Database\Grammar $grammar)
 * @method static void resolverFor(string $driver, \Closure $callback)
 * @method static mixed getResolver(string $driver)
 * @method static mixed transaction(\Closure $callback, int $attempts = 1)
 * @method static void beginTransaction()
 * @method static void commit()
 * @method static void rollBack(int|null $toLevel = null)
 * @method static int transactionLevel()
 * @method static void afterCommit(callable $callback)
 *
 * @see \QuantaQuirk\Database\DatabaseManager
 */
class DB extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'db';
    }
}