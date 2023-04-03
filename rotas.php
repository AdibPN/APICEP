<?php

use APICEP\Controller\EnderecoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url)
{

        //OK
        //http://localhost:8000/endereco/by-cep?cep=17210580
        //http://10.0.2.2:8000/endereco/by-cep?cep=17210580
    case '/endereco/by-cep':
        EnderecoController::getLogradouroByCep();
        break;
        
        // OK
        // http://localhost:8000/logradouro/by-bairro?id_cidade=4874&bairro=Jardim%20Am%C3%A9rica
    case '/logradouro/by-bairro':
        EnderecoController::getLogradouroByBairroAndCidade();
        break;  


        // OK
        //http://localhost:8000/cep/by-logradouro?logradouro=Raphael de Almeida Leite
        case '/cep/by-logradouro':
            EnderecoController::getCepByLogradouro();
            break;  


        //OK
        //http://localhost:8000/cidade/by-uf?uf=SP
    case '/cidade/by-uf':
        EnderecoController::getCidadesByUf();
        break;


        // OK
        //http://localhost:8000/bairro/by-cidade?id_cidade=4874
    case '/bairro/by-cidade':
        EnderecoController::getBairrosByIdCidade();
        break;

    default:
    http_response_code(403);
    //echo $url;
    break;    

}