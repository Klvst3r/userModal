<?php
 
class DatabaseConnect {
     
    /**
     * Método con los valores generales para nuestra aplicación.
     * Method with the default values for our application.
     * @return type PDO devuelve un objeto PDO resultado de la conexión.
     *  (object returns a result of the connection).
     */
    public function dbConnectSimple(){        
        $dbsystem='mysql';
        $host='localhost';
        $dbname='silar';
        $username='dev';
        $passwd='desarrollo'; 
        return $this->dbConnect($dbsystem, $host, $dbname, $username, $passwd);
    }
    /**
     * Método para definir la conexión a la base de datos mediante parámetros 
     * devuelve un objeto PDO con la conexión realizada.
     * Method to define the connection to the database using PDO parameters returns an object with the successful connection.
     * @param type $dbsystem tipo de base de datos, por ejemplo: mysql, postgresql (database type, for example: mysql, postgresql..
     * @param type $host el host ya sea el nombre correspondiente o la IP directamente (the host either the corresponding name or IP directly).
     * @param type $dbname el nombre de la base de datos a la que nos queremos conectar (the name of the database to which you want to connect).
     * @param type $username nombre del usuario para la conexión a la base de datos especificada en el DSN (for the connection to the database specified in the DSN).
     * @param type $passwd contraseña asociada la usuario que definimos para la conexión (password associated with the user to define the connection type).
     * @return type PDO devuelve un objeto PDO resultado de la conexión (PDO object returns a result of the connection).
     */
    public function dbConnect($dbsystem, $host, $dbname, $username, $passwd){              
        $dsn=$dbsystem.':host='.$host.';dbname='.$dbname;               
        try {          
            $connection = new PDO($dsn, $username, $passwd);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $pdoExcetion) {
            $connection = null;
            echo 'Error al establecer la conexión: '.$pdoExcetion;
            exit();
        }
        //echo 'Conectado a la base de datos: '.$dbname;
        return $connection;        
    } // dbConnect

}// DatabaseConnect