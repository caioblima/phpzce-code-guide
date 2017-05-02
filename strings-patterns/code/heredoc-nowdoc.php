<?php
$nowdoc_syntax = <<<'nowdoc'
  Literal text
nowdoc;
echo $nowdoc_syntax;
echo PHP_EOL;
$heredoc_syntax = <<<heredoc
  My variable with $nowdoc_syntax;
heredoc;
echo $heredoc_syntax;