<?php
declare(strict_types=1);

session_start();

print_r($_SESSION);

session_destroy();