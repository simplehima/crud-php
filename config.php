<?php
// Database configuration
define('DB_HOST', 'localhost');       // Database host
define('DB_USER', 'root');            // Database username
define('DB_PASS', '');                // Database password
define('DB_NAME', 'online Shopping System'); // Database name

// Create a database connection
try {
    $Connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        // Check for connection errors
            if ($Connection->connect_error) {
                    throw new Exception("Database connection failed: " . $Connection->connect_error);
                        }
                        } catch (Exception $e) {
                            // Handle connection errors
                                http_response_code(500);
                                    echo json_encode(["status" => "error", "message" => $e->getMessage()]);
                                        exit();
                                        }
                                        ?>