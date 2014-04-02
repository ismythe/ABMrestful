<?php
    class userSPDO extends PDO
    {
            private static $instance = null;
            CONST dsn ='mysql:host=localhost;dbname=usuaris';
			CONST user='ian';
			CONST password='1234';

            public function __construct()
            {
                    
                    try{
                        parent::__construct(self::dsn,self::user,self::password);
                    }
                    catch (PDOException $e) {
                     echo 'Connection failed: ' . $e->getMessage();}

            }

            public static function singleton()
            {
                    if( self::$instance == null )
                    {
                            self::$instance = new self();
                    }
                    return self::$instance;
            }
            
    }