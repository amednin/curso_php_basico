<?php

class Repositorio
{
    protected $host;
    protected $user;
    protected $pass;
    protected $dbName;
    protected $link;
    
    public function connectBD()
    {
        $this->link = $this->setLink();    
    }

    public function setLink($host = "webpt.vagrant", $user = "vagrant", $pass = "vagrant", $dbName = "inspeccion")
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbName = $dbName;
        
        return new mysqli($host, $user, $pass, $dbName);
    }

    public function getBDLink()
    {
        return $this->link;
    }

    public function obtenerDatosMovilidad()
    {
        $res = $this->link->query("SELECT * FROM movilidad");
        return $res->fetch_assoc();
    }

    public function guardarDatosMovilidad($placa, $ruat, $estado)
    {
        $resInsert = $this->link->query("insert into movilidad (id, placa, ruat, estado)" .
                " values (NULL, '$placa', '$ruat', '$estado)';");
        
        return $resInsert;
    }
}