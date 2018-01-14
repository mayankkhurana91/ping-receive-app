<?php
namespace Testing\PingReceive\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Mayank Khurana <mayank.khurana@hof-university.de>
 */
class DishesControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Testing\PingReceive\Controller\DishesController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Testing\PingReceive\Controller\DishesController::class)
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
    public function listActionFetchesAllDishessFromRepositoryAndAssignsThemToView()
    {

        $allDishess = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $dishesRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $dishesRepository->expects(self::once())->method('findAll')->will(self::returnValue($allDishess));
        $this->inject($this->subject, 'dishesRepository', $dishesRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('dishess', $allDishess);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenDishesToView()
    {
        $dishes = new \Testing\PingReceive\Domain\Model\Dishes();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('dishes', $dishes);

        $this->subject->showAction($dishes);
    }
}
