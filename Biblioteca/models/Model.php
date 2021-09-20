<?php

abstract class Model
{
    private $host = 'localhost';
    private $port = '5432';
    private $dbName = 'library';
    private $dbUser = 'postgres';
    private $dbPassword = 'pitcho';
    private $connection = null;
    private $table = null;

    public function connect()
    {
        $this->connection = pg_connect(
            "host=$this->host " . 
            "port=$this->port " . 
            "dbname=$this->dbName " . 
            "user=$this->dbUser " . 
            "password=$this->dbPassword "
        );
    }

    public function setTable(string $table) 
    {
        $this->table = $table;
    }

    private function desconnect()
    {
        pg_close($this->connection);
    }

    public function find(int $id) 
    {
        $this->connect();
        $this->tableId = $id;
        $result = pg_query($this->connection, "select * from $this->table where id = $id");
        $this->desconnect();

        return json_encode(pg_fetch_all($result)[0]);
    }

/*     public function all()
    {
        $this->connect();
        $result = pg_query($this->connection, "SELECT * FROM $this->table");

        return json_encode(pg_fetch_all($result));
    } */

    public function all()
    {
        $this->connect();
        $result = pg_query($this->connection, "SELECT * FROM $this->table");
        $this->desconnect();
        return json_encode(pg_fetch_all($result));
    }

    public function create(array $data)
    {
        $this->connect();
        $result = pg_insert($this->connection, $this->table, $data);
        $this->desconnect();
        return $result;
    }

    public function update(int $id, array $data)
    {
        $this->connect();
        $result = pg_update($this->connection, $this->table, $data, ['id' => $id]);
        $this->desconnect();
    }

    public function delete(int $id) 
    {
        $this->connect();
        $result = pg_delete($this->connection, $this->table, ['id' => $id]);
        $this->desconnect();
    }

    public function oneToOne(string $table, string $foreignKey, string $key = 'id')
    {
        $this->connect();
        $result = pg_query(
            $this->connection,
            "select $table.* from $table inner join $this->table on $this->table.$key = $table.$foreignKey" 
        );
        return json_encode(pg_fetch_all($result)[0]);
    }

    public function oneToMany(string $table, string $foreignKey, string $key = 'id')
    {
        $this->connect();
        $result = pg_query(
            $this->connection,
            "select $table.* from $table inner join $this->table on $this->table.$key = $table.$foreignKey where $this->table.$key = $this->tableId"
        );
        return json_encode(pg_fetch_all($result));
    }
}