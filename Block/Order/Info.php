<?php
/**
 * Checkout.com Magento 2 Payment module (https://www.checkout.com)
 *
 * Copyright (c) 2017 Checkout.com (https://www.checkout.com)
 * Author: David Fiaty | integration@checkout.com
 *
 * License GNU/GPL V3 https://www.gnu.org/licenses/gpl-3.0.en.html
 */

namespace CheckoutCom\Magento2\Block\Order;

/**
 * Invoice view comments form
 * @obsolete
 */
class Info extends \Magento\Sales\Block\Order\Info
{
    protected function _construct()
    {
        // we override to keep the translation context correct
        $this->setModuleName($this->extractModuleName(\Magento\Sales\Block\Order\Info::class));
        parent::_construct();
     }
}
