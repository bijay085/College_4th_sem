<?php
$host = "127.0.0.1:3307";
$dbuser = "root";
$dbpwd = "";
$dbname = "db_sl";

/**
 * Connection can be done in 2 way majorly.
 * - i.(PHP MYSQL) MYSQL query itslef (recommended)
 * - ii.(PDO) = Object concept to accept any DBMS lately (i.e : MYSQL, ProstGreSQL, SQL etc)
 * ------------------------------
 * PDO - php data object 
 * SQL - structured query language
 * MYSQL - DBMS
 * phpmyadmin - GUI platform to use MYSQL
 * 
 * Note : We recommend MySQL queries on our project considering, we are using MySQL DBMS, where ltes not iuse generalized query standard like PDO
 * 
 * NOTE 2 : Using PHP/MySQL, there are also 2 methods of connection
 * - i. Procedural / functional based (i.e mysqli_connect())
 * - ii. object based / instance based (i.e new mysqli())
 *      $instance = new ObjectClass();
 *      i.e instance = new Object();
 * 
 * Here use instance based which is new method
 *  -mysqli = MySQL instance (old has mysql only as a term)
 */

 /**
  * Creating db inside MySQl using phpmyadmin platform
  * DataBase Name
  * Collabtion (Character Encoding )
  *     (Character : Global , local (Unicode))
  *         -Old general : UTF8_general_ci etc..
  *         - New general : UTF8MB4_general_ci etc...
  *         - which exists in HTML as meta named characterset
  *              i.e <meta charset = "UTF8">
  */

//   $conn = mysqli_connect(); //procedural 
$conn = new mysqli($host, $dbuser, $dbpwd, $dbname); //object oriented
if(!$conn) die("Database connection field");
// else echo "correct";