<?php


class users extends DB
{
    public function __construct()
    {
        $this->table = 'users';
        $this->connect();
    }
    /**
     * @throws Exception
     */
    public function getUser($user, $password): MysqliDb|array|string|null
    {
        $admin = $this->conn->where('email', $user);
        $admin = $this->conn->where('password', $password);
        return $admin->getOne($this->table);
    }




    /**
     * @throws Exception
     */
    public function getRowByMail($mail): array|string|null
    {
        $db = $this->conn->where('email',$mail);
        return $db->getOne($this->table);
    }

    /**
     * @throws Exception
     */
    public function getRowByCode($code): array|string|null
    {
        $db = $this->conn->where('code',$code);
        return $db->getOne($this->table);
    }

    /**
     * @throws Exception
     */
    public function updateCode($code, $data): bool
    {
        $db = $this->conn->where('code',$code);
        return $db->update($this->table,$data);
    }

    /**
     * @throws Exception
     */
    public function updateByEmail($email, $data): bool
    {
        $db = $this->conn->where('email',$email);
        return $db->update($this->table,$data);
    }


    /**
     * @throws Exception
     */
    public function updateByCode($code, $data): bool
    {
        $db = $this->conn->where('code',$code);
        return $db->update($this->table,$data);
    }
}