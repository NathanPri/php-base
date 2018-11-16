
<?php



class Vehicules { // (c'est le Moule )

    
    /**
     * Nom de la Marque
     * @param string
     */
    public $Marque;
    
    /**
     * Nom du modèle
     * @param string
     */
    public $Modele;
    
    /**
     * Nom de la couleur
     * @param string
     */
    public $Couleur;
    
    /**
     * Etat = en marche ou non
     * @param boolean
     */
    public $Moving = false;
    
    /**
     * La Vitesse
     * @param string
     */
    public $Vitesse = 0;

    /**
     * La Vitesse maximum
     * @param string
     */
    public $Maxvitesse = 100;
    
    /**
     * Nom du conducteur
     * @param string
     */
    public $Chauffeur;

     /**
     * Nom du conducteur
     * @param boolean
     */
    public $hasDriver = false;



    /**
     * 
     * CONSTRUCTOR
     */
    public function __constructor(string $brand, string $model, string $color, string $driver = ""  )
    {
        $this->Marque = $brand;
        $this->Modele = $model;
        $this->Couleur = $color;
        $this->Chauffeur = $driver;
        


        if(!empty($this->diver))
        {
            $this->hasDriver = true;
        }

    

    }

    /**
     * Les méthodes possibles réalisés par la voiture : Demarrer 
     * @param string
     *
     */
    public function Start()
    {
        if(!$this->Moving)
        {
             $this->Moving = true;
        }

    }
   

    
    /**
     * Les méthodes possibles réalisées par la voiture : Avancer
     * @param int $speed
     *
     */
    public function Accelerate(int $Vitesse)
    {
        if($this->Moving)
        {
            $this->vitesse = $Vitesse;

            if($this->vitesse > $this->Maxvitesse)
            {
                $this->Maxvitesse = $this->vitesse;
            }
            
        }
    }


    /**
     * Les méthodes possibles réalisées par la voiture : Freiner
     * @param string
     *
     */
    public function Slowdown(int $Vitesse)
    {
        if($this->vitesse > $Vitesse && $Vitesse >=0)
        {
            $this->vitesse = $Vitesse;
        }
    }

    /**
     * Les méthodes possibles réalisées par la voiture : Tourner
     * @param string
     *
     */
    public function Turn(string $Direction)
    {
        if($this->vitesse >= 30)
        {
            $this->Slowdown(29);            
        }
        
        return "La voiture tourne à".$Direction ."<br/>";
    }


    /**
     * Les méthodes possibles réalisées par la voiture : Stop
     * @param string
     *
     */
    public function Stop()
    {
        if($this->Moving  && $this->vitesse == 0)
        {
            $this->Moving = false; 
        }
        
    }



}