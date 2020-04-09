<?php
class MusicModel{
    protected $db;

    public function __construct($database)
    {
        $this->db = $database;
    }

    public function getAllMusic()
    {
        $link = $this->db->openDbConnection();

        $result = $link->query('SELECT * FROM persons');

        $music = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $music[] = $row;
        }
        $this->db->closeDbConnection($link);

        
		return $music;
    }

    public function getMusicById($id)
    {
        $link = $this->db->openDbConnection();

        $query = 'SELECT * FROM  persons WHERE  Personid=:Personid';
        $statement = $link->prepare($query);
        $statement->bindValue(':Personid', $id, PDO::PARAM_INT);
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        $this->db->closeDbConnection($link);

        return $row;
    }
	
    public function insert()
    {
        $link = $this->db->openDbConnection();

        $query = 'INSERT INTO persons ( LastName, FirstName, Age) VALUES (:LastName, :FirstName, :Age)';
        $statement = $link->prepare($query);
        $statement->bindValue(':LastName', $_POST['LastName'], PDO::PARAM_STR);
        $statement->bindValue(':FirstName', $_POST['FirstName'], PDO::PARAM_STR);
        $statement->bindValue(':Age', $_POST['Age'], PDO::PARAM_STR);
        $statement->execute();

        $this->db->closeDbConnection($link);
    }

    public function update($id)
    {
        $link = $this->db->openDbConnection();

        $query = "UPDATE persons SET LastName = :LastName, FirstName = :FirstName, Age = :Age WHERE  Personid = :Personid";
        $statement = $link->prepare($query);
        $statement->bindValue(':LastName', $_POST['LastName'], PDO::PARAM_STR);
        $statement->bindValue(':FirstName', $_POST['FirstName'], PDO::PARAM_STR);
        $statement->bindValue(':Age', $_POST['Age'], PDO::PARAM_STR);
        $statement->bindValue(':Personid', $id, PDO::PARAM_INT);
        $statement->execute();

        $this->db->closeDbConnection($link);
    }

    public function delete($id)
    {
        $link = $this->db->openDbConnection();

        $query = "DELETE FROM persons WHERE Personid = :Personid";
        $statement = $link->prepare($query);
        $statement->bindValue(':Personid', $id, PDO::PARAM_INT);
        $statement->execute();

        $this->db->closeDbConnection($link);
    }
}