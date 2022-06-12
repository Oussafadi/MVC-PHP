 <?php

    class Model
    {
        public $table;
        public static $pdo_instance = null;

        public function __construct()
        {
            try {
                self::$pdo_instance = new PDO('mysql:host=localhost;dbname=ensat', "root", "");
                return self::$pdo_instance;
            } catch (PDOException $e) {
                echo " Error! :" . $e->getMessage() . "<br/>";
                die;
            }
        }

        public function requete($sql, array $valeurs)
        {
            self::$pdo_instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if ($valeurs !== null) {
                $statement = self::$pdo_instance->prepare($sql);
                if ($statement->execute($valeurs)) {
                    return $statement;
                }
            } else {
                return self::$pdo_instance->query($sql);
            }
        }

        public function Table()
        {
            $sql = 'Select * from eleves ';
            $array = $this->requete($sql, $rien = []);
            $result = $array->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function insert()
        {
            // INSERT INTO ELEVES ('','','') VALUES ('?','?','?')
            $champs = [];
            $signe = [];
            $valeurs = [];
            foreach ($this as $champ => $valeur) {
                if ($valeur != null && $champ != 'pdo_instance' && $champ != 'table') {
                    $champs[] = $champ;
                    $signe[] = '?';
                    $valeurs[] = $valeur;
                }
            }
            // tranformer le tableau champs en chaine de caracteres 
            $les_champs = implode(',', $champs);
            $exl = implode(',', $signe);
            //execute 
            return $this->requete('INSERT INTO ' . $this->table . '(' . $les_champs . ') VALUES (' . $exl . ')', $valeurs);
        }

        public function arraytobject(array $data)
        {
            foreach ($data as $key => $value) { //le nom du setter correspondant a key 
                $setter = 'set' . ucfirst($key);
                if (method_exists($this, $setter)) {
                    $this->$setter($value);
                }
            }
            return $this;
        }

        public function update($id)
        {
            // UPDATE ELEVES SET NOM=? , PRENOM =? ECT WHERE ID=?
            $champs = [];
            $valeurs = [];
            foreach ($this as $champ => $valeur) {
                if ($valeur != null && $champ != 'pdo_instance' && $champ != 'table') {
                    $champs[] = "$champ=?";
                    $valeurs[] = $valeur;
                }
            }
            $valeurs[] = $id;

            $les_champs = implode(',', $champs);

            return $this->requete("UPDATE {$this->table} SET   $les_champs  WHERE id=?", $valeurs);
        }

        public function delete(int $id)
        {
            return $this->requete("DELETE FROM {$this->table} WHERE id = ?", [$id]);
        }
    }
