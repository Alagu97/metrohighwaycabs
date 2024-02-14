<?php
class Database {
    private $pdo;

    public function __construct() {}
    
    public function connectToDatabase() {
        $host = 'localhost';
        $dbname = 'student_form';
        $username = 'phpmyadmin';
        $password = '5j5imiZiBQuzidFD';

        try {
        	
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $pdo;
            
        } catch (PDOException $e) {
        	
            die("Database connection failed: " . $e->getMessage());
            
        }
        
    }


}
?>