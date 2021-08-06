<?php
$file = fopen("test.txt","w");
echo fwrite($file,"Hello World. Testing!");
echo "<br>";
$file = fopen("test.txt","r");
echo fread($file,"10");
echo "<br>";
fclose($file);
?>
<?php
$random_data = array(
    array("abc, efg, jhi, klm"),
    array("123, 456, 789"),
    array("11aa, 22bb, 33cc, 44dd")
    );
      
    
    $myfile = fopen("data.csv", "w");
      
    
    foreach ($random_data as $line)
    {
        fputcsv($myfile, $line);
    }
      
    fclose($myfile);


?>