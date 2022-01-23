<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Wavesters\Subscription\Model;

use Magento\Framework\Model\AbstractModel;
use Wavesters\Subscription\Api\Data\SubscriptionInterface;

class Subscription extends AbstractModel implements SubscriptionInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Wavesters\Subscription\Model\ResourceModel\Subscription::class);
    }

    /**
     * @inheritDoc
     */
    public function getSubscriptionId()
    {
        return $this->getData(self::SUBSCRIPTION_ID);
    }

    /**
     * @inheritDoc
     */
    public function setSubscriptionId($subscriptionId)
    {
        return $this->setData(self::SUBSCRIPTION_ID, $subscriptionId);
    }

    /**
     * @inheritDoc
     */
    public function getMembershipPlanId()
    {
        return $this->getData(self::MEMBERSHIP_PLAN_ID);
    }

    /**
     * @inheritDoc
     */
    public function setMembershipPlanId($membershipPlanId)
    {
        return $this->setData(self::MEMBERSHIP_PLAN_ID, $membershipPlanId);
    }

    /**
     * @inheritDoc
     */
    public function getUserId()
    {
        return $this->getData(self::USER_ID);
    }

    /**
     * @inheritDoc
     */
    public function setUserId($userId)
    {
        return $this->setData(self::USER_ID, $userId);
    }

    /**
     * @inheritDoc
     */
    public function getAmount()
    {
        return $this->getData(self::AMOUNT);
    }

    /**
     * @inheritDoc
     */
    public function setAmount($amount)
    {
        return $this->setData(self::AMOUNT, $amount);
    }

    /**
     * @inheritDoc
     */
    public function getTransactionId()
    {
        return $this->getData(self::TRANSACTION_ID);
    }

    /**
     * @inheritDoc
     */
    public function setTransactionId($transactionId)
    {
        return $this->setData(self::TRANSACTION_ID, $transactionId);
    }

    /**
     * @inheritDoc
     */
    public function getCurrencyType()
    {
        return $this->getData(self::CURRENCY_TYPE);
    }

    /**
     * @inheritDoc
     */
    public function setCurrencyType($currencyType)
    {
        return $this->setData(self::CURRENCY_TYPE, $currencyType);
    }

    /**
     * @inheritDoc
     */
    public function getFirstName()
    {
        return $this->getData(self::FIRST_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setFirstName($firstName)
    {
        return $this->setData(self::FIRST_NAME, $firstName);
    }

    /**
     * @inheritDoc
     */
    public function getLastName()
    {
        return $this->getData(self::LAST_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setLastName($lastName)
    {
        return $this->setData(self::LAST_NAME, $lastName);
    }

    /**
     * @inheritDoc
     */
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * @inheritDoc
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * @inheritDoc
     */
    public function getSubscriptionType()
    {
        return $this->getData(self::SUBSCRIPTION_TYPE);
    }

    /**
     * @inheritDoc
     */
    public function setSubscriptionType($subscriptionType)
    {
        return $this->setData(self::SUBSCRIPTION_TYPE, $subscriptionType);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedDate()
    {
        return $this->getData(self::CREATED_DATE);
    }

    /**
     * @inheritDoc
     */
    public function setCreatedDate($createdDate)
    {
        return $this->setData(self::CREATED_DATE, $createdDate);
    }

    /**
     * @inheritDoc
     */
    public function getUpdatedDate()
    {
        return $this->getData(self::UPDATED_DATE);
    }

    /**
     * @inheritDoc
     */
    public function setUpdatedDate($updatedDate)
    {
        return $this->setData(self::UPDATED_DATE, $updatedDate);
    }

    /**
     * @inheritDoc
     */
    public function getIsActive()
    {
        return $this->getData(self::IS_ACTIVE);
    }

    /**
     * @inheritDoc
     */
    public function setIsActive($isActive)
    {
        return $this->setData(self::IS_ACTIVE, $isActive);
    }
}

