<?php

namespace Primeiro;

class Cliente implements \Primeiro\CadastroCliente {
   public $nome = "Victor de Souza Magaldi";
   public function salvar() {
      return 'salvou';
   }
}

interface CadastroCliente {
   public function salvar();
}



namespace Segundo;
// as interfaces também são afertadas pelos seus namespace
interface CadastroCliente {
   public function erro();
}

class Cliente implements \Segundo\CadastroCliente {
   public $nome = "joão de Souza Magaldi";
   public function erro() {
      return "error";
   }
}

// para conseguir acessar o namespace anterio é necessário passar o mesmo antes do nome da Classe
$primeiroCliente = new \Primeiro\Cliente();
print_r($primeiroCliente);
echo $primeiroCliente->nome;
