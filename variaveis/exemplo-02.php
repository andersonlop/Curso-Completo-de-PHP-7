<?php

// tipos de variável e concatenação

$anoNascimento = 1988;

echo $anoNascimento;

echo "<br/>"; // tag para dar quebra de linha

$nome = "Anderson";

$sobrenome = "Lopes";

$nomeCompleto = $nome ." ". $sobrenome; // (.)concatenar (juntar) ." ". (para colocar espaço entre o nome e o sobrenome na hora de exibir)

echo $nomeCompleto;

exit; // o php para a execução do código, ou seja, executa até aqui apenas.

//echo $nome;

//echo $sobrenome;

echo "<br/>";

unset($anoNascimento); // comando para limpar(destruir variavel) variável para poder ser usada em outro lugar no mesmo projeto


// comando isset para verificar se a variável já foi utilizada (verificação antes de chamar a variável)

/*if (isset($anoNascimento)){ 


	echo $anoNascimento;

}*/ 


?>