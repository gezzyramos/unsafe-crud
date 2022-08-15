<?php

class Service
{
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function find_all($id = null) {
        $query = "SELECT * FROM users";
        $users = $this->db->query($query)->fetch_all(MYSQLI_ASSOC);
        
        return $users;
    }

    public function find_one($id) {
        $query = "SELECT * FROM users  WHERE id = $id";
        $user = $this->db->query($query)->fetch_assoc();
        return $user;
    }

    public function insert($values) {
        $stmt = $this->db->prepare("INSERT INTO users (name, age) VALUES (?,?)");
        $stmt->bind_param("si", $values[0], $values[1]);
        return $stmt->execute(); // return true or false
    }

    public function update($id, $values) {
        // print_r($values); die();
        $stmt = $this->db->prepare("UPDATE users SET name = ?, age = ? WHERE id = ?");
        $stmt->bind_param("sii", $values[0], $values[1], $id);
        return $stmt->execute(); // return true or false
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute(); // return true or false
    }

}
