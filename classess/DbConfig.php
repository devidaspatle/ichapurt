<?php
class DbConfig 
{    
    private $_host = 'localhost';
    private $_username = 'ichaapu1_ayub';
    private $_password = 'u?),0%?-p[8L';
    private $_database = 'ichaapu1_ayub';
    
    protected $connection;
    
    public function __construct()
    {
        if (!isset($this->connection)) {
            
            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
            
            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
        return $this->connection;
    }
}
?>
