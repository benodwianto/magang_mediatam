<?php
include 'conn.php';

// Query data from database
function queryData($table)
{
    global $conn;
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function queryById($table, $id)
{
    global $conn;
    $query = "SELECT * FROM $table WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = [];
    while ($rows = mysqli_fetch_assoc($result)) {
        $row[] = $rows;
    }
    return $row;
}

function getUsers($conn, $table, $whereClause = "")
{
    $sql = "SELECT * FROM $table";
    if (!empty($whereClause)) {
        $sql .= " WHERE " . $whereClause;
    }
    $result = mysqli_query($conn, $sql);
    return $result;
}

// Function for user data
function tambahUser($name, $email, $password, $usia, $jenis_kelamin, $pesan)
{
    global $conn;
    $query = "INSERT INTO user (name, email, password, usia, jenis_kelamin, pesan) VALUES ('$name', '$email', '$password', '$usia', '$jenis_kelamin', '$pesan')";
    if ($conn->query($query) === TRUE) {
        echo "<script>
        alert('Data berhasil ditambahkan!');
        window.location.href = 'task9/index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal ditambahkan!');
        window.location.href = 'task9/index.php';
        </script>";
    }
    $conn->close();
}

function editUser($id, $name, $email, $password, $usia, $jenis_kelamin, $pesan)
{
    global $conn;
    $query = "UPDATE user SET name = '$name', email = '$email', password = '$password', jenis_kelamin = '$jenis_kelamin', usia = '$usia', pesan = '$pesan' WHERE id = $id";
    if ($conn->query($query) === TRUE) {
        echo "<script>
        alert('Data berhasil diupdate!');
        window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal diupdate!');
        window.location.href = 'index.php';
        </script>";
    }
    $conn->close();
}

function deleteUser($id)
{
    global $conn;
    $query = "DELETE FROM user WHERE id = $id";
    if ($conn->query($query) === TRUE) {
        echo "<script>
        alert('Data berhasil dihapus!');
        window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal dihapus!');
        window.location.href = 'index.php';
        </script>";
    }
    $conn->close();
}
