<?php
namespace SecurionPay\Request;

class SubscriptionUpdateRequest extends AbstractRequest
{

    public function getSubscriptionId()
    {
        return $this->get('subscriptionId');
    }

    public function subscriptionId($subscriptionId)
    {
        return $this->set('subscriptionId', $subscriptionId);
    }

    public function getCustomerId()
    {
        return $this->get('customerId');
    }

    public function customerId($customerId)
    {
        return $this->set('customerId', $customerId);
    }

    public function getPlanId()
    {
        return $this->get('planId');
    }

    public function planId($planId)
    {
        return $this->set('planId', $planId);
    }

    /**
     * @return \SecurionPay\Request\CardRequest
     */
    public function getCard()
    {
        return $this->getObject('card', '\SecurionPay\Request\CardRequest');
    }

    public function card($card)
    {
        return $this->set('card', $card);
    }

    public function getQuantity()
    {
        return $this->get('quantity');
    }

    public function quantity($quantity)
    {
        return $this->set('quantity', $quantity);
    }

    public function getCaptureCharges()
    {
        return $this->get('captureCharges');
    }
    
    public function captureCharges($captureCharges)
    {
        return $this->set('captureCharges', $captureCharges);
    }

    public function getTrialEnd()
    {
        return $this->get('trialEnd');
    }

    public function trialEnd($trialEnd)
    {
        return $this->set('trialEnd', $trialEnd);
    }

    public function getMetadata()
    {
        return $this->get('metadata');
    }

    public function metadata($metadata)
    {
        return $this->set('metadata', $metadata);
    }
}
