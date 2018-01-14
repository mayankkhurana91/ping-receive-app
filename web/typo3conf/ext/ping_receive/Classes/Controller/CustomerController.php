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
 * CustomerController
 */
class CustomerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * customerRepository
     *
     * @var \Testing\PingReceive\Domain\Repository\CustomerRepository
     * @inject
     */
    protected $customerRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $customers = $this->customerRepository->findAll();
        $this->view->assign('customers', $customers);
    }

    /**
     * action show
     *
     * @param \Testing\PingReceive\Domain\Model\Customer $customer
     * @return void
     */
    public function showAction(\Testing\PingReceive\Domain\Model\Customer $customer)
    {
        $this->view->assign('customer', $customer);
    }
}
