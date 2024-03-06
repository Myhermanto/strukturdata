<!DOCTYPE html>
<html>
<head>
    <title>Input Bilangan</title>
</head>
<body>
    <form method="post" action="">
        <label for="bilangan1">Masukkan bilangan 1:</label>
        <input type="number" id="bilangan1" name="bilangan1" required><br>

        <label for="bilangan2">Masukkan bilangan 2:</label>
        <input type="number" id="bilangan2" name="bilangan2" required><br>

        <label for="bilangan3">Masukkan bilangan 3:</label>
        <input type="number" id="bilangan3" name="bilangan3" required><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    // Proses input dan pengecekan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan1 = (int) $_POST['bilangan1'];
        $bilangan2 = (int) $_POST['bilangan2'];
        $bilangan3 = (int) $_POST['bilangan3'];

        // Bandingkan bilangan 1 dan bilangan 2
        if ($bilangan1 > $bilangan2) {
            $max = $bilangan1;
        } elseif ($bilangan1 == $bilangan2) {
            $max = $bilangan1; // Bisa juga $max = $bilangan2;
        } else {
            $max = $bilangan2;
        }

        // Bandingkan MAX dengan bilangan 3
        if ($max > $bilangan3) {
            // MAX tetap tidak berubah
        } elseif ($max == $bilangan3) {
            // Tidak ada perubahan karena keduanya sama besar
        } else {
            $max = $bilangan3;
        }

        // Keluarkan sebagai output MAX
        echo "Bilangan terbesar adalah: " . $max . "\n";
    }
    ?>
</body>
</html>
