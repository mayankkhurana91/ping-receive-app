<?php
namespace Testing\PingReceive\Controller;

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
 * DishesController
 */
class DishesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $dishes = $this->dishesRepository->findAll();
        $this->view->assign('dishes', $dishes);
    }

    /**
     * action show
     *
     * @param \Testing\PingReceive\Domain\Model\Dishes $dishes
     * @return void
     */
    public function showAction(\Testing\PingReceive\Domain\Model\Dishes $dishes)
    {
        $this->view->assign('dishes', $dishes);
    }
}
