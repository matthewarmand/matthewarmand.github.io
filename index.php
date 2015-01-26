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

?>

#print row with days of the week
<tr>
    <td> Sunday </td>
    <td> Monday </td>
    <td> Tuesday </td>
    <td> Wednesday </td>
    <td> Thursday </td>
    <td> Friday </td>
    <td> Saturday </td>
</tr>
<tr>

<?php
$days = 1;
$box = 0;

# print blank boxes until start day
while ($box < $start_day) {
    echo "<td></td>";
    $box++;
}

while ($days <= $days_in_month) {
    if ($box == 6) {
        echo "</tr><tr>";
        $box = 0;
    }
    echo "<td> $days </td>";
    $box++;
    $days++;
}
echo "</tr>"

?>
