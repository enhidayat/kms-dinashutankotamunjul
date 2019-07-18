<?php
// FUNGSI
function tanggal_indo($tanggal, $cetak_hari = false)
{
	$hari = array ( 1 =>    'Senin',
				'Selasa',
				'Rabu',
				'Kamis',
				'Jumat',
				'Sabtu',
				'Minggu'
			);
			
	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split 	  = explode('-', $tanggal);
	$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
	
	if ($cetak_hari) {
		$num = date('N', strtotime($tanggal));
		return $hari[$num] . ', ' . $tgl_indo;
	}
	return $tgl_indo;
}

// AMBIL DATA DARI DATABASE
// $con = @mysqli_connect('localhost', 'root', '', 'db_kms');

// if (!$con) {
//     echo "Error: " . mysqli_connect_error();
// 	exit();
// }

// $sql 	= 'SELECT * FROM artikel';
// $query 	= mysqli_query($con, $sql);

// // TAMPILKAN DATA
// echo '<table>
// 			<thead>
// 				<tr>
// 					<th>Judul Artikel</th>
// 					<th>Tanggal Terbit</th>
// 				</tr>
// 			</thead>
// 			<tbody>';
			
// while ($row = mysqli_fetch_array($query))
// {
// 	// Ubah tanggal menjadi yyyy-mm-dd
// 	$tanggal = date('Y-m-d', strtotime($row['tanggal']));
	
// 	echo '<tr>
// 			<td>' . $row['judul_artikel'] . '</td>
// 			<td>' . tanggal_indo($tanggal, true) . '</td>
// 		</tr>';
// }

// echo '</tbody>
// 	</table>';
?>	