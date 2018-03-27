<?php

function foo($num)
{
    while ($num > 0) {
        echo "And another {$num}" . PHP_EOL;
        foo(--$num);
    }
    exit(1);
}

foo(25);
