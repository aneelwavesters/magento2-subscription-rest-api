<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Wavesters\Subscription\Model;

class GetSubscriptionManagement implements \Wavesters\Subscription\Api\GetSubscriptionManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function getGetSubscription($param)
    {
        return 'hello api GET return the $param ' . $param;
    }
}

