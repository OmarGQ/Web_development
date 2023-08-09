<?php
	class Sesion
	{
		private $localemail = "";
		private $localpassword = "";
	    private $sesion;
	    private $dbh;
	    public function __construct()
	    {
	        $this->sesion = array();
	        $this->dbh = new PDO('mysql:host=localhost;dbname=cetianosunidos', "cetianosunidos", "baa27c2e5");
	    }
	 
	    private function set_names()
	    {
	        return $this->dbh->query("SET NAMES 'utf8'");
	    }
	 	public function set_sesion($myemail = "", $mypassword = ""){
	    	$this->localemail = $myemail;
	    	$this->localpassword = $mypassword;
	    }
	    public function iniciar_sesion()
	    {
	        self::set_names();	
	        $sql="SELECT nombre, apellidos, direccion, ciudad, estado, postal, f_nacimiento, email, targeta, tipo_t	FROM usuarios WHERE email = '{$this->localemail}' AND contrasena = '{$this->localpassword}'";
	        foreach ($this->dbh->query($sql) as $res)
	        {
	            $this->sesion[]=$res;
	        }
	        return $this->sesion;
	        $this->dbh=null;
	    }
	}
?>