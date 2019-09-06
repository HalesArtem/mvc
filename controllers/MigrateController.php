<?php


class MigrateController extends Modell
{

    public function actionIndex()
    {
        require_once '../components/arrayPublications.php';
        $sql = '
        CREATE TABLE posts (
            `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            `short` VARCHAR(255),
            `country` VARCHAR(50),
            `description` TEXT
            )
        ';
        $this->db->exec($sql);

        $sql = '
        CREATE TABLE articles (
            `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            `title` VARCHAR(255),
            `article` VARCHAR(50),
            `text` TEXT
            )
        ';
        $this->db->exec($sql);
        foreach ($publications as $publication){
            if ($publication['type'] == 'post'){

                $sql = '
            INSERT INTO posts SET 
                `short`=:short,
                `country`=:country,
                `description`=:description
            ';
                $query = $this->db->prepare($sql);

                $query->bindValue(':short', $publication['short']);
                $query->bindValue(':description', $publication['description']);
                $query->bindValue(':country', $publication['country']);
                $query->execute();

            }elseif ($publication['type'] == 'article'){
                $sql = '
            INSERT INTO articles SET 
                `title`=:title,
                `article`=:article,
                `text`=:text
            ';
                $query = $this->db->prepare($sql);

                $query->bindValue(':title', $publication['title']);
                $query->bindValue(':text', $publication['text']);
                $query->bindValue(':article', $publication['article']);

                $query->execute();
            }
        }

    }
}