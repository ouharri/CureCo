<?php

class validateData
{
    public static function validate_data($data)
    {
        //connect to db
        $conn = mysqli_connect(HOST, USER, PASS, "login");
        // Remove whitespace from the beginning and end of the input
        $data = trim($data);
        // Remove any HTML or PHP tags from the input
        $data = strip_tags($data);
        // Escape any special characters in the input
        $data = htmlspecialchars($data);
        //Escapes special characters in a string for use in an SQL statement
        $data = mysqli_real_escape_string($conn, $data);
        // Check for common SQL injection attack patterns
        $injection_patterns = array("--", ";", "\"", "'", " or ", " and ", " union ", " select ", " update ", " delete ");
        foreach ($injection_patterns as $pattern) {
            if (stripos($data, $pattern) !== false) {
                die("Invalid input");
            }
        }
        return $data;
    }
}