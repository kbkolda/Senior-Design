<?php
include('../login_func/session.php');
require_once('../bdd.php');
session_start();
ini_set("include_path", '/home4/peacebr2/php:' . ini_get("include_path") );
include('Spreadsheet/Excel/Writer.php');





$gendate = $_POST['gendate'];
$stop_date = date('Y-m-d', strtotime($gendate . ' +1 day'));



    $sql = "SELECT firstname as First,
                    lastname as Last,
                    Type as role,
                    DATE_FORMAT(start,'%h:%i %p') as Start,
                    DATE_FORMAT(end,'%h:%i %p') as End,
                    title as Comments,
                    staff.classroom as Class
                    from staffevents
                    INNER JOIN staff
                    WHERE staffevents.start > '$gendate'
                    AND staffevents.end < '$stop_date'
                    AND staff.username = staffevents.user
                    ORDER BY username ASC";
                    
                    
	$query = $bdd->prepare( $sql );
	$sth = $query->execute();
    

$theData = array();

$columnTitles = 0;
while($data = $query->fetch(PDO::FETCH_ASSOC))
{
    if($columnTitles == 0){$columnTitles = array_keys($data);}
    array_push($theData,$data);
}


$sheetTitle = $gendate;
$numColumns = count($columnTitles);

//Creating a workbook
$workbook = new Spreadsheet_Excel_Writer();
  
//Sending HTTP headers
$today = getdate();

$workbook->send('StaffDailySheet.xls');

//Creating a worksheet
$worksheet=&$workbook->addWorksheet('Export');
$worksheet->setLandscape();
  
//set all columns same width
$columnWidth = 15;
$worksheet->setColumn (0, $numColumns, $columnWidth);
  
//Setup different styles
$sheetTitleFormat =& $workbook->addFormat(array('bold'=>1,
  'size'=>10));
$columnTitleFormat =& $workbook->addFormat(array('bold'=>1,
  'top'=>1,
  'bottom'=>1 ,
  'size'=>9));
$regularFormat =& $workbook->addFormat(array('size'=>9,
  'align'=>'left',
  'textWrap'=>1));
  
//Speadsheet writer is in format y,x (row, column)
//  column1  |  column2 |  column3
//  (0,0)      (0,1)      (0,2)
  
$column = 0;
$row    = 0;
//Write sheet title in upper left cell
$worksheet->write($row, $column, $sheetTitle, $sheetTitleFormat);


//Write column titles two rows beneath sheet title
$row += 2;
foreach ($columnTitles as $title) {
  $worksheet->write($row, $column, $title, $columnTitleFormat);
  $column++;
}

//Write each datapoint to the sheet starting one row beneath
$row++; 
foreach ($theData as $subArrayKey => $subArray) {
    //Loop through each row
    $column = 0;
    foreach ($subArray as $value) {
      //Loop through each row's columns
      $worksheet->write($row, $column, $value, $regularFormat);
      $column++;
    }
    $row++;
  }
$workbook->close();










?>
