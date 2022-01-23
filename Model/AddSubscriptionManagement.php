<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Wavesters\Subscription\Model;

class AddSubscriptionManagement implements \Wavesters\Subscription\Api\AddSubscriptionManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function postAddSubscription($param)
    {
        return 'hello api POST return the $param ' . $param;
    }
}

