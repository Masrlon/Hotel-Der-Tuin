<?php
Class DB{
    private $dbh;
    protected $tmt;

    public function __construct($db="hotel-ter-duin",$host="127.0.0.1:3306",$user="root",$pass="")
    {try {
        $this->dbh = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: ". $e->getMessage();
    
    }
    }
    public function execute($sql,$placeholder=null): mixed{
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute($placeholder);
        return $stmt;   
    }}
    $mydb = new DB(db:"hotel-ter-duin");
?>