<?php

class Recurring
{
    private $startDate;
    private $period;
    private $frequency;
    private $installments;
    private $firstAmount;
    private $failureThreshold;

    /**
     * Get the value of startDate
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set the value of startDate
     *
     * @return  self
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get the value of period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set the value of period
     *
     * @return  self
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get the value of frequency
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Set the value of frequency
     *
     * @return  self
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Get the value of installments
     */
    public function getInstallments()
    {
        return $this->installments;
    }

    /**
     * Set the value of installments
     *
     * @return  self
     */
    public function setInstallments($installments)
    {
        $this->installments = $installments;

        return $this;
    }

    /**
     * Get the value of firstAmount
     */
    public function getFirstAmount()
    {
        return $this->firstAmount;
    }

    /**
     * Set the value of firstAmount
     *
     * @return  self
     */
    public function setFirstAmount($firstAmount)
    {
        $this->firstAmount = $firstAmount;

        return $this;
    }

    /**
     * Get the value of failureThreshold
     */
    public function getFailureThreshold()
    {
        return $this->failureThreshold;
    }

    /**
     * Set the value of failureThreshold
     *
     * @return  self
     */
    public function setFailureThreshold($failureThreshold)
    {
        $this->failureThreshold = $failureThreshold;

        return $this;
    }

    public function toJson()
    {
        return json_encode(array_filter((array) get_object_vars($this), function($val) {
            return !empty($val);
        }));
    }
}
