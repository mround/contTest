<?php
/**
 * Holds ContTest class.
 * 
 * PHP version 5
 * 
 *   @category Ci
 *   @package  Com.fmts.ci.test
 *   @author   Matthew Round <mround@friendmts.co.uk> 
 *   @license  http://example.com example
 *   @link     ftms.co.uk 
 *
 */


/**
 * ContTest 
 * 
 * Test class for test project for continious intergration testing
 * 
 *   @category  Ci
 *   @package   Com.fmts.ci.test
 *   @author    Matthew Round <mround@friendmts.co.uk> 
 *   @copyright 2012 Friend Media Technology Systems
 *   @license   http://example.com example
 *   @version   Release:1.0
 *   @link      ftms.co.uk 
 */
class ContTest
{


    /**
     * _a 
     * 
     * @var mixed
     * @access private
     */
    private $_a;


    /**
     * _b 
     * 
     * @var mixed
     * @access private
     */
    private $_b;


    /**
     * getA 
     * 
     * @access public
     * @return void
     */
    public function getA()
    {
        $return = false;
        $aIsSet = isset($this->_a);
        if ($aIsSet) {
            $return = $this->_a;
        }
        return $return;

    }


    /**
     * getB 
     * 
     * @access public
     * @return void
     */
    public function getB()
    {
        $return = false;
        $bIsSet = isset($this->_b);
        if ($bIsSet) {
            $return = $this->_b;
        }
        return $return;

    }


    /**
     * setA 
     * 
     * @param mixed $a The a to set
     * 
     * @access public
     * @return void
     */
    public function setA($a)
    {
        $aIsOK = isset($a) && $a != null;
        if ($aIsOK) {
            $this->_a = $a;
        }
    }


    /**
     * setB 
     * 
     * @param mixed $b The b to set
     * 
     * @access public
     * @return void
     */
    public function setB($b)
    {
        $bIsOK = isset($b) && $b != null;
        if ($bIsOK) {
            $this->_b = $b;
        }
    }


    /**
     * __toString 
     * 
     * @access public
     * @return void
     */
    public function __toString()
    {
        $out='';
        $out.=$this->_a;
        $out.=$this->_b;
        return $out;
    }


    /**
     * toArray 
     * 
     * @access public
     * @return void
     */
    public function toArray()
    {
        $out= array();
        $out['a']=$this->_a;
        $out['b']=$this->_b;
        return $out;
    }


    /**
     * __construct 
     * 
     * @access protected
     * @return void
     */
    function __construct()
    {
    }

}
?>
