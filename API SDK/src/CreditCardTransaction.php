<?php

class CreditCardTransaction
{
    private $customer;
    private $billing;
    private $shipping;
    private $creditCard;
    private $payment;

    /**
     * Get the value of payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set the value of payment
     *
     * @return  self
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get the value of creditCard
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * Set the value of creditCard
     *
     * @return  self
     */
    public function setCreditCard($creditCard)
    {
        $this->creditCard = $creditCard;

        return $this;
    }

    /**
     * Get the value of shipping
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Set the value of shipping
     *
     * @return  self
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Get the value of billing
     */
    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * Set the value of billing
     *
     * @return  self
     */
    public function setBilling($billing)
    {
        $this->billing = $billing;

        return $this;
    }

    /**
     * Get the value of customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set the value of customer
     *
     * @return  self
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function toJson()
    {
        /// export the variable to find the privates
        $exp = var_export($this, true);
        /// get rid of the __set_state that only works 5.1+
        $exp = preg_replace('/[a-z0-9_]+\:\:__set_state\(/i', '((object)', $exp);
        /// rebuild the object
        eval('$enc = json_encode(array_filter((array) get_object_vars(' . $exp . '), function($val) {
            return !empty($val);
        }));');
        /// return the encoded value
        return $enc;
    }
}
