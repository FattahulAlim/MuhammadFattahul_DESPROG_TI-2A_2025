<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        table {
            border-collapse: collapse;
            width: 20%;
            border: 2px solid;
        }

        th, td{
            border: 2px solid;
        }
    </style>
</head>

<body>
    <?php
    $dosen = [
        'nama' => 'Elok Nur Handan',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan',
    ];
    ?>

    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>

        <?php
        foreach ($dosen as $key => $value) {
            echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>