<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
		</tr>
		<?php foreach($tb_mahasiswa as $u){ ?>
		<tr>
			<td><?php echo $u->Nama_Mahasiswa?></td>
			
		</tr>
		<?php } ?>
	</table>
</body>
</html>