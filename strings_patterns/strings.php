<?php
// $nowdoc_syntax = <<<'nowdoc'
//   Literal text
// nowdoc;
// // echo $nowdoc_syntax;
// // echo PHP_EOL;
// $heredoc_syntax = <<<heredoc
//   My variable with $nowdoc_syntax;
// heredoc;
// echo $heredoc_syntax;

//strpos Um  detalhe   importante  é   que,  com   a   função   strpos   ,   não   é permitido utilizar  valores negativos no  terceiro  parâmetro.
// $text = 'abcde';
// if (strpos($text, 'bc', 1) !== false) {
//   echo 'olá';
// }

//stripos - Não é case sensitive um  detalhe   importante  é   que,  com   a   função   strpos   ,   não   é permitido utilizar  valores negativos no  terceiro  parâmetro.
// $text = 'ABCDE';
// if (stripos($text, 'Abc', 0) !== false) {
//   echo 'olá';
// }

//Strings array
// $texto  = 'Zend Certified Engineer';
// for ($i = 0;  $i  < strlen($texto); $i++)
// {
//     print $texto[$i++];
// }

//strstr - faz o mesmo que strpos mas inves de retornar apenas o indice da primeira ocorrencia ele retorna por padrão tudo depois da string procurada e nao ser que o terceiro parametro seja true e retorne a string anterior
// $email  = 'AE-@php.net';
// print strstr($email,  'E-@');
//stristr - versão case insensitive do strstr
// print stristr($email, '@', true);

//substr pegar porção de string como init e limit
// $codigo = 'A3-99812.FFGD';
// print substr($codigo, 0,  2); //  A3

//trim, ltrim e rtrim(chop é um atalho para essa função) - remove espaços tanto da direita quanto a esquerda, o segundo parametro é opcional e pode remover strings especificas 
// $str = ' aPHPa';
// $str = trim($str, ' a');
// $str = ltrim($str);
// $str = rtrim($str, 'a');
// echo $str;

//str_replace - 
// $texto = "Studing javascript Certification Engineer";
// $texto = str_replace('javascript', 'Zend PHP', $texto);
//With arrays
// $texto = 'Comprei  um  livro da  cor azul  e amarelo';
// print $texto = str_replace(['azul',  'amarelo'], ['laranja', 'preto'], $texto);
// $substitutions = 0;
// $texto = str_replace(['azul',  'amarelo'], 'lilás',  $texto, $substitutions);
// echo $substitutions;

//strcasecmp e strcmp 0 são iguais > 0 a da direita e maior e < 0 a da esquerda é maior
// $str1 = 'Olá';
// $str2 = 'olá';
// // Equals
// if (strcasecmp($str1, $str2) === 0) {
//   echo 'SÃO IGUAIS';
// }
//Not equals
// if (strcasecmp($str1, $str2) !== 0) {
//   echo 'NÃO IGUAIS';
// }
// $str1 = 'Olá';
// $str2 = 'olá';
// if (strcmp($str1, $str2) !== 0) {
//   echo 'São diferentes';
// }
// if (strcmp($str1, $str2) === 0) {
//   echo 'São iguais';
// }

//similar_text - retorna o numero de similaridade entre duas strings e um terceiro parametro por referencia retorna a porcentagem de similaridade
// $string1  = 'Av. Livro de  Certificação PHP';
// $string2  = 'Rua, Certificação PHP';
// print similar_text($string1,  $string2, $percent);
// print levenshtein($string1, $string2);

//strlen - contar a quantidade de caracteres
// print strlen('1\n2');

//str_word_count - conta quantas palavras uma string possui, passando parametro adicional 1 retorna array com as palavras encontradas como array numerico, passando 2 como parametro retorna array associativo onde fala em qual posicao inicia cada palavra na string
// $nome = 'Zend Certified Enginee';
// print_r(str_word_count($nome));  //2

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
$file = fopen(getcwd() . '/meu-arquivo.txt',  'w+');
fprintf($file,  'Olá  %s  ',  'PHP');
?>