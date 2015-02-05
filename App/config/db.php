<?php 

	/**
	* DATABASE CONNECTION
	*/
	class DB 
	{
		private $username;
		private $password;
		private $database;
		private $host;
		
		public function __construct($config)
		{
			$this->username = $config["username"];
			$this->password = $config["password"];
			$this->database = $config["database"];
			$this->host = $config["host"];
		}

		public function connect()
		{
			try {
				$conn = new PDO("mysql:host=".$this->host.";dbname=".$this->database,
					$this->username,$this->password);
				$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

				return $conn;
			} catch (Exception $e) {
				return false;
			}
		}
	}



	?>