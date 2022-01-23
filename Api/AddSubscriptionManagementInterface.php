<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Wavesters\Subscription\Api;

interface AddSubscriptionManagementInterface
{

    /**
     * POST for addSubscription api
     * @param string $param
     * @return string
     */
    public function postAddSubscription($param);
}

