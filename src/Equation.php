<?php
/**
 * Class for creating value-object quadratic equations.
 *
 * @package   Gamajo\Quadratic
 * @author    Gary Jones
 * @link      https://gamajo.com
 * @copyright 2015 Gary Jones, Gamajo Tech
 * @license   MIT
 */

namespace Gamajo\Quadratic;

/**
 * Class for creating value-object quadratic equations.
 *
 * @package Gamajo\Quadratic
 */
interface Equation
{
    /**
     * Return args as an array.
     *
     * @return array
     */
    public function getArgsAsArray();

    /**
     * Check if arguments are valid.
     *
     * @return bool
     */
    public function hasValidArguments();
}
