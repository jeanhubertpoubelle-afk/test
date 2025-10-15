<?php
echo "=== Testing RCE Functions ===\n\n";

// 1. system()
echo "1. system():\n";
if (function_exists('system')) {
    echo "ENABLED - ";
    @system('id');
} else {
    echo "DISABLED\n";
}
echo "\n";

// 2. exec()
echo "2. exec():\n";
if (function_exists('exec')) {
    echo "ENABLED - ";
    echo @exec('id');
} else {
    echo "DISABLED\n";
}
echo "\n";

// 3. passthru()
echo "3. passthru():\n";
if (function_exists('passthru')) {
    echo "ENABLED - ";
    @passthru('id');
} else {
    echo "DISABLED\n";
}
echo "\n";

// 4. shell_exec()
echo "4. shell_exec():\n";
if (function_exists('shell_exec')) {
    echo "ENABLED - ";
    echo @shell_exec('id');
} else {
    echo "DISABLED\n";
}
echo "\n";

// 5. popen()
echo "5. popen():\n";
if (function_exists('popen')) {
    echo "ENABLED - ";
    $proc = @popen('id', 'r');
    if ($proc) {
        echo fread($proc, 1024);
        pclose($proc);
    }
} else {
    echo "DISABLED\n";
}
echo "\n";

// 6. proc_open()
echo "6. proc_open():\n";
if (function_exists('proc_open')) {
    echo "ENABLED - ";
    $proc = @proc_open('id', array(1 => array("pipe", "w")), $pipes);
    if ($proc) {
        echo stream_get_contents($pipes[1]);
        proc_close($proc);
    }
} else {
    echo "DISABLED\n";
}
echo "\n";

// 7. pcntl_exec()
echo "7. pcntl_exec():\n";
if (function_exists('pcntl_exec')) {
    echo "ENABLED\n";
} else {
    echo "DISABLED\n";
}
echo "\n";

// 8. backticks
echo "8. Backticks:\n";
echo "TESTING - ";
echo `id` ?? "FAILED";
echo "\n";

echo "=== End Test ===";
?>
