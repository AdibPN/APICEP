<?php

namespace APICEP\Controller;

use APICEP\Model\{EnderecoModel, CidadeModel};
use APICEP\Model\EnderecoModel as ModelEnderecoModel;
use APICEP\Model\EnderecoModel as AppModelEnderecoModel;
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
        try{
            $cep = parent::getIntFromUrl(
                isset($_GET['cep']) ? $_GET['cep'] : null
            );
            $model = new EnderecoModel();
            parent::gerResponseAsJSON($model->getLogradouroByCep($cep));
        } catch (Exception $e){
            parent::getExceptionAsJSON($e);
        }

    }

    public static function getLogradouroByBairroAndCidade()
    {
        try
        {
            $bairro = 
            parent::getStringFromUrl(
                isset($_GET['bairro']) ? $_GET['bairro'] : null,
                'bairro');

            $id_cidade = parent::getIntFromUrl(
                    isset($_GET['id_cidade'])? $_GET['id_cidade'] : null, 'cep');

                
            $model = new EnderecoModel();
            $model->getLogradouroByBairroAndCidade($bairro, $id_cidade);

            parent::gerResponseAsJSON($model->rows);


        } catch (Exception $e) {
            parent::getExceptionAsJSON($e);
        }

    }

    public static function getCidadesByUf()
    {

        try{
            $uf = $_GET['uf'];
            $model = new CidadeModel();
            $model->getCidadesByUf($uf);
            parent::getResponseAsJSON($model->rows);

        } catch (Exception $e) {
            parent::gerResponseAsJSON($e);
        }


    }

    public static function getBairrosByCidade() : void
    {
        try{
            $id_cidade = parent::getIntFromUrl(
                isset($_GET['id_cidade']) ? $_GET['id_cidade'] : null);

            $model = new EnderecoModel();
            $model->getBairrosByCidade($id_cidade);
            parent::getResponseAsJSON($model->rows);

        } catch (Exception $e) {
            parent::gerResponseAsJSON($e);
        }


    }

    public static function getCepByLogradouro() : void
    {
        try
        {
            $logradouro = $_GET['logradouro'];
            $model = new EnderecoModel();
            $model->getCepByLogradouro($logradouro);
            parent::gerResponseAsJSON($model->rows);

        }
        catch (Exception $e) 
        {
            parent::getExceptionAsJSON($e);

        }

    }
}