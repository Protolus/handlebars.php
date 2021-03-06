<?php
/**
 * This file is part of Handlebars-php
 *
 * PHP version 5.3
 *
 * @category  Xamin
 * @package   Handlebars
 * @author    fzerorubigd <fzerorubigd@gmail.com>
 * @copyright 2013 Authors
 * @license   GPLv3 <http://www.gnu.org/licenses/gpl-3.0.html>
 * @version   GIT: $Id$
 * @link      http://xamin.ir
 */


/**
 * Handlebars string
 *
 * @category  Xamin
 * @package   Handlebars
 * @author    fzerorubigd <fzerorubigd@gmail.com>
 * @copyright 2013 Authors
 * @license   GPLv3 <http://www.gnu.org/licenses/gpl-3.0.html>
 * @version   Release: @package_version@
 * @link      http://xamin.ir
 */

class Handlebars_String
{
    private $_string;

    /**
     * Create new string
     *
     * @param string $string input source
     */
    public function __construct($string)
    {
        $this->_string = $string;
    }

    /**
     * To String
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getString();
    }

    /**
     * Get string
     *
     * @return string
     */
    public function getString()
    {
        return $this->_string;
    }

    /**
     * Create new string
     *
     * @param string $string input source
     *
     * @return void
     */
    public function setString($string)
    {
        $this->_string = $string;
    }
}