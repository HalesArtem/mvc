<?php

class Article extends Modell
{
    public static function readAllArticles()
    {
        try {
        $articles = [];
        $bd =new Modell();

        $sql = 'SELECT * FROM articles ';

        $query = $bd->db->prepare($sql);

        $query->execute();

        $arrValues = $query->fetchAll();

        foreach ($arrValues as $key => $values){
            $articles[] = [
                'id' => $values['id'],
                'title' => $values['title'],
                'article' => $values['article'],
                'text' => $values['text']
            ];
        }
        }catch (PDOException $error){
            echo 'problem with select posts  ';
        }
        return $articles;
    }

    public static function findOneArticle($id)
    {
        return self::readAllArticles()[$id];
    }
}
