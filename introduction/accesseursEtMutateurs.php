<?php

class Personnage
{

    private $_degats;
    private $_experience;
    private $_force;

    public function frapper(Personnage $persoAFrapper)
    {
        $persoAFrapper->_degats += $this->_force;
    }

    public function gagnerExperience()
    {
//Ceci est un raccourci qui équivaut à écrire "$this->_experience = $this->_experience+1"
// On aurait aussi pu écrire $this->_experience +=1
        $this->_experience ++;
    }

//Mutateur chargé de modifier l'attribut $_force.
    public function setForce($force)
    {
        if (!is_int($force))//S'il ne s'agit pas d'un nombre entier.
        {
            trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }
        if ($force > 100)//On vérifie qu'on ne souhaite pas assigner une valeur supérieure à 100.
        {
            trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
            return;
        }
        $this->_force = $force;
    }
//Mutateur chargé de modifier l'attribut $_experience.
    public function setExperience($experience)
    {
        if (!is_int($experience))//S'il ne s'agit pas d'un nombre entier.
        {
            trigger_error('L\'experience d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }
        if ($experience > 100)//On vérifie qu'on ne souhaite pas assigner une valeur supérieure à 100.
        {
            trigger_error('L\'experience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
            return;
        }
        $this->_experience = $experience;
    }
//Mutateur chargé de modifier l'attribut $_degats.
    public function setDegats($degats)
    {
        if (!is_int($degats))//S'il ne s'agit pas d'un nombre entier.
        {
            trigger_error('Les dégâts d d\'un personnage doivent être un nombre entier', E_USER_WARNING);
            return;
        }
        if ($degats > 100)//On vérifie qu'on ne souhaite pas assigner une valeur supérieure à 100.
        {
            trigger_error('Les dégâts d\'un personnage ne peuvent dépasser 100', E_USER_WARNING);
            return;
        }
        $this->_degats = $degats;
    }

    //Ceci est la méthode degats() : elle se charge de renvoyer le contenu de l'attribut $_degats  

    public function degats()
    {
        return $this->_degats;
    }

    //Ceci est la méthode force() : elle se charge de renvoyer le contenu de l'attribut $_force

    public function force()
    {
        return $this->_force;
    }

    //Ceci est la méthode experience() : elle se charge de renvoyer le contenu de l'attribut $_experience

    public function experience()
    {
        return $this->_experience;
    }

}
$perso1=new Personnage();//Un premier personnage
$perso2=new Personnage();//Un second personnage

$perso1->setForce(10);
$perso1->setExperience(2);

$perso2->setForce(90);
$perso2->setExperience(58);

$perso1->frapper($perso2);//$perso1 frappe $perso2
$perso1->gagnerExperience();//$perso1 gagne de l'expérience

$perso2->frapper($perso1);//$perso2 frappe $perso1
$perso2->gagnerExperience();//$perso2 gagne de l'expérience


echo 'Le personnage 1 a ',$perso1->force(),' de force,contrairement au personnage 2 qui a ',$perso2->force(),' de force <br/>';
echo 'Le personnage 1 a ',$perso1->experience(),' d\'expérience ,contrairement au personnage 2 qui a ',$perso2->experience(),' d\'expérience <br/>';
echo 'Le personnage 1 a ',$perso1->degats(),' de dégâts,contrairement au personnage 2 qui a ',$perso2->degats(),' de dégâts <br/>';