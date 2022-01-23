<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Wavesters\Subscription\Api\Data;

interface SubscriptionInterface
{

    const AMOUNT = 'amount';
    const FIRST_NAME = 'first_name';
    const SUBSCRIPTION_TYPE = 'subscription_type';
    const EMAIL = 'email';
    const LAST_NAME = 'last_name';
    const SUBSCRIPTION_ID = 'subscription_id';
    const TRANSACTION_ID = 'transaction_id';
    const CURRENCY_TYPE = 'currency_type';
    const UPDATED_DATE = 'updated_date';
    const USER_ID = 'user_id';
    const CREATED_DATE = 'created_date';
    const MEMBERSHIP_PLAN_ID = 'membership_plan_id';
    const IS_ACTIVE = 'is_active';

    /**
     * Get subscription_id
     * @return string|null
     */
    public function getSubscriptionId();

    /**
     * Set subscription_id
     * @param string $subscriptionId
     * @return \Wavesters\Subscription\Subscription\Api\Data\SubscriptionInterface
     */
    public function setSubscriptionId($subscriptionId);

    /**
     * Get membership_plan_id
     * @return string|null
     */
    public function getMembershipPlanId();

    /**
     * Set membership_plan_id
     * @param string $membershipPlanId
     * @return \Wavesters\Subscription\Subscription\Api\Data\SubscriptionInterface
     */
    public function setMembershipPlanId($membershipPlanId);

    /**
     * Get user_id
     * @return string|null
     */
    public function getUserId();

    /**
     * Set user_id
     * @param string $userId
     * @return \Wavesters\Subscription\Subscription\Api\Data\SubscriptionInterface
     */
    public function setUserId($userId);

    /**
     * Get amount
     * @return string|null
     */
    public function getAmount();

    /**
     * Set amount
     * @param string $amount
     * @return \Wavesters\Subscription\Subscription\Api\Data\SubscriptionInterface
     */
    public function setAmount($amount);

    /**
     * Get transaction_id
     * @return string|null
     */
    public function getTransactionId();

    /**
     * Set transaction_id
     * @param string $transactionId
     * @return \Wavesters\Subscription\Subscription\Api\Data\SubscriptionInterface
     */
    public function setTransactionId($transactionId);

    /**
     * Get currency_type
     * @return string|null
     */
    public function getCurrencyType();

    /**
     * Set currency_type
     * @param string $currencyType
     * @return \Wavesters\Subscription\Subscription\Api\Data\SubscriptionInterface
     */
    public function setCurrencyType($currencyType);

    /**
     * Get first_name
     * @return string|null
     */
    public function getFirstName();

    /**
     * Set first_name
     * @param string $firstName
     * @return \Wavesters\Subscription\Subscription\Api\Data\SubscriptionInterface
     */
    public function setFirstName($firstName);

    /**
     * Get last_name
     * @return string|null
     */
    public function getLastName();

    /**
     * Set last_name
     * @param string $lastName
     * @return \Wavesters\Subscription\Subscription\Api\Data\SubscriptionInterface
     */
    public function setLastName($lastName);

    /**
     * Get email
     * @return string|null
     */
    public function getEmail();

    /**
     * Set email
     * @param string $email
     * @return \Wavesters\Subscription\Subscription\Api\Data\SubscriptionInterface
     */
    public function setEmail($email);

    /**
     * Get subscription_type
     * @return string|null
     */
    public function getSubscriptionType();

    /**
     * Set subscription_type
     * @param string $subscriptionType
     * @return \Wavesters\Subscription\Subscription\Api\Data\SubscriptionInterface
     */
    public function setSubscriptionType($subscriptionType);

    /**
     * Get created_date
     * @return string|null
     */
    public function getCreatedDate();

    /**
     * Set created_date
     * @param string $createdDate
     * @return \Wavesters\Subscription\Subscription\Api\Data\SubscriptionInterface
     */
    public function setCreatedDate($createdDate);

    /**
     * Get updated_date
     * @return string|null
     */
    public function getUpdatedDate();

    /**
     * Set updated_date
     * @param string $updatedDate
     * @return \Wavesters\Subscription\Subscription\Api\Data\SubscriptionInterface
     */
    public function setUpdatedDate($updatedDate);

    /**
     * Get is_active
     * @return string|null
     */
    public function getIsActive();

    /**
     * Set is_active
     * @param string $isActive
     * @return \Wavesters\Subscription\Subscription\Api\Data\SubscriptionInterface
     */
    public function setIsActive($isActive);
}

