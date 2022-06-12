<?php
include_once ROOT . "/Models/Model.php";
include_once ROOT . "/Models/Users.php";
class UsersC extends Controller
{
    public function __construct()
    {
        $this->chemin_view = ROOT . "/Views/";
    }

    public function Login()
    {
        if (isset($_POST['submit'])) {
            $data[] = $_POST['id'];
            $data[] = $_POST['passwrd'];
            $cnx = new UsersM();
            $user = $cnx->Checklogin($data);
            if ($user) {
                $cnx->SetSession();
                if ($_SESSION['role'] == 'admin') {
                    header('Location: index.php?url=Admin/Eleves');
                    exit;
                }

                header('Location: index.php?url=Users/Eleves');
            }
        }
        $this->render("Users/Login", $vide = []);
    }

    public function Eleves()
    {
        $array = new Model();
        $etudiants = $array->Table();
        $this->render("Users/Eleves", $etudiants);
    }
    public function logout()
    {
        unset($_SESSION['userid']);
        header('Location:  index.php');
        exit;
    }
}
