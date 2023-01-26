<?php

class history extends DB
{
    private bool|MysqliDb $con;

    public function __construct()
    {
        $this->table = 'history';
        $this->con = $this->connect();
    }

    /**
     * @throws Exception
     */
    public function getAllHistory(): array|string
    {
        return $this->con->rawquery("SELECT hi.*,
                                        CONCAT(u.firstName, ' ', u.lastName) AS name, " . "
                                        u.img
                                    FROM
                                        `history` hi
                                    INNER JOIN users u ON
                                        u.id = hi.users;");
    }

    /**
     * @throws Exception
     */
    public function SortBy($by, $order,$key): array|string
    {
        return $this->con->rawquery("SELECT " . "
                                        hi.*,
                                        CONCAT(u.firstName, ' ', u.lastName) AS NAME,
                                        u.img
                                    FROM
                                        `history` hi
                                    INNER JOIN users u ON
                                        u.id = hi.users
                                    WHERE
                                        CONCAT(u.firstName, ' ', u.lastName) LIKE '%{$key}%'
                                    ORDER BY
                                        $by $order;");
    }

    /**
     * @throws Exception
     */
    public function search($key): array|string
    {
        return $this->con->rawquery("SELECT " . "
                                        hi.*,
                                        CONCAT(u.firstName, ' ', u.lastName) AS NAME,
                                        u.img
                                    FROM
                                        `history` hi
                                    INNER JOIN users u ON
                                        u.id = hi.users
                                    WHERE
                                        CONCAT(u.firstName, ' ', u.lastName) LIKE '%{$key}%' ");
    }


}