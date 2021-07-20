<!DOCTYPE html>
<html>
<body>

<?php

var_dump(checkdate(12,31,-400));
echo "<br>";
var_dump(checkdate(2,29,2003));
echo "<br>";
var_dump(checkdate(2,29,2004));
echo "<br>";

$date=date_create("2013-03-15");
date_add($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"Y-m-d");
echo "<br>";
date_sub($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"Y-m-d");
echo "<br>";

$date=date_create_from_format("d-M-Y","6-Mar-2013");
echo date_format($date,"y/M/d");
echo "<br>";

$date=date_create("2021-11-24");
date_date_set($date,2020,10,30);
echo date_format($date,"Y/m/d H:i:s");
echo "<br>";

echo date_default_timezone_get();
echo "<br>";
date_default_timezone_set("Asia/Kolkata");
echo date_default_timezone_get();
echo "<br>";

$date1=date_create("2014-03-15");
$date2=date_create("2013-12-12");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
echo "<br>";

date_create("gyuiyiuyui%&&/");
print_r(date_get_last_errors());
echo "<br>";

$date = date_create('2019-01-01');
date_add($date, date_interval_create_from_date_string('1 year 40 days'));
echo date_format($date, 'Y-m-d');
echo "<br>";

date_isodate_set($date,2013,5);
echo date_format($date,"Y-m-d") . "<br>";
date_isodate_set($date,2013,5,2);
echo date_format($date,"Y-m-d");
echo "<br>";

$date=date_create("2013-05-01");
date_modify($date,"+15 days");
echo date_format($date,"Y-m-d");
echo "<br>";

$winter=date_create("2013-12-31",timezone_open("Europe/Oslo"));
$summer=date_create("2013-06-30",timezone_open("Asia/Kolkata"));
echo date_offset_get($winter) . " seconds.<br>";
echo date_offset_get($summer) . " seconds.";
echo "<br>";

print_r(date_parse_from_format("mmddyyyy","05122013"));
echo "<br><br>";
print_r(date_parse_from_format("j.n.Y H:iP","12.5.2013 14:35+02:00"));
echo "<br>";

print_r(date_parse("2013-05-01 12:30:45.5"));
echo "<br>";

echo "<h3>Date: 1st January, 2013</h3>";
$sun_info=date_sun_info(strtotime("2013-01-01"),31.7667,35.2333);
foreach ($sun_info as $key=>$val)
  {
  echo "$key: " . date("H:i:s",$val) . "<br>";
  }

echo "<h3>Date: 1st June, 2013</h3>";
$sun_info=date_sun_info(strtotime("2013-06-01"),31.7667,35.2333);
foreach ($sun_info as $key=>$val)
  {
  echo "$key: " . date("H:i:s",$val) . "<br>";
  }
echo "<br>";

date_time_set($date,13,24);
echo date_format($date,"Y-m-d H:i:s") . "<br>";
echo "<br>";

$date=date_create();
date_timestamp_set($date,1626676834);
echo date_format($date,"U = Y-m-d H:i:s");
echo "<br>";

echo date("l") . "<br>";

$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
echo "<br>";

$t=time();
echo($t . "<br>");
echo(date("Y-m-d",$t));
echo "<br>";

?>

</body>
</html>
