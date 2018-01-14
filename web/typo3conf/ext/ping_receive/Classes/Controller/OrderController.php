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
 * OrderController
 */
class OrderController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * orderRepository
     *
     * @var \Testing\PingReceive\Domain\Repository\OrderRepository
     * @inject
     */
    protected $orderRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $orders = $this->orderRepository->findAll();
        $this->view->assign('orders', $orders);
    }

    /**
     * action show
     *
     * @param \Testing\PingReceive\Domain\Model\Order $order
     * @return void
     */
    public function showAction(\Testing\PingReceive\Domain\Model\Order $order)
    {
        $this->view->assign('order', $order);
    }
}
