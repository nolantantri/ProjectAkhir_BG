<?php
// memanggil library FPDF
require('../phpfpdf/fpdf.php');
// Memanggil koneksi
require('../connect.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'Laporan Data Point Of Interest',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'Agen Properti Perusahaan X',0,1,'C');
 $tgl= "Time : ".date("l, d F Y");
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,"",0,1);
date_default_timezone_set('Asia/Jakarta');
$pdf->Cell(10,7,"Date: ".date('Y-m-d H:i:s', strtotime('now')) ,0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(9,6,'No.',1,0);
$pdf->Cell(55,6,'Nama',1,0);
$pdf->Cell(23,6,'Jenis',1,0);
$pdf->Cell(100,6,'Geom',1,1);

$pdf->SetFont('Arial','',10);

$i=1;
$sql = mysqli_query($koneksi, "SELECT * FROM point_of_interest ORDER BY idpoi");
while ($row = mysqli_fetch_array($sql)){
    $pdf->Cell(9,6,$i++.".",1,0);
    $pdf->Cell(55,6,$row['nama'],1,0);
    $pdf->Cell(23,6,$row['jenis_pointofinterest'],1,0);
    $pdf->Cell(100,6,$row['geom'],1,1); 
    
}

$pdf->Output();
?>

