<!-- Connect database with this php -->
<!-- To create a class on the purpose of High cohesion in such robustness, reliability and reusable and understandibility  -->
<?php
class dbconnect {
	private $host = "localhost";
	private $user = "X33149316"; //Change to test here if you are other user on Ceto server
	private $password = "X33149316"; //Change to test here if you are other user on Ceto server
	private $database = "X33149316"; //Change to test here if you are other user on Ceto server
  public $db;
  public $conn;

	function __construct() {
    $this->db = $this->connectDB();
		$this->conn = $this->selectDB();
	}
// This function perform a connection to the server where database located.
	function connectDB() {
    $db = mysql_connect($this->host,$this->user,$this->password);
    if (!$db) {
         print "Error - Could not connect to MySQL";
         exit;
    }
    return $db;
  }
  // This function select database after connect to the server.
  function selectDB()
  {
    $conn = mysql_select_db($this->database);
    if (!$conn) {
        print "Error - Could not select the student database";
        exit;
    }
		return $conn;
  }
// This function run the query from any query and access the row.
  function runQuery($query)
  {
  		$result = mysql_query($query);
      if (!$result) {
          print "Error - the query could not be executed";
          $error = mysql_error();
          print "<p>" . $error . "</p>";
          exit;
      }
  		while($row = mysql_fetch_array($result)){
  			$resultset[] = $row;
  		}
  		if(!empty($resultset))
  			return $resultset;

  }
}
  ?>
