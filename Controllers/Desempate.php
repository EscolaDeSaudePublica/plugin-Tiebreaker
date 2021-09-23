<?php
namespace Tiebreaker\Controllers;

use DateTime;
use \MapasCulturais\App;
use MapasCulturais\Entities\OpportunityMeta;
/**
 * DEFINIÇÃO DA ORDEM
 * 1 - Idade igual ou superior a 60 (sessenta) anos;
 * 2 - Maior nota de determinado momento;
 * 3 - Tiver a maior idade, considerando ano, mês e dia;
 * 4 - Tiver exercido a função de jurado.
 */
class Desempate extends \MapasCulturais\Controller{

    function GET_index() {
        dump('Tiebreaker');
    }
}