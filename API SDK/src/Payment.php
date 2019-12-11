<?php

class Payment
{
    private $chargeTotal;
    private $currencyCode;
    private $creditInstallment;

    /**
     * Get the value of chargeTotal
     */
    public function getChargeTotal()
    {
        return $this->chargeTotal;
    }

    /**
     * Set the value of chargeTotal
     *
     * @return  self
     */
    public function setChargeTotal($chargeTotal)
    {
        $this->chargeTotal = $chargeTotal;

        return $this;
    }

    /**
     * Get the value of currencyCode
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set the value of currencyCode
     *
     * @return  self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get the value of creditInstallment
     */
    public function getCreditInstallment()
    {
        return $this->creditInstallment;
    }

    /**
     * Set the value of creditInstallment
     *
     * @return  self
     */
    public function setCreditInstallment(CreditInstallment $creditInstallment)
    {
        $this->creditInstallment = $creditInstallment;

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
