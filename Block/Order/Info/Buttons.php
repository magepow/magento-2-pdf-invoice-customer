<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Block of links in Order view page
 */
namespace Magepow\PdfInvoiceFrontend\Block\Order\Info;

/**
 * @api
 * @since 100.0.2
 */
class Buttons extends \Magento\Sales\Block\Order\Info\Buttons
{
    /**
     * @var string
     */
    protected $_template = 'Magepow_PdfInvoiceFrontend::order/info/buttons.phtml';

    
}
