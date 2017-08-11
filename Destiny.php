<?php
namespace Hax;
class Destiny
{
    public $wonderfulMagic,
           $powerfulWizard;
    
    public function __construct()
    {
        $this->powerfulWizard = 'Placeholder Wizard';
        $this->_castCoolSpell('Get that Balrog');
    }
    
    private function _castCoolSpell($coolSpell)
    {
        echo 'That '.$this->powerfulWizard.
        ' begets the power to cast a '.$coolSpell.'.';
        
        if (!isset($this->wonderfulMagic)) {
            $this->wonderfulMagic = array();
        }
        $this->wonderfulMagic[] = $coolSpell;
    }
    
    public function whosIt()
    {
        var_dump($this->powerfulWizard);
    }
    
    public function wotsMePowas()
    {
        var_dump($this->wonderfulMagic);
    }
}
