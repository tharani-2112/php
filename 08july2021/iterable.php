<?php

function gen(): iterable {
    yield 1;
    yield 2;
    yield 3;
}

?>
<?php
class Foo {
    public $a = 1;
    public $b = "Helo";
};

$bar = new Foo;

foreach($bar as $elm) {
    echo $elm . ' ';
}

?>

<?php
$bar = new stdClass
foreach($bar as $elm) {
    echo $elm . ' ';
}
?>
