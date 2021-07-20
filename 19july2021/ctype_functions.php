<?php
$User = 'my_username01';
$User1 = 'my_user%name01';
$aValid = array('-', '_');

if(!ctype_alnum(str_replace($aValid, '', $User))) {
    echo 'Your username is not properly formatted.';
}
else{
    echo "Username is proper";
}
echo "<br>";
if(!ctype_alnum(str_replace($aValid, '', $User1))) {
    echo 'Your username is not properly formatted.';
}
else{
    echo "Username is proper";
}
echo "<br>";
$strings = array('KjgWZC', 'arf12');
foreach ($strings as $testcase) {
    if (ctype_alpha($testcase)) {
        echo "The string $testcase consists of all letters.\n";
    } else {
        echo "The string $testcase does not consist of all letters.\n";
    }
    echo "<br>";
}

$strings = array('string1' => "\n\r\t", 'string2' => 'arf12');
foreach ($strings as $name => $testcase) {
    if (ctype_cntrl($testcase)) {
        echo "The string '$name' consists of control characters.\n";
    } else {
        echo "The string '$name' does not consist of all control characters.\n";
    }
    echo "<br>";
}

$strings = array('1820.20', '10002', 'wsl!12');
foreach ($strings as $testcase) {
    if (ctype_digit($testcase)) {
        echo "The string $testcase consists of all digits.\n";
    } else {
        echo "The string $testcase does not consist of all digits.\n";
    }
    echo "<br>";
}

$strings = array('string1' => "asdf\n\r\t", 'string2' => 'arf 12', 'string3' => 'LKA#@%.54');
foreach ($strings as $name => $testcase) {
    if (ctype_graph($testcase)) {
        echo "The string '$name' consists of all (visibly) printable characters.\n";
    } else {
        echo "The string '$name' does not consist of all (visibly) printable characters.\n";
    }
    echo "<br>";
    
}
foreach ($strings as $name => $testcase) {
    if (ctype_print($testcase)) {
        echo "The string '$name' consists of all (visibly) printable characters.\n";
    } else {
        echo "The string '$name' does not consist of all (visibly) printable characters.\n";
    }
    echo "<br>";   
}
$strings = array('ABasdk!@!$#', '!@ # $', '*&$()');
foreach ($strings as $testcase) {
    if (ctype_punct($testcase)) {
        echo "The string $testcase consists of all punctuation.\n";
    } else {
        echo "The string $testcase does not consist of all punctuation.\n";
    }
    echo "<br>";
}



?>