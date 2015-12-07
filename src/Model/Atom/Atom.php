<?php
namespace HelloBigWorld\Model\Atom;

/**
 * Class Atom
 *
 * Un atome est la plus petite partie d'un corps simple pouvant se combiner chimiquement avec un autre.
 *
 * @package HelloBigWorld\Model\Atom
 * @abstract
 */
abstract class Atom
{
    /** @var int doit contenir le numéro atomique */
    protected $number;

    /** @var string doit contenir le symbole */
    protected $symbol;
}
