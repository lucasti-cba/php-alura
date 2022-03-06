<?php

function criaBlog(string $nome, string $descricao ): array
{

  return [
    $nome => [
      'nome' => $nome,
     'descricao' => $descricao,
    ]
  ];
}
