<?php
function connecter($database)
{
    // Erase the tenant connection, thus making Laravel get the default values all over again.
    DB::purge('anotherDB');
    // Make sure to use the database name we want to establish a connection.
    Config::set('database.connections.tenant.database', $database);
    // Rearrange the connection data
    DB::reconnect('anotherDB');
    // Ping the database. This will throw an exception in case the database does not exists.
    Schema::connection('tenant')->getConnection()->reconnect();
}

