<?php
class TravelEnquiry {

    public function __construct($gic_db) {
    	
	    $this -> database = $gic_db;

    }
	    
	 public function executeQuery() {
	 	
	    try {
	       
	        $query = "SELECT * FROM student"; //SQL query
	        
	        $query_prepare = $this->database->prepare($query);
	
	        $query_prepare->execute(); // Execute the query
	        
	        $students = $query_prepare->fetchAll(PDO::FETCH_ASSOC); // Fetch all rows as an associative array

	        return array("status" => true, "message" => "Select successful", "data" => $students); // Return the fetched data
	        
	    } catch (PDOException $e) {
	       
	        die("Query execution failed: " . $e->getMessage()); // Handle errors
	    }
	}
    
}