<?php
require('fungsi.php');
$data = TampilName();
if (isset($_POST['edit'])) {
    echo Edit($_POST);
}
if (isset($_POST['del'])) {
    echo Delete($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arkademy</title>
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar shadow-nav navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="assets/logo/arkademy.png" alt="">
                ARKADEMY BOOTCAMP</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-1 offset-11">
                <?php require('add.php'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered text-center table-striped mt-2">
                    <thead class=" thead-light">
                        <tr>
                            <th>Name</th>
                            <th>Work</th>
                            <th>Salary</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $d) : ?>
                            <tr>
                                <td><?= $d['Name'] ?></td>
                                <td><?= $d['name'] ?></td>
                                <td><?= 'Rp. ' . str_replace(',', '.', number_format($d['salary'])) ?></td>
                                <td>
                                    <?php require('del.php'); ?>
                                    <?php require('edit.php'); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/sweetalert2.all.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>