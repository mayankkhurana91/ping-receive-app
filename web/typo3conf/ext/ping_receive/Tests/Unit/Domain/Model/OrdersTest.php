<?php
namespace Testing\PingReceive\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Mayank Khurana <mayank.khurana@hof-university.de>
 */
class OrdersTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Testing\PingReceive\Domain\Model\Orders
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Testing\PingReceive\Domain\Model\Orders();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
