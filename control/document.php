<?php

class Document
{
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=jamming','root','');
    }
      
     //show Document
    public function showDocument()
    {
        $sql = "SELECT * FROM j_document ORDER BY id DESC";
        $query = $this->db->query($sql);
        return $query;
    }
}

?>