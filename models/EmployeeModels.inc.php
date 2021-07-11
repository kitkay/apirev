<?php

    /**
     * EmployeeModel Class for accessing our employee table
     */
    namespace models;

    class EmployeeModel{

        private $sql;

        /**
         * Construct the database connection.
         */
        public function __construct($db){
            $this->sql = $db;
        }

        private function readEmp(){

            $query = "SELECT a.u_id, a.fname, a.lname, a.mobile, a.email_ad, a.date_in
                      FROM 
                     ";

        }

    }

?>