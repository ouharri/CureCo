<?php
require_once(LIBS . 'DB/MysqliDb.php');

class DB
{
    protected $db;
    protected $table;
    protected $conn;

    public function connect(): bool|MysqliDb
    {
        $database = new MysqliDb (HOST, USER, PASS, DBNAME);
        if (!$database->connect()) {
            $this->db = $database;
            $this->conn = $database;
            return $this->db;
        } else {
            die ('error connecting');
            return false;
        }
    }

    /**
     * @throws Exception
     */
    public function insert($data): bool
    {
        return $this->db->insert($this->table, $data);
    }

    /**
     * @throws Exception
     */
    public function delete($id): bool
    {
        $db = $this->db->where('id', $id);
        return $db->delete($this->table);
    }

    public function getAll()
    {
        return  $this->conn->get($this->table);
    }

    /**
     * @throws Exception
     */
    public function getRow($id): array|string|null
    {
        $db = $this->db->where('id', $id);
        return $db->getOne($this->table);
    }

    /**
     * @throws Exception
     */
    public function update($id, $data): bool
    {
        $db = $this->db->where('id', $id);
        return $db->update($this->table, $data);
    }
}