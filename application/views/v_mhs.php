<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mhasiswa</title>
</head>

<body>
    <h2>Data Mahasiswa</h2>

    <table border="1px solid black">

        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
        </tr>

        <!-- Perulangan -->
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?php echo $mhs['nama']; ?></td>
                <td><?php echo $mhs['nim']; ?></td>
                <td><?php echo $mhs['email']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>