<?php

    //Applying Namespacing to avoid name collision for classes.
    namespace config;

    //We need to indicate usage of PDO since we will be implementing
    //all queries based on PDO.
    use \PDO;
    use PDOException;

    //Class intended for connecting to our Database strictly.
    class DbConnect{

        //Defining all the variables that would be needed.
        //We will be using the api.setting.php values for our defined names.
        private $local = SERVER;
        private $unme = USER;
        private $pwrd = PASS;
        private $db = DBASE;
        private $sql;

        //Creation of mySQL connection.
        public function connect(){
            //Construct data for our connect function.
            //Set sql variable to null to be safe from any mis-usage.
            

            //Let's use try catch function to exxecute code and see if there's any
            //error that will produce if incase.
            try{

                $this->sql = null;
                //We will create the actual connection to our database using PDO syntax.
                $this->sql = new PDO(
                    'mysql:host = '.$this->local.'; dbname = '.$this->db, 
                    $this->unme, 
                    $this->pwrd
                );
                $this->sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }catch(PDOException $e){
                //This error message would be printed directly if there is any error
                //That would arise.
                print "Error connecting to SQL: ". $e->getMessage();
            }

            //Whatever the result with our connect function.
            //Let us have the result.
            return $this->sql;
        }
    }
//End of PDO connection.
?>