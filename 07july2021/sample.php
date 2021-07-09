<html>
<?php
$a = "google";
$b = 2;
if ($a === "google") {
    if ($b == 2) {
        ?><head><h2><a href="http://localhost/test/07july2021/types.php">Hello</a></h2></head><?php
    } else {
        ?><body><p>Hello<a href="http://www.<?php echo $a ?>.com">link</a></p></body><?php
    }
}
?>
</html>