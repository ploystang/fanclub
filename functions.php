<?php 
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'fanclub_activity');   
    class DB_con {
        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }
    }
    class activity extends DB_con {
        public function activity() {
            $result = mysqli_query($this->dbcon, "SELECT * 
            FROM activity
            WHERE eventType = 'fanart'" );
            return $result;
        }
    }      
    class fanart_meeting extends DB_con {
        public function fanart_meeting() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM fanart_meeting");
            return $result;
        }
    }
    class bank extends DB_con {
        public function bank() {
            $result = mysqli_query($this->dbcon, "SELECT * 
            FROM activity,leader as l ,bank as b,fanart_meeting  
            WHERE b.BankID=l.BankID and eventType = 'fanart'
            GROUP BY eventType" );
            return $result;
        }
    }       
    class datazone extends DB_con {
        public function datazone() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM datazone ORDER BY PriceZone" );
            return $result;
        }

    }
?>