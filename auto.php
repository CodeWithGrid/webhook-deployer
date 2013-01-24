<?php

 // Prevent accidental XSS
 header("Content-type: text/plain"); 

 // Run the script - make sure that your SSH key is set with *no* password
 if ( $_POST['payload'] ) {
  shell_exec("./pull.sh"); 
}