<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form edit</title>
</head>
<body>
<form action="<?= base_url('Firstpage/addprocess') ?>" method="post">

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">

        <label for="notel">Phone Number (Notel):</label>
        <input type="tel" id="notel" name="notel" >

        <label for="nik">National ID (NIK):</label>
        <input type="text" id="nik" name="nik" >
        <button type="submit">Submit</button>
    </form>
</body>
</html>