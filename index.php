$users = {
    1 => "Jorge Fiqueiredo",
    4 => "Amanda de Souza",
    10 => "Francisco",
    11 => "Andressa",
    20 => "Rosalinda"
};
$bornDate = {
    1 => "01/03/1995",
    4 => "05/07/2000",
    10 => "21/04/1996",
    11 => "16/07/1988",
    20 => "11/11/2000"
}
function calcularIdade($dataNascimento) {
    $dataAtual = new DateTime();
    $dataNascimento = DateTime::createFromFormat('d/m/Y', $dataNascimento);
    $diferenca = $dataAtual->diff($dataNascimento);
    return $diferenca->y;
}

// Gerar um array associativo com a idade de cada usuário
$idades = [];
foreach ($bornDate as $userId => $dataNascimento) {
    $idades[$userId] = calcularIdade($dataNascimento);
}

// Ordenar os usuários com base em suas idades (do mais velho ao mais novo)
arsort($idades);

// Exibir a lista de usuários ordenados por idade
foreach ($idades as $userId => $idade) {
    $nomeUsuario = $users[$userId];
    $dataNascimento = $bornDate[$userId];
    echo "$nomeUsuario tem $idade anos e nasceu no dia $dataNascimento <br>";
}