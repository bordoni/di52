<?php

use tad_DI52_Container as DI;

class Dummy242423
{
    protected $var;

    public function __construct($var)
    {
        $this->var = $var;
    }

    public function get_var()
    {
        return $this->var;
    }
}

class AlternativeVarNotationSupportTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * it should allow marking vars using the %var% notation
     */
    public function it_should_allow_marking_vars_using_the_var_notation()
    {
        $container = new DI();
        $container['some-var'] = 23;
        $container['object'] = array('Dummy242423', '%some-var%');

        $instance = $container['object'];

        $this->assertEquals(23, $instance->get_var());
    }
}