<?php


$myhost= gethostname();

if ($myhost === "lodemo")
{
$dbhost1 = "localhost"; 
$dbname1 = "Demolo"; 
$dbuser1 = "appdemo"; 
$dbpass1 = "4eree3lere"; 

}

define("APP_DB_HOST",			$dbhost1);	
define("APP_DB_USER",			$dbuser1);
define("APP_DB_CRED",			$dbpass1);
define("APP_DB_DEFAULT",		$dbname1);	

$conn = mysqli_init();
mysqli_options($conn, MYSQLI_OPT_LOCAL_INFILE, true);
mysqli_real_connect($conn,$dbhost1, $dbuser1, $dbpass1, $dbname1);


define("APP_DB_HOST_CCURE", "mssqllcalhost");
define("APP_DB_DBNAME_CCURE", "Demosqllo");
define("APP_DB_USER_CCURE", "appdemosql");
define("APP_DB_CRED_CCURE", "eree3le");



	$step = "";
    $link = NULL;
    $stmtMSSQL = NULL;
  
  //  try {
     //   $step = "Connect to " . APP_DB_HOST_CCURE . "." . APP_DB_DBNAME_CCURE . " as " . APP_DB_USER_CCURE;
     //   $dsn = "dblib:host=" . APP_DB_HOST_CCURE . ";dbname=" . APP_DB_DBNAME_CCURE;
     //   $link = new PDO ($dsn, APP_DB_USER_CCURE, APP_DB_CRED_CCURE);
    /*
        $step = "Initial select from CCURE";
        $stmtMSSQL = $link->prepare("SELECT TOP 1 LastName, CampusID FROM UMass.vw_PersonnelCredential WHERE LastName NOT IN ('', 'HRL')");
    
        if ($stmtMSSQL->execute()) {
		echo "SELECT SUCCEEDED!" . PHP_EOL;
            while ($row = $stmtMSSQL->fetch(PDO::FETCH_ASSOC)) {
		echo $row['LastName'] . PHP_EOL;
		echo $row['CampusID'] . PHP_EOL;
          }         
         
	}  */
  //  }
   // catch(PDOException $e) {
     // echo $e->getMessage() . "(" . $e->getCode() . ")" . PHP_EOL;
   // } 
    /*
    finally {
      if (!is_null($link)) unset($link);
      if (!is_null($stmtMSSQL)) unset($stmtMSSQL); 
    }
    */


?>