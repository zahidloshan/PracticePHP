<?php

session_start();


			
			$_SESSION["username"] = $data_new[4];
            $_SESSION["firstname"] = $data_new[0];

            $_SESSION["lastname"] = $data_new[1];
            $_SESSION["email"] = $data_new[3];
            

            echo $_SESSION["username"];





  ?>