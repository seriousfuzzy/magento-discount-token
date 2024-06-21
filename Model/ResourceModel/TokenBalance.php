<?php
/**
 * Copyright © Ihor Oleksiienko (https://github.com/torys877)
 * See LICENSE for license details.
 */
declare(strict_types=1);

namespace Crypto\MagentoToken\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class TokenBalance extends AbstractDb
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'cryptom2_token_balance_resource_model';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('cryptom2_token_balance', 'token_balance_id');
        $this->_useIsObjectNew = true;
    }
}
