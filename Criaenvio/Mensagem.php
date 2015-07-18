<?php

namespace Criaenvio;

class Mensagem extends Entidade {

    /**
     * Atributos pr�prios da entidade.
     */
    public  $assunto,
            $contador,
            $dataCadastro,
            $emailResposta,
            $jaEnviada,
            $mensagemDescadastro,
            $nome;

    /**
     * Configura��es para CriaenvioRemetente
     */
    const CAMINHO     = 'mensagens';
    const NOME_CLASSE = __CLASS__;



    public function embedsPermitidos() {
        return [];
    }

} 