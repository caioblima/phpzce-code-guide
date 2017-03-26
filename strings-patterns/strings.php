<?php

//soundex - calcula o sondex gerado pela pronuncia de palavras e retorna em string akey soundex para comparação
// $str1 = soundex("caio brito de lima");
// $str2 = soundex("caiu britu lima");
// echo ($str1 === $str2);

//metaphone - trabalha da mesma maneira como soundex só que mais preciso usando o mesmo exemplo acima ele da diferença entre os dois nomes, mas como o metaphone é focado em ingles tem que tomar cuidado ao usar para comparar e tal
// $str1 = "caio brito de lima";
// $str2 = "caiu britu lima";
// var_dump(['a' => 'b'], metaphone($str2));

//explode - transforma uma string delimitada por algum caractere especifico em array, aceita o tamanho do array a ser processado como parametro, se houverem mais ocorrencias que o limite a ultima posição terá o restante da string nela
// $pieces = explode("-", 'carai-a-quatro', 2);
// var_dump($pieces);

//implode - transforma um array em string
// $haystack = [
//   'grosa',
//   'da',
//   'porra'
// ];
// var_dump(implode('-', $haystack));

//substr e substr_replace
// $var = 'ABCDEFGH:/MNRPQR/';
// echo "Original: $var<hr />\n";
//  Estes dois exemplos substituem 'MNRPQR' em $var com 'bob'. 
// echo substr_replace($var, 'bob', -7, -1) . "<br />\n";
// echo substr('abcdef', -4, -2);

//printf - mostra uma string formatada de acordo com os tokens fornecidos - http://php.net/manual/pt_BR/function.printf.php
//sprintf tem o mesmo comportamento, porém ele retorna a string e não printa a não ser que você a use
// Troca de parametros
// printf('Certificação  %2s  PHP %1s',  'Zend', '5.5');
//formatando precisao
// $money1 = 68.75;
// $money2 = 54.35;
// $money = $money1 + $money2;
// // echo $money irá mostrar "123.1";
// $formatted = sprintf("%.2f", $money);
// echo $formatted;

//padding examples
// $s = 'monkey';
// $t = 'many monkeys';

//O padrão é preencher com espaços se só passar um numero maximo que a string deve ter e para 0 o mesmo caso, se for outro caractere diferente disso passe uma aspas simples antes
// printf("[%s]\n",      $s); // standard string output
// printf("[%10s]\n",    $s); // right-justification with spaces (preenche a esquerda)
// printf("[%-10s]\n",   $s); // left-justification with spaces (preenche a direita)
// printf("[%010s]\n",   $s); // zero-padding works on strings too
// printf("[%'#10s]\n",  $s); // use the custom padding character '#'
// printf("[%10.10s]\n", $t); // left-justification but with a cutoff of 10 characters

//vprintf - printa uma string formata com parametros de troca passados em array
// $a = vprintf('Certificação %s  %s',  [
//         'PHP',
//         '5.5'
// ]);
// var_dump($a);

//vsprintf - faz o mesmo que sprintf porém seguiindo o padrão de parametros da vprintf
// echo  vsprintf('Utilizando  %s  conseguimos %s  a %s  formatada', [
//         'echo',
//         'exibir',
//         'string'
// ]);
//fprintf - escrever em um file
// $file = fopen(getcwd() . '/meu-arquivo.txt',  'w+');
// fprintf($file,  'Olá  %s  ',  'PHP');

//Regex
//preg_match - ao dar match no resultado ja retorna. é mais otimizada que preg_match_all
// preg_match('/[^abc]+/', 'efg', $matches);
// print_r($matches);

//preg_match_all - performa a regex na string inteira retornando quantos matchs baterem
// $text  = 'Livro  de  certificação  PHP,  outro Livro';
// $pattern = '/Livro/';
// preg_match_all($pattern, $text, $matches);
// print_r($matches);

//preg_replace - troca uma string de acordo com uma regex informada a backreference 0 é o match todo, se houve parenteses nas regex cada subsequente tera seu indice na backreference
// $var = preg_replace('/0+(?=[1-9])/', '', '0001');
// echo $var;
// $texto = 'Vamos  aplicar uma expressão aqui!';
// print preg_replace(['/aqui/', '/!/'], '?',  $texto);
// $texto  = 'O  evento  será  dia 11/12 não perca a reprize no  dia 22/10';
// print preg_replace('/\/\d{2}/', '${1}', $texto);
//Exemplo com backreference
// $div = '<div class="grosa"> grosa da porra</div>';
// echo preg_replace('/<div[^>]+/', '${0} style="overflow:hidden;"', $div);
// $texto  = '!Vamos aplicar uma expressão aqui!';
// $total  = 0;
// preg_replace('/!/', '', $texto, -1, $total);
// print $total;
// $string = 'abcda';
// $procurar     = 'a';
// $pos  = strpos($string, $procurar);
// if  (!$pos) {
//         echo  "não  encontrei";
// }
// else  {
//         echo  "encontrei  " . $pos;
// }
// $foo  = strpos("I can see two monkeys.",  '116');
// print $foo;

// $string = 'Hello  World';

// for ($i = 0;  $i  < strlen($string);  $i++) {
//         print $string[$i];
// }

//ver hex2bin,  bin2hex ,   htmlentities  ,   nl2br - http://php.net/manual/pt_BR/ref.strings.php.