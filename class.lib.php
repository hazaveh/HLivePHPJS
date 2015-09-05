<?php

/* 
 *  CODED BY MAHDI HAZAVEH
 *  <mahdi@hazaveh.net>
 */

class compiler {
    public $incfile;
    public $phpcode;
    
    function __construct() {
        $this->incfile = getcwd() . "/scripts/" . date('Ymdhis') . rand(1, 15) . ".php";

        //echo "FILE NAME IS:" . $this->incfile;
    }
    
    function genFile() {
        //echo $this->incfile;
        $this->phpcode = $_POST['code'];
        $file = fopen($this->incfile, "w");
        fwrite($file, $this->phpcode);
        fclose($file);
    }
    
    function includeFile() {
        require_once("$this->incfile");
        
    }
    
    function deleteFile() {
        
        unlink($this->incfile);
    }
    
}
