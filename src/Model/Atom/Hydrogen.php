<?php
namespace HelloBigWorld\Model\Atomic;

/**
 * Class Hydrogen
 *
 * L'hydrogène est l'élément chimique de numéro atomique 1, de symbole H.
 *
 * @package HelloBigWorld\Model\Atom
 */
class Hydrogen extends Atom
{
    public function __construct()
    {
        $this->number = 1;
        $this->symbol = 'H';
    }
}