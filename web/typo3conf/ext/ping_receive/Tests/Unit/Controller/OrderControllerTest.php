<?php
namespace Testing\PingReceive\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Mayank Khurana <mayank.khurana@hof-university.de>
 */
class OrderControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Testing\PingReceive\Controller\OrderController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Testing\PingReceive\Controller\OrderController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllOrdersFromRepositoryAndAssignsThemToView()
    {

        $allOrders = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $orderRepository = $this->getMockBuilder(\Testing\PingReceive\Domain\Repository\OrderRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $orderRepository->expects(self::once())->method('findAll')->will(self::returnValue($allOrders));
        $this->inject($this->subject, 'orderRepository', $orderRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('orders', $allOrders);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenOrderToView()
    {
        $order = new \Testing\PingReceive\Domain\Model\Order();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('order', $order);

        $this->subject->showAction($order);
    }
}
