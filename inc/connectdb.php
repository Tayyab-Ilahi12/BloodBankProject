<?php


$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "bb";
$prefix = "";


$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");



//class Database
//{
//    private static $dbName = 'bb' ;
//    private static $dbHost = 'localhost' ;
//    private static $dbUsername = 'root';
//    private static $dbUserPassword = '';
//
//    private static $cont  = null;
//
//    public function __construct() {
//        //to prevent the misuse of this class
//        die('Init function is not allowed');
//    }
//
//    public static function connect()
//    {
//        if ( null == self::$cont )
//        {
//            try
//            {
//                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
//            }
//            catch(PDOException $e)
//            {
//                die($e->getMessage());
//            }
//        }
//        return self::$cont;
//    }
//
//    public static function disconnect()
//    {
//        //to close connection
//        self::$cont = null;
//    }
//}
?>
