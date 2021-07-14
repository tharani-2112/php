<?php

set_error_handler(function(int $number, string $message) {
   echo "Handler captured error $number: '$message'" . PHP_EOL  ;
});

try {
    echo $x; # notice, handled on callable
    pg_exec(null, null); # warning, handled on callable
    fho(); # fatal error, stop running and catched
} catch (Throwable $e) {
    echo "Captured Throwable: " . $e->getMessage() . PHP_EOL;
}

?>
