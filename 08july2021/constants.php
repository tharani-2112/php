<?php
foo();
const X = 1;
foo();
function foo() {
    echo "Value of X: " . X;
}
?>

<?php

class constants {

    const MAX_VALUE = 10;
        public const MIN_VALUE =1;

}

echo constants::MAX_VALUE;
echo constants::MIN_VALUE;
?>

<?php
  define (' YEAR',  2000);
  echo YEAR;
?>

<?php
  define (" YEAR",  2000);
  echo YEAR;
?>