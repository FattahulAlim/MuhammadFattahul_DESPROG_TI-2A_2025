<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Contoh htmlspecialchars() & filter_var()</title>
</head>

<body>
    <h2>Uji Fungsi htmlspecialchars() dan Validasi Email</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Masukkan teks (misalnya: &lt;h1&gt;Hello world&lt;/h1&gt;):</label><br><br>
        <input type="text" id="input" name="input"><br><br>

        <label for="email">Masukkan email:</label><br><br>
        <input type="text" id="email" name="email"><br><br>

        <button type="submit">Kirim</button>
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST['input']) && isset($_POST['email'])) {
            $input = $_POST['input'];
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

            $email = $_POST['email'];

            echo "<h3>Hasil Output:</h3>";
            echo "$input";
            echo "<br>";

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email valid:" . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
            } else {
                echo "Email tidak valid!";
            }
        } else {
            echo "Data tidak lengkap.";
        }

    }
    ?>
</body>

</html>