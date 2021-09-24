<?php
namespace Tiebreaker\Controllers;

use DateTime;
use \MapasCulturais\App;
use MapasCulturais\Entities\OpportunityMeta;
require dirname(__DIR__).'/vendor/autoload.php';
use Dompdf\Dompdf;
/**
 * DEFINIÇÃO DA ORDEM
 * 1 - Idade igual ou superior a 60 (sessenta) anos;
 * 2 - Maior nota de determinado momento;
 * 3 - Tiver a maior idade, considerando ano, mês e dia;
 * 4 - Tiver exercido a função de jurado.
 */
class Desempate extends \MapasCulturais\Controller{

    function GET_index() {
        dump('POOOO');

        $domPdf = new Dompdf(array('enable_remote' => true));
        dump($domPdf);
            
    }

    function POST_gerarPdf() {
        dump($this->postData['selectRel']);
    }
}