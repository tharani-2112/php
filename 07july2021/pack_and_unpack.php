<?php
   $float32 = pack("f", 5300231);
   $binarydata32 =unpack('H*',$float32); 
    echo $float32;
   $float64 = pack("d", 5300231);
   $binarydata64 =unpack('H*',$float64); 
    echo $float64;
?>