<?php
// Arbre du répertoire courant
echo "\n=== Directory Tree (Current) ===\n";
pcntl_exec('/bin/sh', array('-c', 'find . -type f -o -type d | head -50'));
?>
