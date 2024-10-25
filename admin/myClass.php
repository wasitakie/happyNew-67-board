<?php
class MyClass
{

    public function countGroups($m)
    {

        include '../config/connect.php';
        $se = $con->prepare("SELECT* FROM insert_data WHERE cp_code = ?");
        $se->execute([$m]);
        $n = $se->rowCount();
        return $n;
    }
}
