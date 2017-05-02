<?php
if (isset($someVar)) {
    //she exists
} else {
    //She didn't exists
}

//or check directly, i recommend avoid using 'else' as possibe in PHP
if (!isset($someVar)) {
    //she didn't exist
}