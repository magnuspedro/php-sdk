<?php

class BankSlip
{
    private $expirationDate;
    private $instructions;

    /**
     * Get the value of expirationDate
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set the value of expirationDate
     *
     * @return  self
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get the value of instructions
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Set the value of instructions
     *
     * @return  self
     */
    public function setInstructions($instructions)
    {
        $this->instructions = $instructions;

        return $this;
    }

    public function toJson()
    {
        return json_encode(array_filter((array) get_object_vars($this), function($val) {
            return !empty($val);
        }));
    }
}
