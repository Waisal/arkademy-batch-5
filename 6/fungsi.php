<?php

$conn = new mysqli('localhost', 'root', '', 'bootcamp');
if ($conn->connect_errno) {
    echo 'koneksi gagal' . $conn->connect_error;
}

function TampilName()
{
    global $conn;
    $query = ('SELECT name.id,name.Name ,name.id_work,name.id_salary, work.name, category.salary FROM name JOIN work ON name.id_work = work.id JOIN category ON name.id_salary = category.id
    ');

    $tampil = $conn->query($query);
    $rows = [];
    while ($row = $tampil->fetch_assoc()) {
        $rows[] = $row;
    }

    return $rows;
}

function TampilWork()
{
    global $conn;
    $query = $conn->query("SELECT * FROM work");
    $rows = [];
    while ($row = $query->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}
function TampilSalary()
{
    global $conn;
    $query = $conn->query("SELECT * FROM category");
    $rows = [];
    while ($row = $query->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}

function Add($data)
{
    global $conn;
    $name = htmlspecialchars($data['name']);
    $work = $data['work'];
    $salary = $data['salary'];

    $query = $conn->query("INSERT INTO name VALUES('','$name','$work','$salary')");

    if ($query) {
        return '<div class="flashdata" data-flash="Ditambahkan" data-name="' . $name . '"></div>';
    } else {
        return '<div class="flashdata" data-flash="Gagal Ditambahkan" data-name="' . $name . '"></div>';
    }
}

function Edit($data)
{
    global $conn;
    $id = $data['id'];
    $name = htmlspecialchars($data['name']);
    $work = $data['work'];
    $salary = $data['salary'];

    $query = $conn->query("UPDATE name SET Name='$name',id_work='$work',id_salary='$salary' WHERE id ='$id'");

    if ($query) {
        return '<div class="flashdata" data-flash="Diubah" data-name="' . $name . '"></div>';
    } else {
        return '<div class="flashdata" data-flash="Gagal Diubah" data-name="' . $name . '"></div>';
    }
}
function Delete($data)
{
    global $conn;
    $id = $data['id'];
    $name = $data['name'];
    $query = $conn->query("DELETE FROM name WHERE id='$id'");
    if ($query) {
        return '<div class="flashdata" data-flash="Dihapus" data-name="' . $name . '"></div>';
    } else {
        return '<div class="flashdata" data-flash="Gagal Dihapus" data-name="' . $name . '"></div>';
    }
}
