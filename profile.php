<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<style>
     *{
        font-family : sans-serif;
    }
    body{
        margin: 0px;
        background-color: #cad1ff;
    }
    nav{
        height: 50px;
        background-color: #f9ffca;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-inline: 10px;
        margin: 0px;
    }
    a{
        text-decoration: none;
        margin-inline: 20px;
        color: black;
    }
    div>a:last-child{
        text-decoration: underline;
    }
    p{
        margin: 0px;
    }
    caption{
        font-size: 25pt;
        margin-top: 80px;
        margin-bottom: 60px;
    }
    td{
        width: 10vw;
        padding: 15px; 
        vertical-align: top;
        text-align: left;
    }
    td:nth-child(even){
        width: 10vw;
        padding-right: 10vw;
        font-weight: bold;
    }
    td:last-child{
        padding-right: 0px;
    }
    input{
        width: 15vw;
    }
    img{
        width: 150px;
    }
</style>
<body>
    <nav>
        <p>Aplikasi Pengelolaan Keuangan</p>
        <div>
            <a href="home.php">Home</a>
            <a href="profile.php">Profile</a>
        </div>
        <a href="welcome.php">Logout</a>
    </nav>
    <table>
            <caption>Profil Pribadi</caption>
            <tr>
                <td>Nama Depan</td>
                <td><?php echo $_SESSION['namadepanSession'] ?></td>
                <td>Nama Tengah</td>
                <td><?php echo $_SESSION['namatengahSession'] ?></td>
                <td>Nama Belakang</td>
                <td><?php echo $_SESSION['namabelakangSession'] ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><?php echo $_SESSION['tempatlahirSession'] ?></td>
                <td>Tgl Lahir</td>
                <td><?php echo $_SESSION['tgllahirSession'] ?></td>
                <td>NIK</td>
                <td><?php echo $_SESSION['nikSession'] ?></td>  
            </tr>
            <tr>
                <td>Username</td>
                <td><?php echo $_SESSION['warganegaraSession'] ?></td>  
                <td>Email</td>
                <td><?php echo $_SESSION['emailSession'] ?></td>  
                <td>No HP</td>
                <td><?php echo $_SESSION['nohpSession'] ?></td>  
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?php echo $_SESSION['alamatSession'] ?></td>
                <td>Kode Pos</td>
                <td><?php echo $_SESSION['kodeposSession'] ?></td>
                <td>Foto Profil</td>
                <?php echo "<td><img src=\"".$_SESSION['fotoprofilSrcSession']."\"></td>"; ?>
            </tr>
            
        </table>
</body>
</html>