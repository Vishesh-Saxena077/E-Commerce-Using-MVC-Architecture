<?php
class User {
    private $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    // Add methods for user-related database operations (e.g., user registration, login, etc.)
    public function createUser($userData) {
        // Extract data from $userData array
        $cols = implode(',', array_keys($userData));
        $vals = implode("','", array_keys($userData));

        // Prepare SQL statement to insert a new user into the database
        $sql = "INSERT INTO users ($cols) VALUES ('$vals')";

        // Execute the SQL statement
        try{
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            echo "User Created Successfully";
        } catch (PDOException $e){
            die('Error Creating User: ' . $e->getMessage());
        }
    }
    
}
?>
