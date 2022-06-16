<?php
class Personas extends SignosZodiacales{

    protected $fechaNac;
    protected $userId;
    protected $userAlias;
    protected $listaUsuarios;
    protected $password;
    protected $nombre;

    public function __construct($nombre = null, $fechaNac = null, $userAlias = null, $password = null, $listaUsuarios = null)
    {
        if (!$fechaNac instanceof \DateTime) {
            $fechaNac = new \DateTime($fechaNac);
        }
        $this->fechaNac = $fechaNac;
        $this->lista_Usuarios = $listaUsuarios;
        
        $this->userId = $this->findUserid();
        if (null !== $this->userId) {
            $this->nombre = $this->listaUsuarios[$this->userId]['nombre'];
        }
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getAlias()
    {
        return $this->listaUsuarios[$this->userId]['alias'];
    }

    public function getPassword()
    {
        return $this->listaUsuarios[$this->userId]['pass'];
    }

    protected function findUserid()
    {
        
        foreach ($this->listaUsuarios as $user) {
            if ($alias == $user['alias'] && $password == $user['pass'] ) {
                return $user['id'];
            }
        }

        return;
    }

}