<?php
namespace HelloBigWorld\Model\Atom;

/**
 * Class Oxygen
 *
 * L'oxygène est l'élément chimique de numéro atomique 8, de symbole O.
 *
 * @package HelloBigWorld\Model\Atom
 */
class Oxygen extends Atom
{
    public function __construct()
    {
        $this->number = 8;
        $this->symbol = 'O';
    }
}