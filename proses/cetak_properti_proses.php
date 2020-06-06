<?php
function rupiah($angka)
{
	$hasilrupiah ="Rp ".number_format($angka,2,',','.');
	return $hasilrupiah;
}
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
$pdf->Cell(190,7,'Laporan Data Properti',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'Agen Properti Perusahaan X',0,1,'C');
 $tgl= "Time : ".date("l, d F Y");
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,"",0,1);
date_default_timezone_set('Asia/Jakarta');
$pdf->Cell(10,7,"Date: ".date('Y-m-d H:i:s', strtotime('now')) ,0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,7,"Tabel 1 / 2",0,1);
$pdf->Cell(9,6,'No.',1,0);
$pdf->Cell(20,6,'Kategori',1,0);
$pdf->Cell(20,6,'Jenis',1,0);
$pdf->Cell(45,6,'Harga',1,0);
$pdf->Cell(50,6,'Alamat',1,0);
$pdf->Cell(20,6,'L.Tanah',1,0);
$pdf->Cell(25,6,'L. Bangunan',1,1);

$pdf->SetFont('Arial','',10);
$i=1;
$sql = mysqli_query($koneksi, "select * from properti");
while ($row = mysqli_fetch_array($sql)){
    $pdf->Cell(9,6,$i++.".",1,0);
    $pdf->Cell(20,6,$row['kategori_transaksi'],1,0);
    $pdf->Cell(20,6,$row['jenis_properti'],1,0);
    $pdf->Cell(45,6,rupiah($row['harga']),1,0); 
    $pdf->Cell(50,6,$row['alamat'],1,0); 
    $pdf->Cell(20,6,$row['luastanah']." m2",1,0); 
    $pdf->Cell(25,6,$row['luasbangunan']." m2",1,1);
}

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,7,"",0,1);
$pdf->Cell(10,7,"Tabel 2 / 2",0,1);
$pdf->Cell(9,6,'No.',1,0);
$pdf->Cell(135,6,'Keterangan',1,1);

$pdf->SetFont('Arial','',10);
$i=1;
$sql = mysqli_query($koneksi, "select * from properti");
while ($row = mysqli_fetch_array($sql)){
    $pdf->Cell(9,6,$i++.".",1,0);
    $pdf->Cell(135,6,$row['keterangan'],1,1);
}

$pdf->Output();
?>

