<?php
namespace Tiebreaker;

use MapasCulturais\App;

class Plugin extends \MapasCulturais\Plugin {

    public  function _init () {
        $app = App::i();
        $app->hook('template(agent.<<edit|single>>.tab-about-service):begin', function () use ($app) {
            $entity = $this->controller->requestedEntity;
            $app->view->enqueueScript('app' , 'tiebreaker', 'js/tiebreaker.js');
            $this->part('tiebreaker/agentbirthdata', ['entity' => $entity]);
        });
    }

    public  function register() {
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
        // register metadata, taxonomies
        $app = App::i();
        $app->registerController('desempate', Controllers\Desempate::class);
        //Obrigando a data de nascimento ser preenchida
        
    }

}