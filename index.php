<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Index</title></head>
<body>
    <h2 style="color: brown; text-align: center;">ΟΝΟΜΑ - ΑΜ</h2>
    <hr>

    <?php
    // 1. ΣΥΝΔΕΣΗ (ΠΑΝΤΑ ΙΔΙΑ)
    $conn = mysqli_connect("localhost", "root", "", "test");
    if (!$conn) die("Σφάλμα σύνδεσης: " . mysqli_connect_error());

    // 2. ΔΗΜΙΟΥΡΓΙΑ ΠΙΝΑΚΑ (ΑΛΛΑΞΕ ΤΟ 'iisXXXX' ΚΑΙ ΤΑ ΠΕΔΙΑ!)
    $sql = "CREATE TABLE IF NOT EXISTS iisXXXX (
        id INT AUTO_INCREMENT PRIMARY KEY,
        onoma VARCHAR(255),
        email VARCHAR(255)
    )";

    // 3. ΕΚΤΕΛΕΣΗ & ΜΗΝΥΜΑ
    if (mysqli_query($conn, $sql)) {
        echo "<h3>Ο πίνακας δημιουργήθηκε!</h3>";
    } else {
        echo "<h3>Σφάλμα: " . mysqli_error($conn) . "</h3>";
    }
    ?>

    <br>
    <a href="insert.php">Εισαγωγή / Διαχείριση</a> | 
    <a href="view.php">Προβολή Εγγραφών</a>
</body>
</html>