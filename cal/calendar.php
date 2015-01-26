<?php

#$month = $_GET["month"];
$month = 4;
#$year = $_GET["year"];
$year = 2015;

$date = mktime (0,0,0,$month,1,$year);
#numeric day of first day in month (sunday = 0)
#number of blank days needed in beginning
$start_day = date("w", $date);
$days_in_month = date("t", $date);

#used for page header
$month_name = date("F", $date);

#print header of table
echo "<table border=1>";
echo "<tr><td colspan=7> $month_name $year </td></tr>";

#print row with days of the week
echo "<tr><td> Sunday </td>";
echo "<td> Monday </td>";
echo "<td> Tuesday </td>";
echo "<td> Wednesday </td>";
echo "<td> Thursday </td>";
echo "<td> Friday </td>";
echo "<td> Saturday </td></tr>";



?>
