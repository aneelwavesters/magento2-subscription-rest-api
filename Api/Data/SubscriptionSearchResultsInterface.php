<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Wavesters\Subscription\Api\Data;

interface SubscriptionSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Subscription list.
     * @return \Wavesters\Subscription\Api\Data\SubscriptionInterface[]
     */
    public function getItems();

    /**
     * Set membership_plan_id list.
     * @param \Wavesters\Subscription\Api\Data\SubscriptionInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

