<?php

class Personnage { // (c'est le Moule )
   
    /**
     * Niveau Novice
     * @param int
     */
    const NOVICE = 1;

     /**
     * Niveau Expert
     * @param int
     * 
     */
    const MEDIUM = 2;

     /**
     * Niveau Expert
     * @param int
     * 
     */
    const EXPERT = 3;

    /**
     * Nom du personnage
     * @param string
     */
    public $name;

    /**
     * Point de vie du personnage
     * @param int
     */
    public $life = 100;
    
    /**
     * Niveau d'expérience du perso
     * @param int
     */
    public $xp;

    /**
     * Constructeur
     *
     */
    public function __construct(string $character_name, int $experience = self::NOVICE)
    {
            $this->name = $character_name;
            $this->xp = $experience;
    }




    /**
     * Saluer l'adversaire
     * 
     * @param string $name Nom de l'adveraire
     * @return string Personnage A salut Personnage B
     */
    public function sayHello($opponent)
    {
        return $this->name." salue ".$opponent->name;

    }

    /**
     * On attaque un adversaire et on lui soustrait des pts de vie
     *  
     */
    public function attack($opponent, $coef = 1)
    {
        switch ($this->xp)
        {
            case self::NOVICE:
            $opponent->life -= (10*$coef);
                break;
            
            case self::MEDIUM:
            $opponent->life -= (20*$coef);
                break;
            
            case self::EXPERT:
            $opponent->life -= (30*$coef);
                break;
        }
    }


 
    /**
     * Un super attaque (qui double les dégats)
     *  
     */

    public function superAttack($opponent)
    {
        $this->attack($opponent, 2);
    }



    /**
     * Un soin apporte 11 points de vie
     *  
     */

    public function care()
    {
        $this->life +=10;
    }



    /**
     * Un attaque secrete est reussie quand l'adversaire possède MOINS de 50 points de vie
     * @param object $opponent
     *  
     */
    public function secretAttack($opponent)
    {
        if($opponent->life<50)
           $opponent->life = 0;
    }


    /**
     * Un attaque secrete est reussie quand l'adversaire possède MOINS de 50 points de vie
     * @param object $opponent
     *  
     */
    public function levelUp()
    {
        switch ($this->xp)
        {
            case self::NOVICE:
                $this->xp = self::MEDIUM;
                 break;

            case self::MEDIM:
                 $this->xp = self::EXPERT;
                 break;


           default:
           $this->xp = self::NOVICE;
            
        }
    }










}
