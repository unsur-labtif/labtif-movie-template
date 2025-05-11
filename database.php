    <?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'labtif_movie');
    class Database
    {
        public $mysqli;

        function __construct()
        {
            $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if ($this->mysqli->connect_errno) {
                echo "Failed to connect to MySQL: " . $this->mysqli->connect_error;
            }
        }

        function select($table)
        {
            $sql = "SELECT * FROM $table";

            $result = $this->mysqli->query($sql);

            return $result->fetch_all(MYSQLI_ASSOC);
        }

        function __destruct()
        {
            $this->mysqli->close();
        }
    }
