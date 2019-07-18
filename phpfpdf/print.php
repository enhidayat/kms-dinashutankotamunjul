<?php
    include '../koneksi.php';
    include "fpdf.php";
    //$Lapor = "SELECT * FROM pengetahuan ";
    $Hasil = mysqli_query($koneksi, "select  * from pengetahuan");
   // $Hasil = mysql_query(Skoneksi,$Lapor);
    $Data = array();
    while($row = mysqli_fetch_assoc($Hasil)){
        array_push($Data, $row);
    }
    $Judul = "Data Siswa";
    $tgl= "Time : ".date("l, d F Y");
    $Header= array(
        array("label"=>"Id_pengetahuan", "length"=>20, "align"=>"L"),
        array("label"=>"Pengirim", "length"=>60, "align"=>"L"),
        array("label"=>"Tanggal", "length"=>40, "align"=>"L"),
        array("label"=>"Judul", "length"=>33, "align"=>"L"),
        array("label"=>"Isi", "length"=>30, "align"=>"L"),
    );
    //require ("fpdf16/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage('P','A4','C');
    $pdf->SetFont('arial','B','15');
    $pdf->Cell(0, 15, $Judul, '0', 1, 'C');
    $pdf->SetFont('arial','i','9');
    $pdf->Cell(0, 10, $tgl, '0', 1, 'P');
    $pdf->SetFont('arial','','12');
    $pdf->SetFillColor(190,190,0);
    $pdf->SetTextColor(255);
    $pdf->setDrawColor(128,0,0);
    foreach ($Header as $Kolom){
        $pdf->Cell($Kolom['length'], 8, $Kolom['label'], 1, '0', $Kolom['align'], true);
    }
    $pdf->Ln();
    $pdf->SetFillColor(244,235,255);
    $pdf->SettextColor(0);
    $pdf->SetFont('arial','','10');
    $fill =false;
    foreach ($Data as $Baris){
        $i= 0;
        foreach ($Baris as $Cell){
            $pdf->Cell ($Header[$i]['length'], 7, $Cell, 2, '0', $Kolom['align'], $fill);
            $i++;
        }
        $fill = !$fill;
        $pdf->Ln();
    }
    $pdf->Output();
?>