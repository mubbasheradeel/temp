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
    public function addTest()
    {
        $this->model = new Add();
        $this->assertEquals($this->model->add(1,2 ),33);
       
    }

    /**
     * @test
     */
    public function minusTest()
    {
        $this->model = new Add();
        $this->assertEquals($this->model->add(1,1 ),2 );
    }

}
