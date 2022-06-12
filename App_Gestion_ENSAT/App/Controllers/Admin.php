<?php
include_once ROOT . "/Models/Model.php";
include_once ROOT . "/Models/Users.php";
include_once ROOT . "/Models/Eleves.php";

class AdminC extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->isAdmin()) {
            $array = new Model();
            $etudiants = $array->Table();
            $this->render("Admin", $etudiants);
        }
    }

    public function isAdmin()
    {
        if (isset($_SESSION['userid']) &&  $_SESSION['role'] == 'admin') {
            return true;
        } else {
            $_SESSION['error'] = " Seul l'admin peut acceder a cette page";
            header('Location: index.php?url=Users/Eleves');
            exit;
        }
    }
    public function Eleves()
    {
        if ($this->isAdmin()) {
            $array = new Model();
            $etudiants = $array->Table();
            $this->render("Admin/Eleves", $etudiants);
        }
    }

    public function Ajouter()
    {
        if (isset($_SESSION['userid']) && $_SESSION['role'] == 'admin') {
            if (isset($_POST['submit'])) {

                $cne = $_POST['cne'];
                $nom = $_POST['nom'];
                $Prenom = $_POST['prenom'];
                $Adresse = $_POST['adrs'];
                $Ville = $_POST['ville'];
                $Email = $_POST['mail'];
                $img = $_POST['img'];
                $model = new ElevesM();
                $model->setCne($cne)
                    ->setNom($nom)
                    ->setPrenom($Prenom)
                    ->setAdresse($Adresse)
                    ->setVille($Ville)
                    ->setEmail($Email)
                    ->setPhoto($img);

                $model->insert();
                $_SESSION['message'] = "Eleve est bien inserer dans le tableau";
                header('Location: index.php?url=Admin/Eleves');
                exit;
            }
            $this->render("Admin/Ajouter", $vide = []);
        } else {
            $_SESSION['error'] = " Seul l'admin peut acceder a cette page";
            header('Location: index.php?url=Users/Eleves');
            exit;
        }
    }

    public function Modifier($id)
    {
        if ($this->isAdmin()) {
            if (isset($_POST['submit'])) {

                $cne = $_POST['cne'];
                $nom = $_POST['nom'];
                $Prenom = $_POST['prenom'];
                $Adresse = $_POST['adrs'];
                $Ville = $_POST['ville'];
                $Email = $_POST['mail'];
                $img = $_POST['img'];
                $model = new ElevesM();
                $model->setCne($cne)
                    ->setNom($nom)
                    ->setPrenom($Prenom)
                    ->setAdresse($Adresse)
                    ->setVille($Ville)
                    ->setEmail($Email)
                    ->setPhoto($img);
                $model->update($id);
                $_SESSION['message'] = "Eleve est bien inserer dans le tableau";
                header('Location: index.php?url=Admin/Eleves');
                exit;
            }
            $this->render("Admin/Modifier", $vide = []);
        } else {
            $_SESSION['error'] = " Seul l'admin peut acceder a cette page";
            header('Location: index.php?url=Users/Eleves');
            exit;
        }
    }
    public function Delete($id)
    {
        $model = new ElevesM();
        if ($model->delete($id)) {
            $_SESSION['delete'] = "Supprimer avec succes";
            header('location: index.php?url=Admin/Eleves');
        }
    }
}
