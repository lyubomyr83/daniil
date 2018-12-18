<?php

class Db extends Config
{
    public function query($sql)
    {
        $connection = mysqli_connect($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
        mysqli_query($connection,"SET NAMES UTF8");

        if ($sql)
        {
            $request = mysqli_query($connection,$sql);
            return $request;
        }
    }

}