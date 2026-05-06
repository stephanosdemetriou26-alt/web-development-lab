<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Διαχείριση</title></head>
<body>
    <h2 style="color: brown; text-align: center;">ΟΝΟΜΑ - ΑΜ</h2>
    
    <form method="POST">
        ID: <input type="number" name="id" placeholder="Μόνο για Update/Delete"><br><br>
        
        Email: <input type="text" name="email"><br><br>

        <input type="radio" name="action" value="insert" checked> ΕΙΣΑΓΩΓΗ
        <input type="radio" name="action" value="update"> ΤΡΟΠΟΠΟΙΗΣΗ
        <input type="radio" name="action" value="delete"> ΔΙΑΓΡΑΦΗ
        <br><br>
        
        <input type="submit" value="Εκτέλεση">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = mysqli_connect("localhost", "root", "", "test");
        
        // ΛΗΨΗ ΔΕΔΟΜΕΝΩΝ
        $action = $_POST['action'] ?? 'insert'; // Αν δεν έχει radio, default 'insert'
        $id = intval($_POST['id']);
        $email = htmlspecialchars($_POST['email']); // Ασφάλεια
        // --- ΜΠΛΟΚ 3: ΔΙΑΓΡΑΦΗ (DELETE) ---
        if ($action == 'delete') {
            // Η ΕΝΤΟΛΗ DELETE
            $sql = "DELETE FROM iisXXXX WHERE id=$id";
            if (mysqli_query($conn, $sql))
                echo "<p>Διαγράφηκαν: " . mysqli_affected_rows($conn) . " εγγραφές.</p>";
            else
                echo "<p>Αποτυχία διαγραφής.</p>";
        }
    }
    ?>
</body>
</html>