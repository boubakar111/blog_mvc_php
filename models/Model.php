<?php


abstract class Model
{
    private static $_bdd;

    private static function setBdd()
    {
        self::$_bdd = new PDO('mysql:host=localhost;dbname=newsportal;charset=UTF8', 'root', '');
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    }


// function  de connection par default
    protected function getBdd()
    {
        if (self::$_bdd == null) {
            self::setBdd();
            return self::$_bdd;
        }
    }

    protected function getAll($table, $obj)
    {
        $this->getBdd();

        $req = self::$_bdd->query(' SELECT * FROM ' . $table );
        $req->execute();
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            // $tb conteiendera les données sous form d'objet
            $tb[] = new $obj($data);
        }
        return $tb;
        $req->closeCursore();


    }
    //reruen  un seul article avec un id

    protected function getOnePost($table, $obj , $id)
    {
        $this->getBdd();

        $req = self::$_bdd->query(' SELECT * FROM ' . $table .' where  CategoryId ='  .$id );
        $req->execute(array($id));
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            // $tb conteiendera les données sous form d'objet
            $tb[] = new $obj($data);
        }

        return $tb;

        $req->closeCursore();

    }


}