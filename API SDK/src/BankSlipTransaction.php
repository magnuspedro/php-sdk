<?php
    class BankSlipTransaction {
        private $customer;
        private $billing;
        private $bankSlip;
        private $payment;

        public function getCustomer () {
            return $this->customer;
        }

        public function setCustomer ($customer) {
            $this->customer = $customer;
            return $this;
        }

        public function getBilling () {
            return $this->billing;
        }

        public function setBilling ($billing) {
            $this->billing = $billing;
            return $this;
        }

        public function getBankSlip () {
            return $this->bankSlip;
        }

        public function setBankSlip ($bankSlip) {
            $this->bankSlip = $bankSlip;
        }

        public function getPayment() {
            return $this->payment;
        }
    
        public function setPayment ($payment) {
            $this->payment = $payment;
            return $this;
        }
    
        public function toJson(){
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
?>