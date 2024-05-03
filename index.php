<?php

require_once 'DatabaseConnection.php';

// Get database connection instance
$db = DatabaseConnection::getInstance();

try {
    // Insert data
    $sql = "INSERT INTO novel (judul, penulis, genre, tahun_terbit) VALUES 
            ('Harry Potter and the Philosopher\'s Stone', 'J.K. Rowling', 'Fantasy', 1997),
            ('To Kill a Mockingbird', 'Harper Lee', 'Fiction', 1960),
            ('1984', 'George Orwell', 'Dystopian', 1949)";
    $db->exec($sql);
    echo "New records created successfully<br>";

    // Update data
    $sql = "UPDATE novel SET tahun_terbit = 1998 WHERE judul = 'Harry Potter and the Philosopher\'s Stone'";
    $db->exec($sql);
    echo "Record updated successfully<br>";

    // Delete data
    $sql = "DELETE FROM novel WHERE judul = '1984'";
    $db->exec($sql);
    echo "Record deleted successfully<br>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}