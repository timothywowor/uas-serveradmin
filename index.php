<?php
    $conn = new mysqli("172.19.0.2", "root", "timw17", "trucorp-db");
    if($conn->connect_error){
        die('Connect Error');
    }
    # Untuk Fetch
    $data = []; 
    $result = $conn->query("SELECT * FROM users"); 
    $conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>UAS SERVER ADMINISTRATION 2022</h2>
        <table border='1'>
            <tr>
                <th>ID</th> 
                <th>Nama</th> 
                <th>Alamat</th>
                <th>Jabatan</th>
            </tr>
            <?php
                while($rows=$result->fetch_assoc())
                {
             ?> 
            <tr>
                <td><?php echo $rows['ID'];?></td>
                <td><?php echo $rows['Nama'];?></td> 
                <td><?php echo $rows['Alamat'];?></td>  
                <td><?php echo $rows['Jabatan'];?></td> 
            </tr>
            <?php
                }
                ?>
        </table>
        </div>
        </br>
</body>
</html>
