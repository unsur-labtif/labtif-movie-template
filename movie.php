<?php

require_once 'database.php';
class Movie
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllMovies()
    {
        return $this->db->select('movies');
    }
}