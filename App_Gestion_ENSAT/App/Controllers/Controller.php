
<?php
include_once ROOT . "/Models/Model.php";

class Controller
{

    protected $chemin_view;

    public function __construct()
    {
        $this->chemin_view = ROOT . "/Views/";
    }


    public function render($view, $donnes = [])
    {
        $data = $donnes;
        ob_start();
        require_once($this->chemin_view . $view . ".php");
        $contenu = ob_get_clean();
        require_once($this->chemin_view . "Template.php");
    }
}
