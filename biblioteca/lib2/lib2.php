<?php

namespace Lib2;
// as interfaces também são afertadas pelos seus namespace
interface CadastroCliente {
   public function erro();
}

class Cliente implements CadastroCliente {
   public $nome = "joão de Souza Magaldi";
   public function erro() {
      return "error";
   }
}
