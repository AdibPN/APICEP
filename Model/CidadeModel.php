<?php

namespace APICEP\Model;
use APICEP\EnderecoDAO;
class CidadeModel extends Model
{
    public $id_cidade, $descricao, $uf, $codigo_ibge, $ddd;
    public fuction getCidadesByUf($uf)
    {
        $dao = new EnderecoDAO();
        $this->rows = $dao->selectCidadesByUf($uf);
    }

}