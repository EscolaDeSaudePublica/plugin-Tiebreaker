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

        $app->hook('template(opportunity.single.header-inscritos):end', function() use ($app){
            $app->view->enqueueScript('app' , 'tiebreaker', 'js/tiebreaker.js');
            $app->view->enqueueStyle('app' , 'tiebreaker' , 'css/tiebreaker--styles.css');
            $entity = $this->controller->requestedEntity;
            $resource = false;
            //VERIFICANDO SE TEM A INDICAÇÃO DE RECURSO
            $isResource = array_key_exists('claimDisabled', $entity->metadata);
            //SE HOUVER O CAMPO FAZ O FOREACH
            if($isResource) {
                foreach ($entity->metadata as $key => $value) {
                    //SE O CAMPO EXISTIR E TIVER RECURSO HABILITADO
                    if($key == 'claimDisabled' && $value == 0) {
                        $resource = true;
                    }
                }
            }
            $this->part('tiebreaker/buttons-report',['resource' => $resource]);
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