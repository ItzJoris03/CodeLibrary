<?php
/*
 * An example of using class.database.php
 */


include "http://raw.githubusercontent.com/ItzJoris03/CodeLibrary/main/PHP/Database/class.database.php";

class exampleDatabase extends db {

    // @Override throwException method due to abstraction
    public function throwException(PDOException $e, ?int $exceptionCode = NULL, ?string $sql = NULL) : void {
        echo "<p class='warning'>";
        switch ($exceptionCode) {
            case 0: 
                echo "Couldn't load some data from the table name.";
                break;
            default:
                echo "Something went wrong.";
                break;
        }
        echo "</p><p class='exception'>$e</p>";
    }

    public function getSomeData() : array | false {
        $sql = "SELECT * FROM table_name";

        $exceptionCode = 0;

        return $this->getData($sql, $exceptioncode);
    }
}

// $exampleDB = new exampleDatabase();
// $exampleDB->setDatabase("database_name");
// $exampleDB->getSomeData();