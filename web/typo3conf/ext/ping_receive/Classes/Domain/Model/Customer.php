<?php
namespace Testing\PingReceive\Domain\Model;

/***
 *
 * This file is part of the "PingReceiveApp" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Mayank Khurana <mayank.khurana@hof-university.de>, Hochschule Hof
 *
 ***/

/**
 * Customers
 */
class Customer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * email
     *
     * @var string
     * @validate NotEmpty
     */
    protected $email = '';

    /**
     * orders
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Testing\PingReceive\Domain\Model\Order>
     * @cascade remove
     */
    protected $orders = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->orders = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Adds a Order
     *
     * @param \Testing\PingReceive\Domain\Model\Order $order
     * @return void
     */
    public function addOrder(\Testing\PingReceive\Domain\Model\Order $order)
    {
        $this->orders->attach($order);
    }

    /**
     * Removes a Order
     *
     * @param \Testing\PingReceive\Domain\Model\Order $orderToRemove The Order to be removed
     * @return void
     */
    public function removeOrder(\Testing\PingReceive\Domain\Model\Order $orderToRemove)
    {
        $this->orders->detach($orderToRemove);
    }

    /**
     * Returns the orders
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Testing\PingReceive\Domain\Model\Order> $orders
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Sets the orders
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Testing\PingReceive\Domain\Model\Order> $orders
     * @return void
     */
    public function setOrders(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $orders)
    {
        $this->orders = $orders;
    }
}
