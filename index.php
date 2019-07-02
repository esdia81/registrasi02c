<?php 
require "koneksi.php" ;
$daftarpeserta = query ("SELECT * FROM tabelpeserta" );

?>

<!DOCTYPE html>
<html>

<head>
    <title>Registrasi</title>
</head>

<body>
    
    <h1>Registrasi Peserta</h1>
    
    <p>Silakan isi kolom berikut:</p>
    
    <table>
    	<tr>
    	    <td valign="top">Nama</td>
    	    <td><input type="text" name="nama" placeholder="Isi nama lengkap"></td>
    	</tr>

    	<tr>
            <td valign="top">Alamat</td>
            <td><textarea placeholder="Isikan alamat yang dapat dihubungi" cols="20" rows="8"></textarea></td>
            
        </tr>

    	

    	<tr>
    	    <td valign="top">Tanggal Daftar</td>
    	    <td>
    	       <input type="text" style="width: 100px" placeholder="yyyy/mm/dd">
      	    </td>          	
        </tr>

    	<td colspan="200"><button type="submit" value="Kirim" >Tambah Data</button></td>
    	

    </table>

    <br/>

    <?php 
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input"){
            echo "Data berhasil di input.";
        }
    }
    ?>
    <br/>


    <table border="2" class="table">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Daftar</th>                  
        </tr>


        <?php foreach ($daftarpeserta as $data): ?>

        <tr>
            <td><?php echo $data['ID']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            
            <td><?php echo $data['tanggal']; ?></td>                       
        </tr>
        <?php endforeach; ?>
        
        
    </table>
</body>
</html>


