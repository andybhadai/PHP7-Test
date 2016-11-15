<?php

class FTP{

    private $URL;
    private $Username;
    private $Password;
    private $Connected;
    
    public function __construct(string $url, string $username = null, string $password = null){
        $this->URL = $url;
        $this->Username = $username;
        $this->Password = $password;
        $this->CheckConnection();
    }

    public function CheckConnection() : bool{
        $this->Connected = false;
        return $this->Connected;
    }

    public function DisplayConnectionStatus() : string{

        if($this->CheckConnection()){
            return $this->Feedback("You are connected!");
        }else{
            return $this->Feedback("You are not connected!");
        }
    }

    private function Connect(){
        if($this->Connected){
            return $this->Feedback("Connected!");
        }
    }

    // Provide the user the status of the connection
    private function Feedback(string $message) : string{
        return $message;
    }
}
?>