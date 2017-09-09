<?php
$numGenerator = function () {
    for ($i = 0;  $i < 10; $i++) {
        yield $i;
    }
};

foreach ($numGenerator() as $num) {
    if ($num === 0) {
        continue;
    }
    
    echo $num . ' ';
}

$input = <<<'EOF'
1;PHP;Likes dollar signs
2;Python;Likes whitespace
3;Ruby;Likes blocks
EOF;

$inputParser = function ($input) {
    foreach (explode("\n", $input) as $line) {
        $fields = explode(';', $line);
        $id = array_shift($fields);

        yield $id => $fields;
    }
};

foreach ($inputParser($input) as $id => $fields) {
    echo "$id:\n";
    echo "    $fields[0]\n";
    echo "    $fields[1]\n";
}