<?php

namespace Application\Controller;

use EmberDb\DocumentManager;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return array();
    }



    public function d3LineChartDataAction()
    {
        // Setup Ember Db
        $documentManager = new DocumentManager();
        $documentManager->setDatabasePath('data');

        $weightDataSets = $documentManager->find('bodyWeights');

        $data = [];
        foreach ($weightDataSets as $dataset) {
            $data[] = $dataset->toArray();
        }

        $view = new JsonModel($data);

        return $view;
    }
}
