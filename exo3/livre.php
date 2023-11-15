<?php
require 'data/pdo.php';

class Livre {
    public int $id;
    public string $titre;
    public string $date_publication;
    public string $description;
    public string $author;

    public function __construct($id, $titre, $date_publication, $description, $author) {
        $this->id = $id;
        $this->titre = $titre;
        $this->date_publication = $date_publication;
        $this->description = $description;
        $this->author = $author;
    }
}

