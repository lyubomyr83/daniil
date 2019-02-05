<?php
namespace app\classes;

class MMenu extends Db
{
    public function getMenu()
    {
        $sql = "SELECT id,menu_name FROM pages";
        $result = $this->query($sql);
        return $result;
    }
}