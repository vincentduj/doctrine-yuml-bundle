<?php
namespace OnurbTest\Bundle\YumlBundle\DataCollector;

use Onurb\Bundle\YumlBundle\DataCollector\DoctrineYumlDataCollector;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DoctrineYumlDataCollectorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers \Onurb\Bundle\YumlBundle\DataCollector\DoctrineYumlDataCollector
     */
    public function testIsInstanceOf()
    {
        $dataCollector = new DoctrineYumlDataCollector();
        $this->assertInstanceOf("Symfony\\Component\\HttpKernel\\DataCollector\\DataCollector", $dataCollector);
    }

    /**
     * @covers \Onurb\Bundle\YumlBundle\DataCollector\DoctrineYumlDataCollector
     */
    public function testGetName()
    {
        $dataCollector = new DoctrineYumlDataCollector();
        $this->assertSame('doctrine_yuml', $dataCollector->getName());
    }

    /**
     * @covers \Onurb\Bundle\YumlBundle\DataCollector\DoctrineYumlDataCollector
     */
    public function testCollect()
    {
        $dataCollector = new DoctrineYumlDataCollector();
        $dataCollector->collect(new Request(), new Response());

        $this->assertSame('a:1:{s:13:"doctrine_yuml";a:0:{}}', $dataCollector->serialize());
    }
}
