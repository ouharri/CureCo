<?php

class product extends DB
{
    private bool|MysqliDb $con;

    public function __construct()
    {
        $this->table = 'products';
        $this->con = $this->connect();
    }

    public function SortBy($by, $order, $key)
    {
        $this->table = 'products';
        $this->connect();
        return $this->con->rawquery("SELECT " . "
                                        *
                                    FROM
                                        {$this->table}
                                    where 
                                        libel LIKE '%{$key}%'
                                    ORDER BY
                                        $by $order;");
    }

    /**
     * @throws Exception
     */
    public function search($key): array|string
    {
        return $this->con->rawquery("SELECT " . " *
                                            FROM
                                                {$this->table}
                                            WHERE
                                                libel LIKE '%{$key}%';");
    }

    /**
     * @throws Exception
     */
    public function getRecent(): array|string
    {
        return $this->con->rawquery("SELECT " . " * 
                                           FROM 
                                                {$this->table} 
                                           ORDER BY id LIMIT 8;");
    }
    /**
     * @throws Exception
     */
    public function getTotal(): array|string
    {
        return $this->con->rawquery("SELECT " . " count(*) as total
                                           FROM 
                                                {$this->table} 
                                           ")[0]['total'];
    }
    /**
     * @throws Exception
     */
    public function getMax()
    {
        return $this->con->rawquery("SELECT " . " max(price) as max
                                           FROM 
                                                {$this->table} 
                                           ")[0]['max'];
    }
    /**
     * @throws Exception
     */
    public function getMin()
    {
        return $this->con->rawquery("SELECT " . " min(price) as min
                                           FROM 
                                                {$this->table} 
                                           ")[0]['min'];
    }
    /**
     * @throws Exception
     */
    public function getAvg()
    {
        return $this->con->rawquery("SELECT " . " AVG(price) as avg
                                           FROM 
                                                {$this->table} 
                                           ")[0]['avg'];
    }
}