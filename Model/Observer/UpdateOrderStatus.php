<?php

/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    BluePay
 * @package     BluePay_CreditCard
 * @copyright   Copyright (c) 2016 BluePay Processing, LLC (http://www.bluepay.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace BluePay\Payment\Model\Observer;

use \Magento\Framework\Event\Observer;
use \Magento\Framework\Event\ObserverInterface;

/**
 * Response object
 */
class UpdateOrderStatus implements ObserverInterface
{

<<<<<<< HEAD
    private $customerRegistry;
=======
    protected $customerRegistry;
>>>>>>> origin/master

    public function __construct(
        \Magento\Customer\Model\CustomerRegistry $customerRegistry
    ) {
        $this->customerRegistry = $customerRegistry;
    }

    public function execute(Observer $observer)
    {
        $order = $observer->getEvent()->getOrder();
        if ($order->getPayment()->getMethodInstance()->getCode() == 'bluepay_payment') {
            $order->setStatus($order->getPayment()->getMethodInstance()->getConfigData('order_status'));
<<<<<<< HEAD
            $order->addStatusHistoryComment('Order status changed to ' .
                $order->getPayment()->getMethodInstance()->getConfigData('order_status'), false);
=======
            $order->addStatusHistoryComment('Order status changed to ' . $order->getPayment()->getMethodInstance()->getConfigData('order_status'), false);
>>>>>>> origin/master
            $order->save();
        }
    }
}
