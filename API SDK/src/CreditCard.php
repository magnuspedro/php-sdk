<?php

class CreditCard
{
    private $cardHolderName;
    private $number;
    private $expDate;
    private $cvvNumber;

    /**
     * Get the value of cardHolderName
     */
    public function getCardHolderName()
    {
        return $this->cardHolderName;
    }

    /**
     * Set the value of cardHolderName
     *
     * @return  self
     */
    public function setCardHolderName($cardHolderName)
    {
        $this->cardHolderName = $cardHolderName;

        return $this;
    }

    /**
     * Get the value of number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of expDate
     */
    public function getExpDate()
    {
        return $this->expDate;
    }

    /**
     * Set the value of expDate
     *
     * @return  self
     */
    public function setExpDate($expDate)
    {
        $this->expDate = $expDate;

        return $this;
    }

    /**
     * Get the value of cvvNumber
     */
    public function getCvvNumber()
    {
        return $this->cvvNumber;
    }

    /**
     * Set the value of cvvNumber
     *
     * @return  self
     */
    public function setCvvNumber($cvvNumber)
    {
        $this->cvvNumber = $cvvNumber;

        return $this;
    }
    
    public function toJson()
    {
        return json_encode(array_filter((array) get_object_vars($this), function($val) {
            return !empty($val);
        }));
    }
}
