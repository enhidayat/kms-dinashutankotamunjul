<?php
// memanggil library FPDF
require('fpdf.php');
include '../koneksi.php';
include'../format_tgl.php';
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',20);
// mencetak string 
$pdf->Cell(300,7,'Dinas Hutan Kota Munjul',0,1,'C');
$pdf->SetFont('Arial','B',5);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(300,7,'Daftar Pengetahuan',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$tgl= date("l, d F Y"); // membuat variabel waktu lokal
$tanggal = date('Y-m-d'); //, strtotime($tgl)
$pdf->Cell(0, 10, "Tanggal Cetak : ".tanggal_indo($tanggal,true), '0', 1, 'P');
$pdf->SetFillColor(64,224,208);	

   // $pdf->SetTextColor(192,192,192);
   // $pdf->setDrawColor(128,0,0);
$pdf->Cell(30,6,'ID Pengetahuan',1,0);
$pdf->Cell(20,6,'Pengirim',1,0);
$pdf->Cell(60,6,'Tanggal',1,0);
$pdf->Cell(150,6,'Judul',1,1);
//$pdf->Cell(100,6,'Isi',1,1);
//$pdf->SetFillColor(244,235,255);

$pdf->SetFont('Arial','',10);


$pengetahuan = mysqli_query($koneksi, "select  * from pengetahuan");
while ($row = mysqli_fetch_array($pengetahuan)){
	$tanggal = date('Y-m-d', strtotime($row['tanggal']));
    $pdf->Cell(30,6,$row['id_pengetahuan'],1,0);
    $pdf->Cell(20,6,$row['uploader'],1,0);
    $pdf->Cell(60,6,tanggal_indo($tanggal, true),1,0);
    $pdf->Cell(150,6,$row['judul'],1,1); 
    //$pdf->Cell(100,8,$row['isi'],1,1); 
}

$pdf->Output();
?>
