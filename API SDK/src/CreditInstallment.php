<?php

class CreditInstallment
{
    private $numberOfInstallments;
    private $chargeInterest;

    /**
     * Get the value of numberOfInstallments
     */
    public function getNumberOfInstallments()
    {
        return $this->numberOfInstallments;
    }

    /**
     * Set the value of numberOfInstallments
     *
     * @return  self
     */
    public function setNumberOfInstallments($numberOfInstallments)
    {
        $this->numberOfInstallments = $numberOfInstallments;

        return $this;
    }

    /**
     * Get the value of chargeInterest
     */
    public function getChargeInterest()
    {
        return $this->chargeInterest;
    }

    /**
     * Set the value of chargeInterest
     *
     * @return  self
     */
    public function setChargeInterest($chargeInterest)
    {
        $this->chargeInterest = $chargeInterest;

        return $this;
    }

    public function toJson()
    {
        return json_encode(array_filter((array) get_object_vars($this), function ($val) {
            return !empty($val);
        }));
    }
}
