<?php
class classes extends database
{

    private $id;
    private $name;
    private $is_active;

    public function __construct()
    {
        $this->id = http::input("id");
        $this->name = http::input("name");
        $this->is_active = http::input("is_active");
    }

    public function listing()
    {
        try {
            $stmt = "SELECT * FROM classes";
            $query = parent::$con->prepare($stmt);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $data = $query->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function create()
    {
        if (http::is_method("post")) {
            try {
                $stmt = "INSERT INTO `classes`(`name`, `is_active`) VALUES ('{$this->name}', '{$this->is_active}')";
                $query = parent::$con->prepare($stmt);
                $data = $query->execute();
                http::redirect("classes.php");

                return $data;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public function update()
    {
        if (http::is_method("post")) {
            try {
                $stmt = "UPDATE `classes` SET `name`='{$this->name}' , `is_active`='{$this->is_active}' WHERE id={$this->id}";
                $query = parent::$con->prepare($stmt);
                $data = $query->execute();
                http::redirect("classes.php");

                return $data;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public function delete()
    {
        if (http::is_get("id")) {
            try {
                $stmt = "DELETE FROM classes WHERE id={$this->id}";
                $query = parent::$con->prepare($stmt);
                $query->execute();

                http::redirect("classes.php");
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public function single()
    {
        try {
            $stmt = "SELECT * FROM classes WHERE id={$this->id}";
            $query = parent::$con->prepare($stmt);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $data = $query->fetch();
            return $data;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function students()
    {
        try {
            $stmt = "SELECT * FROM students";
            $query = parent::$con->prepare($stmt);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $data = $query->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}


$classes = new classes();
