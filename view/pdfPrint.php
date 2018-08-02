<?php
include "../config/config.php";
session_start();

$id = $_GET["id"];
$type = $_GET["type"];
$event_type="";
$title = $subtitle = $description = $date = $name = $topic = $contact = $guide = $image1 = $image2 = $image3 = $image4 = $report = "";
$mid_x = 135; // the middle of the "PDF screen", fixed by now.

switch ($type) {
    case 1:
        $sql = "select * from iqac.workshop where id='$id'";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();
        $title = $row["title"];
        $subtitle = $row["subtitle"];
        $description = $row["description"];
        $date = date("d-m-Y", strtotime($row["dateOfConduct"]));
        $report = $row["report"];
        $image1 = $row["img1"];
        $image2 = $row["img2"];
        $image3 = $row["img3"];
        $image4 = $row["img4"];
        break;
    case 2:
        $sql = "select * from iqac.seminars where id='$id'";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();
        $title = $row["title"];
        $subtitle = $row["subtitle"];
        $description = $row["description"];
        $date = $row["dateOfConduct"];
        $name = $row["lecturerName"];
        $topic = $row["topic"];
        $contact = $row["contact"];
        $report = $row["report"];
        $image1 = $row["img1"];
        $image2 = $row["img2"];
        $image3 = $row["img3"];
        $image4 = $row["img4"];
        break;
    case 3:
        $sql = "select * from iqac.guest_lectures where id='$id'";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();
        $title = $row["title"];
        $subtitle = $row["subtitle"];
        $description = $row["description"];
        $date = $row["dateOfConduct"];
        $name = $row["lecturerName"];
        $topic = $row["topic"];
        $contact = $row["contact"];
        $report = $row["report"];
        $image1 = $row["img1"];
        $image2 = $row["img2"];
        $image3 = $row["img3"];
        $image4 = $row["img4"];
        break;
    case 4:
        $sql = "select * from iqac.iv where id='$id'";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();
        $title = $row["title"];
        $subtitle = $row["subtitle"];
        $description = $row["description"];
        $date = $row["dateOfConduct"];
        $name = $row["industryName"];
        $topic = $row["topic"];
        $guide = $row["guide"];
        $contact = $row["contact"];
        $report = $row["report"];
        $image1 = $row["img1"];
        $image2 = $row["img2"];
        $image3 = $row["img3"];
        $image4 = $row["img4"];
        break;
    case 5:
        $sql = "select * from iqac.workshop where id='$id'";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();
        $title = $row["title"];
        $subtitle = $row["subtitle"];
        $description = $row["description"];
        $date = $row["dateOfConduct"];
        $report = $row["report"];
        $image1 = $row["img1"];
        $image2 = $row["img2"];
        $image3 = $row["img3"];
        $image4 = $row["img4"];
        break;
    default:
        # code...
        break;
}

require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    $this->SetFont('Arial','B',10);
    $this->Cell(0,0,'Date: '.$GLOBALS["date"]);
    $this->Ln(3);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Move to the right
    // Title
    $this->MultiCell(0,5,$GLOBALS["title"],0,'C');
    // Line break
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->MultiCell(0,10,$subtitle,0,'C');
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(0,5,$description,0,'L');
if($type == 2 || $type == 3)
{
    $pdf->SetFont('Arial','',10);
    $pdf->MultiCell(0,5,'Lecturer Name: '.$name,0,'L');
    $pdf->MultiCell(0,5,'Topic: '.$topic,0,'L');
    $pdf->MultiCell(0,5,'Contact: '.$contact,0,'L');
}
if($type == 4)
{
    $pdf->SetFont('Arial','',10);
    $pdf->MultiCell(0,5,'Industry Name: '.$name,0,'L');
    $pdf->MultiCell(0,5,'Topic: '.$topic,0,'L');
    $pdf->MultiCell(0,5,'Guide: '.$topic,0,'L');
    $pdf->MultiCell(0,5,'Contact: '.$contact,0,'L');
}
$pdf->MultiCell(0,5,'');
$pdf->Cell(45,$pdf->Image('../'.$image1,$pdf->GetX(),$pdf->GetY(),45));
$pdf->Cell(45,$pdf->Image('../'.$image2,$pdf->GetX()+2,$pdf->GetY(),45));
$pdf->Cell(45,$pdf->Image('../'.$image3,$pdf->GetX()+4,$pdf->GetY(),45));
$pdf->Cell(45,$pdf->Image('../'.$image4,$pdf->GetX()+6,$pdf->GetY(),45));
$pdf->Ln(60);
$pdf->MultiCell(0,5,'Sign                            ',0,'R');
$pdf->Output();

?>