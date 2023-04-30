<?php

//É preciso criar uma conta teste na IAgente para ganhar 5 créditos gratuitos e utilizar suas credenciais na API.
$email_iagente="";
$senha_iagente="";
$celular_remetente="";
// Mensagem SMS a ser enviada
$mensagem = urlencode("Teste Integracao:Envio de SMS com PHP e Api Aigente");

// concatena a url da api com a variável carregando o conteúdo da mensagem
$url_api = "https://api.iagentesms.com.br/webservices/http.php?metodo=envio&usuario=gabrielcastro@{$email_iagente}&senha={$senha_iagente}&celular={$celular_remetente}&mensagem={$mensagem}";

// realiza a requisição http passando os parâmetros informados
$api_retorno = file_get_contents($url_api);

// Output do resultado da requisição
echo $api_retorno;
?>