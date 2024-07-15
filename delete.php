<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = htmlspecialchars($_POST["id"], ENT_QUOTES, 'UTF-8');    
    $sql = "DELETE FROM users WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
    $conn->close();
}
?>

<form method="post" action="delete.php">
    ID: <input type="text" name="id">
    <input type="submit" value="Delete">
</form>

