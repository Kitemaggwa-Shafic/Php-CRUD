<?php

            $mysql_hostname = "localhost"; // specifies my host
            $mysql_user = "root"; // specifies my host user name
            $mysql_password = ""; //specifies my host password
            $mysql_database = "My_db"; // specifies my database name

            // so we shall wrap everythingin an if statement
            // these are conditional statements checking a condition and return one stmt if a condition is true or false
        if(isset($_POST["submit"]) && !empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["email"]) ){
                // username and password sent from form we are storing them with some new variables
                  $a=$_POST["firstname"];  
                  $b=$_POST["lastname"];
                  $c=$_POST["email"];
 			
		         $con=mysql_connect($mysql_hostname, $mysql_user, $mysql_password);
                
                if(!$con){
                    //if the above connection has failed, pass mySql error
                    echo "failed to connect".mysql_error();
                }
                // Here im declaring a variable selectdb and is used to select my database
                $selectdb=mysql_select_db($mysql_database,$con);
                
                if(!$selectdb){
                    //if the Db selection has failed, pass mySql error
                    echo "failed to select database".mysql_error();
                 }
                 //Query for inserting data into my table, wher i listthe fields and the values associated with @fiels
                $sql = "INSERT INTO student (firstname, lastname, email) VALUES ('$a', '$b', '$c')";

                $sql=mysql_query($sql,$con); //this function excecutes our query
                //Here im redirecting to the URL i want after succefuly query
				header("Location:view_committal.php");
		
                 if(!$sql){
                    //if the query has failed, pass mySql error for not saving my data
                   echo "failed to insert data".mysql_error();
              }
		 }
        
        //You can use this to else part to validate your fields also with php
        // else{ 
        //    echo "none of the fields should be left blank";
        // }
        
        ?>