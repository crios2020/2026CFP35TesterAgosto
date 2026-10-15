<?php
class Connector{

    public function getConnection(){
        //Armar url de conexión
        //PDO:mariadb://localhost:3306/colegio
    
        // MySQL - mariaDB localhost
        //$driver='mysql';
        //$hostname='localhost';
        //$username='root';
        //$password='';
        //$base='colegio';
        //return new PDO(
        //        "$driver:host=$hostname;dbname=$base",
        //        $username,
        //       $password
        //);

        // mysql db4free
        // $driver='mysql';
        // $hostname='db4free.net';
        // $username='basegeneral';
        // $password='basegeneral';
        // $base='basegeneral';
        // return new PDO(
        //         "$driver:host=$hostname;dbname=$base",
        //         $username,
        //         $password
        // );
        

        //SQLite
        $driver='sqlite';
        $file='../../data/colegio.db';      //test conector
        $file='data/colegio.db';        //front end
        //$file=__DIR__.'/data/colegio.db';
        echo $file;
        return new PDO("$driver:$file");
    }

    public function getData(){
        //return "MySQL 8";
        return "MariaDb 10";
        //return "Sqlite 3";
    }

    public function insert ($tabla, $campos, $values){
        $sql="insert into $tabla ($campos) values ($values)";
        return $this->getConnection()->exec($sql);
    }

    public function delete ($tabla, $filtro){
        //$sql="delete from $tabla where $filtro";
        $sql="update $tabla set activo=false where $filtro";
        return $this->getConnection()->exec($sql);
    }

    public function update($tabla, $set, $filtro){
        $sql="update $tabla set $set where $filtro";
        return $this->getConnection()->exec($sql);
    }

    public function get($tabla, $filtro){
        $sql = "select * from $tabla where $filtro and activo=true";
        return $this->getConnection()->query($sql);
    }

    public function getAll($tabla){
        return $this->get($tabla,"1=1");
    }

}

?>