<?php
$conn = new mysqli("sql203.infinityfree.com", "if0_38063719", "Ade6oyin", "if0_38063719_anipaca");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully!";
