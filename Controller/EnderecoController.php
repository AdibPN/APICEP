<?php

namespace APICEP\Controller;

use APICEP\Model\{EnderecoModel, CidadeModel};
use Exception;

include 'Controller.php';

class EnderecoController extends Controller
{
    public static function teste(){
        //var_dump("alunos");
        /*var_dump: revela o conteudo de algo*/
        //parent::gerResponseAsJSON("alunos");

        $cidades = ['itapui', 'jau', 'bariri'];

        parent::gerResponseAsJSON($cidades);
    }

    public static function getLogradouroByCep(): void
    {

    }

    public static function getLogradouroByBairroAndCidade()
    {

    }

    public static function getCidadesByUf()
    {

    }

    public static function getBairrosByCidade()
    {

    }
}