<?php
require_once 'views/View.php';

class Router
{
    private $ctrl;
    private $_view;


    public function routerRequest()
    {

        try {
            // chargement auto des classes passer en parameter .
            spl_autoload_register(function ($class) {
                require_once("models/" . $class . ".php");
            });

            $url = '';

            if (isset($_GET['url'])) {
                // decomposer l'url  et appliquer une filtre
                $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));
                // on met  la premiere lettre du prmier parameter en Majuscule
                $controller = ucfirst(strtolower($url[0]));


                $controllerClass = "Controller" . $controller;
                //retrouver le chamain du contrôler voulu
                $controllerFile = "controllers/" . $controllerClass . ".php";

                // si le chemain existe ver le fichier
                if (file_exists($controllerFile)) {
                    // on lonce la classe en question
                    require_once($controllerFile);

                    $this->ctrl = new $controllerClass($url);


                } else {
                    throw new \Exception("Page introuvable", 1);
                }
            } else {
                require_once('controllers/ControllerAccueil.php');
                $this->ctrl = new ControllerAccueil($url);
            }
        } catch (\Exception $e) {
            $errorMsg = $e->getMessage();
            $this->_view = new View('error');
            $this->_view->generate(array('errorMsg'=>$errorMsg));

        }

    }

}