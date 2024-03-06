<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form edit</title>
</head>
<body>
<?php foreach ($warga as $data) {?>
<form action="<?= base_url('Firstpage/editprocess') ?>" method="post">
        <input type="hidden" name="id"  value="<?= $data['id'] ?>">

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?= $data['nama'] ?>">

        <label for="notel">Phone Number (Notel):</label>
        <input type="tel" id="notel" name="notel" value="<?= $data['notel'] ?>">

        <label for="nik">National ID (NIK):</label>
        <input type="text" id="nik" name="nik" value="<?= $data['nik'] ?>">
<?php } ?>
        <button type="submit">Submit</button>
    </form>
</body>
</html>