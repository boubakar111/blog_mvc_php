<?php


class View
{
    // le fincher à envoyer a l'utilisateur
    private $_file;
    private $_title;

    function __construct($action )
    {
        $this->_file = 'views/view'.$action.'.php';


    }

    //la function qui va génerer et afficher la vue

    public function generate($data){
        $content = $this->generateFile($this->_file , $data);
        $view = $this->generateFile('views/template.php', array('title'=>$this->_title ,'content'=>$content));
        echo $view;
    }

    private  function generateFile( $file , $data){
        if(file_exists($file)){
            extract($data);

            //temporisation de donnees
            ob_start();
            require $file;

            return ob_get_clean();
        }else{
            throw new \Exception('fichier '.$file.' n\'existe pas ' ,1 );
        }
    }
}