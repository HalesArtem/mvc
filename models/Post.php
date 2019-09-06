<?php

class Post extends Modell
{
    public static function readAllPosts()
    {
        try {
        $articles = [];
        $bd =new Modell();

        $sql = 'SELECT * FROM posts';

        $query = $bd->db->prepare($sql);

        $query->execute();

        $arrValues = $query->fetchAll();

        foreach ($arrValues as $key => $values){
            $articles[] = [
                'id' => $values['id'],
                'short' => $values['short'],
                'country' => $values['country'],
                'description' => $values['description']
            ];
        }
        }catch (PDOException $error){
            echo 'problem with select posts  ';
        }
        return $articles;
    }

    public static function findOnePost($id)
    {
        return self::readAllPosts()[$id];
    }
}
