<?php
namespace Testing\PingReceive\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Mayank Khurana <mayank.khurana@hof-university.de>
 */
class CustomerControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Testing\PingReceive\Controller\CustomerController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Testing\PingReceive\Controller\CustomerController::class)
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
    public function listActionFetchesAllCustomersFromRepositoryAndAssignsThemToView()
    {

        $allCustomers = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $customerRepository = $this->getMockBuilder(\Testing\PingReceive\Domain\Repository\CustomerRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $customerRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCustomers));
        $this->inject($this->subject, 'customerRepository', $customerRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('customers', $allCustomers);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCustomerToView()
    {
        $customer = new \Testing\PingReceive\Domain\Model\Customer();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('customer', $customer);

        $this->subject->showAction($customer);
    }
}
