<?php
namespace Testing\PingReceive\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Mayank Khurana <mayank.khurana@hof-university.de>
 */
class OrderTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Testing\PingReceive\Domain\Model\Order
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Testing\PingReceive\Domain\Model\Order();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getId()
        );
    }

    /**
     * @test
     */
    public function setIdForIntSetsId()
    {
        $this->subject->setId(12);

        self::assertAttributeEquals(
            12,
            'id',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForStringSetsAddress()
    {
        $this->subject->setAddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'address',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getContactReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getContact()
        );
    }

    /**
     * @test
     */
    public function setContactForStringSetsContact()
    {
        $this->subject->setContact('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'contact',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCustomerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCustomer()
        );
    }

    /**
     * @test
     */
    public function setCustomerForStringSetsCustomer()
    {
        $this->subject->setCustomer('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'customer',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDishesReturnsInitialValueForDishes()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getDishes()
        );
    }

    /**
     * @test
     */
    public function setDishesForObjectStorageContainingDishesSetsDishes()
    {
        $dish = new \Testing\PingReceive\Domain\Model\Dishes();
        $objectStorageHoldingExactlyOneDishes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneDishes->attach($dish);
        $this->subject->setDishes($objectStorageHoldingExactlyOneDishes);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneDishes,
            'dishes',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addDishToObjectStorageHoldingDishes()
    {
        $dish = new \Testing\PingReceive\Domain\Model\Dishes();
        $dishesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $dishesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($dish));
        $this->inject($this->subject, 'dishes', $dishesObjectStorageMock);

        $this->subject->addDish($dish);
    }

    /**
     * @test
     */
    public function removeDishFromObjectStorageHoldingDishes()
    {
        $dish = new \Testing\PingReceive\Domain\Model\Dishes();
        $dishesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $dishesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($dish));
        $this->inject($this->subject, 'dishes', $dishesObjectStorageMock);

        $this->subject->removeDish($dish);
    }
}
