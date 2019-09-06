<?php


class Modell
{
    protected  $db;

    public function __construct()
    {
        try {
            $this->db = new PDO(
                'mysql:host=localhost;dbname=hillel_user',
                'hillel_user',
                '1111'
            );
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $error){
            echo 'problem with connect DatabaseConnect ';
        }
    }

}