<?php 
declare(strict_types=1);
header('Content-Type: text/html; charset=UTF-8'); 
?>

<form method="POST" action="formSent.php">
 Nome
 <input type="text" name="nome"/>
 Sexo
 <input type="radio" value="masculino" name="sexo"/> Masculino
 <input type="radio" value="feminino" name="sexo"/> Feminino
 Atividades
<input type="checkbox" name="atividades[]" value="natação"/>Natação
<input type="checkbox" name="atividades[]" value="basquete"/>Basquete
<input type="checkbox" name="atividades[]" value="futebol"/>Futebol
Descrição
 <textarea name="descricao">Certificação PHP</textarea>
 <input type="submit" value="Enviar"/>
 </form>