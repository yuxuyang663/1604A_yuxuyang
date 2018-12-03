<?php
/**
 * Created by PhpStorm.
 * User: 于旭阳
 * Date: 2018/11/2
 * Time: 11:07
 */
class IndexController extends display
{
    public function index()
    {
        $this->fetch('index.php');
    }

    public function del(){
        $id = $_POST['id'];
        $dsn = "mysql:host=localhost;dbname=wek";
        $db = new PDO($dsn, 'root', 'root');
        $db->query('set names utf8');
        $sql = 'delete from wk where id='.$id;
        $r = $db->exec($sql);
        if($r){
            echo 1;

        }else{
            echo 2;
        }
    }

    public function update()
    {
        $name  = $_POST['name'];
        $dsn = "mysql:host=localhost;dbname=wek";
        $db = new PDO($dsn, 'root', 'root');
        $db->query('set names utf8');
        if(isset($_POST['name']) && !empty($_POST['name'])){
            $id  = $_POST['id'];
            $sql = "update wk set name='$name'where id=$id";
            $r = $db->exec($sql);
            echo $r;
        }else{
            $id = $_GET['id'];
            $sql = "select * from wk where id = $id";
            $r = $db->query($sql);
            $res = $r->fetch(PDO::FETCH_ASSOC);
        }
    }
}
