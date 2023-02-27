<?php

namespace APICEP\DAO;
use APICEP\Model\EnderecoModel;

class EnderecoDAO extends DAO
{
    public function __construct()
    {
        
    }

    public function selectByCep(int $cep)
    {
        $sql = "SELECT * FROM logradouro WHERE cep=?";

        $smt = $this->conexao->prepare($sql);
        $smt->binValue(1, $cep);
        $smt->execute();

        $endereco_obj = $smt->fetchObject("APICEP\Model\EnderecoModel");
        $endereco_obj->arr_cidades = $this->selectCidadeByUf($endereco_obj->UF);
        return $endereco_obj;
    }

    public function SelectCidadesByUf($uf){
        
    }

}