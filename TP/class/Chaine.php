<?php

class Chaine {

    // public $text;
    // // private $bold;
    // // private $italic;
    // // private $strike;

    /**
     * Set the value of text
     *
     * @return  self
     */ 
    public function set($text)
    {
        $this->text = $text;

        return $this;
    }

    
     /**
     * Set methode Bold
     *
     * @return  self
     */ 
    public function bold()
    {
        $this->text = '<strong>'.$this->text.'</strong>';
        return $this;
    }

     /**
     * Set methode Italic
     *
     * @return  self
     */ 
    public function italic()
    {
        $this->text = '<em>'.$this->text.'</em>';

        return $this;
    }



    // Set methode Print
    public function print()
    {
        return $this->text;
    }

   
    /** Set methode Strike
     *
     * @return  self
     */ 
    public function strike()
    {
        $this->text = '<del>'.$this->text.'</del>';

        return $this;
    }

  
}