<?php
    $whiteList = array("index.php","index1.php","index2.php");
    function includeFile($file)
        {
            global $whiteList;
            if(!in_array($file, $whiteList)){
                throw new Exception("No file in whitelist");
			}else{
				if(!file_exists($file)){
					throw new Exception("Filename is not valid");
				}else{
					include $file;
				}
			}
                
        }
    try
    {
        includeFile("index1.php");
    }
    catch(Exception $ex)
    {
        echo $ex->getMessage();
    }
?>