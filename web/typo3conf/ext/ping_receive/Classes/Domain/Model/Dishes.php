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
 * Dishes
 */
class Dishes extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * id
     *
     * @var int
     * @validate NotEmpty
     */
    protected $id = 0;

    /**
     * type
     *
     * @var string
     * @validate NotEmpty
     */
    protected $type = '';

    /**
     * quantity
     *
     * @var int
     * @validate NotEmpty
     */
    protected $quantity = 0;

    /**
     * Returns the id
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the id
     *
     * @param int $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Returns the type
     *
     * @return string $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param string $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Returns the quantity
     *
     * @return int $quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets the quantity
     *
     * @param int $quantity
     * @return void
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}
