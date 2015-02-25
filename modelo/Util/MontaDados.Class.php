<?php

class MontaDados {

    public $colunas;
    public $dados;

    public function deListar($opcao, $link, $con) {

        //print_r($this->dados);

        $qtdColunas = count($this->colunas); //QUANTIDADE DE COLUNAS
        $qtdDados = count($this->dados); //QUANTIDADE  DE DADOS
        $t = "";
        if ($opcao == 1) {
            foreach ($this->dados as $dados) {
                $t.="   <tr>";
                for ($y = 0; $y < $qtdColunas; $y++) {
                    $t.="   <td>";
                    $col = $this->colunas[$y];
                    list($apelido, $nome) = explode(".", $col);
                    $t.=$dados["{$nome}"];
                    $t.="   </td>";
                }
                $t.="   </tr>";
            }
        }
        if ($opcao == 2) {
            foreach ($this->dados as $dados) {
                $t.="   <tr>";
                for ($y = 0; $y < $qtdColunas; $y++) {
                    $t.="   <td>";
                    $col = $this->colunas[$y];
                    list($apelido, $nome) = explode(".", $col);
                    if ($y == $qtdColunas - 1) {
                        if ($con == 0) {
                            $t.="   <a href='" . $link . "?acao=a&id=" . $dados["{$nome}"] . "'>Editar</a>";
                            $t.="   <a href='" . $link . "?acao=d&id=" . $dados["{$nome}"] . "'>ativar/Desativar</a> ";
                        }
                        if ($con == 1) {
                            $t.="   <a href='" . $link . "?acao=a&id=" . $dados["{$nome}"] . "'>Editar</a>";
                            $t.="   <a href='" . $link . "?acao=v&id=" . $dados["{$nome}"] . "'>Visualizar</a> ";
                        }
                        if ($con == 2) {
                            $t.="   <a href='" . $link . "?acao=a&id=" . $dados["{$nome}"] . "'>Editar</a>";
                            $t.="   <a href='" . $link . "?acao=v&id=" . $dados["{$nome}"] . "'>Visualizar</a> ";
                            $t.="     <a href='" . $link . "?acao=e&id=" . $dados["{$nome}"] . "'".'onclick="return confirm('."'Deseja realmente Excluir?'".')"'.">Remover</a>";
                        }
                        if ($con == 3) {
                            $t.="   <a href='" . $link . "?acao=a&id=" . $dados["{$nome}"] . "'>Editar</a>";
                            $t.="   <a href='" . $link . "?acao=v&id=" . $dados["{$nome}"] . "'>Visualizar</a> ";
                            $t.="     <a href='" . $link . "?acao=e&id=" . $dados["{$nome}"] . "'".'onclick="return confirm('."'Deseja realmente Excluir?'".')"'.">Remover</a>";
                            $t.="     <a href='" . $link . "?acao=e&id=" . $dados["{$nome}"] . "'>Imprimir</a>";
                        }
                        if ($con == 4) {
                            $t.="   <a href='" . $link . "?acao=a&id=" . $dados["{$nome}"] . "'>Editar</a>";
                            $t.="   <a href='" . $link . "?acao=v&id=" . $dados["{$nome}"] . "'>Visualizar</a> ";
                            $t.="   <a href='" . $link . "?acao=d&id=" . $dados["{$nome}"] . "'>ativar/Desativar</a> ";
                        }
                        if ($con == 5) {
                            $t.="   <a href='" . $link . "?acao=a&id=" . $dados["{$nome}"] . "'>Editar</a>";
                            $t.="   <a href='" . $link . "?acao=v&id=" . $dados["{$nome}"] . "'>Visualizar</a> ";
                            $t.="   <a href='" . $link . "?acao=d&id=" . $dados["{$nome}"] . "'>ativar/Desativar</a> ";
                            $t.="     <a href='" . $link . "?acao=e&id=" . $dados["{$nome}"] . "'>Imprimir</a>";
                        }
                        if ($con == 6) {
                            $t.="   <a href='" . $link . "?acao=a&id=" . $dados["{$nome}"] . "'>Editar</a>";
                            $t.="   <a href='" . $link . "?acao=v&id=" . $dados["{$nome}"] . "'>Visualizar</a> ";
                            $t.="   <a href='" . $link . "?acao=d&id=" . $dados["{$nome}"] . "'>ativar/Desativar</a> ";
                            $t.="     <a href='" . $link . "?acao=e&id=" . $dados["{$nome}"] . "'".'onclick="return confirm('."'Deseja realmente Excluir?'".')"'.">Remover</a>";
                            $t.="     <a href='" . $link . "?acao=e&id=" . $dados["{$nome}"] . "'>Imprimir</a>";
                        }
                    } else {
                        $t.=$dados["{$nome}"];
                    }
                    $t.="   </td>";
                }

                $t.="   </tr>";
            }
        }
        $t.="   ";
        return $t;
    }

    public function pegaDados(Dados $d) {

        $qtdColunas = count($this->colunas); //QUANTIDADE DE COLUNAS
        $qtdDados = count($this->dados); //QUANTIDADE  DE DADOS

        foreach ($this->dados as $dados) {
            for ($y = 0; $y < $qtdColunas; $y++) {
                $col = $this->colunas[$y];
                list($apelido, $nome) = explode(".", $col);
                $d->dado[$y] = $dados["{$nome}"];
            }
        }
        return $d;
    }

}

?>