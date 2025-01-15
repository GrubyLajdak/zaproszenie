<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = $_POST['response'];

    // Połączenie z bazą danych
    $conn = new mysqli('localhost', 'root', '', 'studniowka');

    if ($conn->connect_error) {
        die("Błąd połączenia: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO responses (response) VALUES (?)");
    $stmt->bind_param('s', $response);

    if ($stmt->execute()) {
        if ($response === 'zgadzam_sie') {
            header('Location: disagree1.php');
        } else {
            header('Location: disagree.php');
        }
    } else {
        echo "Błąd zapisu do bazy danych: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
    exit;
}
?>