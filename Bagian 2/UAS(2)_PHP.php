<?php
include 'UAS(3)_PHP.php';

class FormData {
    private $name;
    private $umur;
    private $hobi;
    private $jeniskelamin;

    public function __construct($name, $umur, $hobi, $jeniskelamin) {
        $this->name = $name;
        $this->umur = $umur;
        $this->hobi = $hobi;
        $this->jeniskelamin = $jeniskelamin;
    }

    public function displayInfo() {
        echo '<tr>';
        echo '<td>' . $this->name . '</td>';
        echo '<td>' . $this->umur . '</td>';
        echo '<td>' . $this->hobi . '</td>';
        echo '<td>' . $this->jeniskelamin . '</td>';
        echo '</tr>';
    }

    public function saveToDatabase() {
        global $conn;

        $sql = "INSERT INTO FormData (name, umur, hobi, jeniskelamin) VALUES ('$this->name', $this->umur, '$this->hobi', '$this->jeniskelamin')";

        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil disimpan ke database.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

function displayFormData() {
    global $conn;
    $formEntries = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'] ?? '';
        $umur = $_POST['umur'] ?? '';
        $hobi = isset($_POST['hobi']) ? 'Membaca' : 'Menulis';
        $jeniskelamin = $_POST['jeniskelamin'] ?? '';

        $formEntries[] = new FormData($name, $umur, $hobi, $jeniskelamin);

        end($formEntries)->saveToDatabase();
    }
    foreach ($formEntries as $entry) {
        $entry->displayInfo();
    }
}
?>
