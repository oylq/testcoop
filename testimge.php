
<?php
/*
include "auth.php";
 
try {

        $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", "$dbuser", "$dbpass", array( PDO::ATTR_PERSISTENT => false));

        $stmt = $dbh->prepare("SELECT * FROM Image WHERE PersonID = '12345678'");

        $stmt->execute();

        $rows = $stmt->fetchAll();

        foreach ($rows as $rs)

        {
                echo '<img src="data:image/jpeg;base64,'.base64_encode( $rs['ImageData'] ).'"/>';
        }

        unset($stmt);

} catch (PDOException $e) {

        print "Error!: " . $e->getMessage() . "<br/>";
        die();

}
*/

echo "test db connection";
?>
