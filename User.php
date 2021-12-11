<?php

    class User
    {
        
        protected $db;

        public function __construct()
        {
            $this->db = Database::instance();
        } 

        public function emailExists($email)
        {
            $stmt = $this->db->prepare("SELECT * FROM 'users' WHERE 'email' = :email ");

            $stmt->bindParam(":email", $email, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        public function getUsers()
        {
            $query = "SELECT * FROM users";
            $stmt = $this->db->query($query);

            $send = [];

            foreach ($stmt as $row) {
                array_push($send, $row);
            }

            return $send;
        }

        public function hash($password)
        {
            return password_hash($password, PASSWORD_BCRYPT);
        }

    }
    

?>