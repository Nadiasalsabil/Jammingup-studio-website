<?php
class Artikel
{
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=jamming','root','');
    }
      
     //show
    public function showArt()
    {
        $sql = "SELECT * FROM j_article ORDER BY id_article DESC LIMIT 5";
        $query = $this->db->query($sql);
        return $query;
    }


     //view edit
     public function editArt($id)
     {
         $sql = "SELECT * FROM j_article WHERE id_article='$id'";
         $query = $this->db->query($sql);
         return $query;
     }
}
?>