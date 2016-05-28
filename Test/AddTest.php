<?php
#require (dirname(__FILE__) . '/../vendor/autoload.php');
require(dirname(__FILE__) . '/../src/Add.php');
/**
 * Class AddTest
 */
class AddTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Add
     */
    private $model;

    /**
     *
     */
    public function setUp(){
        $this->model = new Add();
    }

    /**
     * AddTest constructor.
     * @test
     */
    public function should_test_add()
    {
        $this->model = new Add();
        $this->assertEquals($this->model->add(1,2 ),23);
       
    }

    /**
     * @test
     */
    public function should_test_minus()
    {
        $this->model = new Add();
        $this->assertEquals($this->model->add(1,1 ),2 );
    }

}
