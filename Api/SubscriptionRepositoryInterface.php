<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Wavesters\Subscription\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface SubscriptionRepositoryInterface
{

    /**
     * Save Subscription
     * @param \Wavesters\Subscription\Api\Data\SubscriptionInterface $subscription
     * @return \Wavesters\Subscription\Api\Data\SubscriptionInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Wavesters\Subscription\Api\Data\SubscriptionInterface $subscription
    );

    /**
     * Retrieve Subscription
     * @param string $subscriptionId
     * @return \Wavesters\Subscription\Api\Data\SubscriptionInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($subscriptionId);

    /**
     * Retrieve Subscription matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Wavesters\Subscription\Api\Data\SubscriptionSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Subscription
     * @param \Wavesters\Subscription\Api\Data\SubscriptionInterface $subscription
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Wavesters\Subscription\Api\Data\SubscriptionInterface $subscription
    );

    /**
     * Delete Subscription by ID
     * @param string $subscriptionId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($subscriptionId);
}

