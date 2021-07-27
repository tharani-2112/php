<html>
<body>
<?php
    printf("POST: "); 
    print_r($_POST); 

?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" name="Windows3.1" value="Sux">
    <input type="submit" value="Click" />
</form>
</body>
</html>