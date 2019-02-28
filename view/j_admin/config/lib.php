<?php
class Library
{
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=jamming','root','');
    }
//CRUD J-Article    
     //count
    public function countArt()
    {
        $sql = "SELECT COUNT(id_article) FROM j_article";
        $query = $this->db->query($sql);
        return $query;
    }
    
    //show
    public function showArt()
    {
        $sql = "SELECT * FROM j_article";
        $query = $this->db->query($sql);
        return $query;
    }
    
    //insert
     public function addArt($id, $article, $description, $picture, $date)
    {
        $sql = "INSERT INTO j_article (id_article, article, description, picture, date_post) VALUES('$id', '$article', '$description', '$picture', '$date')";
        $query = $this->db->query($sql);
            if(!$query)
            {
                return "Failed";
            }
            else
            {
                return "Success";
            }
    }
    
    //view edit
    public function editArt($id)
    {
        $sql = "SELECT * FROM j_article WHERE id_article='$id'";
        $query = $this->db->query($sql);
        return $query;
    }
    
    //update
    public function updateArt($id, $article, $description, $picture)
    {
        $sql = "UPDATE j_article SET article='$article', description='$description', picture='$picture' WHERE id_article='$id'";
        $query = $this->db->query($sql);
        if(!$query)
        {
            return "Failed";
        }
        else
        {
            return "Success";
        }
    }
    
    //delete
    public function deleteArt($id)
    {
        $sql = "DELETE FROM j_article WHERE id_article='$id'";
        $query = $this->db->query($sql);
        if(!$query)
            {
                return "Failed";
            }
            else
            {
                return "Success";
            }
    }
    
    // END CRUD J-Article    
    
    //CRUD J-Galery
    //add
    public function addGalery($id, $gambar, $deskripsi)
    {
        $sql = "INSERT INTO j_galery (id, gambar, deskripsi) VALUES('$id', '$gambar', '$deskripsi')";
        $query = $this->db->query($sql);
            if(!$query)
            {
                return "Failed";
            }
            else
            {
                return "Success";
            }
    }
    //show
     public function showGalery()
    {
        $sql = "SELECT * FROM j_galery";
        $query = $this->db->query($sql);
        return $query;
    }
    //view edit
    public function editGalery($id)
    {
        $sql = "SELECT * FROM j_galery WHERE id='$id'";
        $query = $this->db->query($sql);
        return $query;
    }
    
    //update
    public function updateGalery($id, $picture, $description)
    {
        $sql = "UPDATE j_galery SET gambar='$picture', deskripsi='$description' WHERE id='$id'";
        $query = $this->db->query($sql);
        if(!$query)
        {
            return "Failed";
        }
        else
        {
            return "Success";
        }
    }
    //delete
    public function deleteGalery($id)
    {
        $sql = "DELETE FROM j_galery WHERE id='$id'";
        $query = $this->db->query($sql);
        if(!$query)
            {
                return "Failed";
            }
            else
            {
                return "Success";
            }
    }
    
    //CRUD J-Portofolio
    //add
    public function addPort($id, $id_user, $judul, $kategori, $deskripsi, $jenis, $gambar, $link, $role)
    {
        $sql = "INSERT INTO j_portofolio (id, id_user, judul, kategori, deskripsi, jenis_portofolio, gambar, video, roles) VALUES('$id', '$id_user', '$judul', '$kategori', '$deskripsi', '$jenis', '$gambar', '$link', '$role')";
        $query = $this->db->query($sql);
            if(!$query)
            {
                return "Failed";
            }
            else
            {
                return "Success";
            }
    }
    //show
     public function showPort()
    {
        $sql = "SELECT * FROM j_portofolio";
        $query = $this->db->query($sql);
        return $query;
    }
    //view
    public function viewPort($id)
    {
        $sql = "SELECT * FROM j_portofolio WHERE id='$id'";
        $query = $this->db->query($sql);
        return $query;
    }
    
    }
    ?>