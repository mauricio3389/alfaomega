<?php

class myUser extends sfGuardSecurityUser
{
    public function signIn($user, $remember = false, $con = null)
    {
        parent::signIn($user, $remember, $con);
        
        $grupos = $this->getGroupNames();
        
        if($grupos[0] === 'Administrador')
        {
            $this->addCredential('admin');
        }
    }
    
    public function __toString() {
        return $this->getGuardUser()->username;
    }
}
