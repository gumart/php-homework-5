<?php

namespace App\Services;

class MyIPService
{
    
    private $myIP;

    public function getMyIP()
    {
        $this->myIP = $_SERVER['REMOTE_ADDR'];
        return "Ваш ip: " . $this->myIP . "<br>IP: " . $this->getIPClass();
    }

    private function getIPClass()
    {
        $ipInNumber = ip2long($this->myIP);
        
        if(($ipInNumber >= ip2long("10.0.0.0") and $ipInNumber <= ip2long("10.255.255.255")) or ($ipInNumber >= ip2long("100.64.0.0") and $ipInNumber <= ip2long("100.127.255.255"))
        or ($ipInNumber >= ip2long("172.16.0.0") and $ipInNumber <= ip2long("172.31.255.255")) or ($ipInNumber >= ip2long("192.168.0.0") and $ipInNumber <= ip2long("192.168.255.255"))
        or ($ipInNumber >= ip2long("127.0.0.0") and $ipInNumber <= ip2long("127.255.255.255"))){
            return "Серый";
        } else {
            return "Белый";
        }
    }
}