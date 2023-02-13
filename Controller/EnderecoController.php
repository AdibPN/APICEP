<?php

namespace APICEP\Controller;

include 'Controller.php';

class EnderecoController extends Controller
{
    public static function teste(){
        //var_dump("alunos");
        /*var_dump: revela o conteudo de algo*/
        //parent::gerResponseAsJSON("alunos");

        $cidades = ['itapui', 'jau'];

        parent::gerResponseAsJSON("$cidades");
    }

}