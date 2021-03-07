<?php

namespace Lib1;

class Cliente implements CadastroCliente {
   public $nome = "Victor de Souza Magaldi";
   public function salvar() {
      return 'salvou';
   }
}

interface CadastroCliente {
   public function salvar();
}
