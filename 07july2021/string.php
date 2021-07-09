<?php
$str="welcome, you all.";
function str2num($str)
{     
      if (strpos($str, '.') !== FALSE && strpos($str,    ',') !== FALSE && strpos($str, '.') < strpos($str,','))
          {
            $str = str_replace('.','',$str);
            $str = strtr($str,',','.'); 

        }
        else
        {
            $str = str_replace(',','',$str);           
        }

       print_r($str);
}
str2num($str);
//strpos---function to denote the position of first occurrence of string in a given string
?>