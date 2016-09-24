<?php

    
    /**
     * permission problems for files already created by user. lets allows php to create its own file
     * @param type $dir_name
     */
    function file_mkdir($dir_name){
        $dir_name =  realpath('.').DIRECTORY_SEPARATOR. $dir_name;
     
         if (file_exists($dir_name)) {            
             // do nothing
        } else {
            $oldmask = umask(0);  // helpful when used in linux server  
            mkdir($dir_name, 0777);  
            umask($oldmask);
           
        }

        return $dir_name;
    }
    
  
    
    
    /**
     * unlink file
     * @param string $filepath path to file
     */
    function file_unlink_file($filepath){
        if(file_exists($filepath)):
              unlink($filepath);
          endif;
    }

?>