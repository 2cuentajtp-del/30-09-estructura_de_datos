<?<php>
    declare(strict_type=1)
    class Database {
        private PDO $pdo;
        public function __contruct(){
            $host = '127.0.0.1';
            $db = 'estructura';
            $user = 'root';
            $pass = '';
            $charset = 'utf8mb4';
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $option = [
                PDO::ATTR_ERRNODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_emulate_prepares => false,
            ];
            try{
                $this->pdo = new PDO($dsn,$user,$pass,$options);

            }catch(PDOException $e){
                throw new RuntimeException('Error de conexión');
            }
         }
            public function getPo(): PO {
                return $this->pdo;
            }
        }
        ?>
                
    