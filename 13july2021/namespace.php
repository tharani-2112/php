<?php
include "Html.php";
use Html as H;
$table = new H\Table();
$table->title = "My table";
$table->numRows = 7;

$row = new Html\Row();
$row->numCells = 3;
?>

<html>
<body>

<?php $table->message(); ?>
<?php $row->message(); ?>

</body>
</html>
