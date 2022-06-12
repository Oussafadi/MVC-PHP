<?php

class UsersM extends Model
{
    protected $id;
    protected $user;
    protected $passwd;
    protected $role;

    public function __construct()
    {
        parent::__construct();
        $this->table = "users";
    }

    public function checklogin(array $data)
    {
        $statement = $this->requete('SELECT * FROM users where user=? AND passwd=?', $data);
        if ($statement->rowCount() == 0) {
            $statement = null;
            $_SESSION['error'] = "  Adresse email et/ou mot de passe incorect </div>";
            header('Location: index.php?url=Users/Login');
            exit;
        }
        $this->user = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $this->user;
    }


    public function SetSession()
    {
        $_SESSION['userid'] = $this->user[0]['user'];
        $_SESSION['role'] = $this->user[0]['role'];
    }

    /**
     * Get the value of role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}
