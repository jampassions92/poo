<?php

class Personnage
{

    private $_degats = 0; //Les dégâts du personnage.
    private $_experience = 0; //L'experience du personnage.
    private $_force = 20; //La force du  personnage (plus elle est grande, plus l'attaque est puissante).

    public function frapper(Personnage $persoAFrapper)
    {
        $persoAFrapper->_degats+= $this->_force;
    }

    public function gagnerExperience()
    {
//On ajoute 1 à notre attribut $_experience.
        $this->_experience = $this->_experience + 1;
    }

}

$perso1=new Personnage();//Un premier personnage
$perso2=new Personnage();//Un second personnage

$perso1->frapper($perso2);//$perso1 frappe $perso2
$perso1->gagnerExperience();//$perso1 gagne de l'expérience
$perso2->frapper($perso1);//$perso2 frappe $perso1
$perso2->gagnerExperience();//$perso2 gagne de l'expérience


