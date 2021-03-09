<?php
/*
 * Author:           I.A John <ifeoluwa.adewunmi94@gmail.com>
 * Copyright:        (c) 2020, Ifeoluwa-Adewunmi John | All Rights Reserved.
 */


class Transfer
{

    private $_userAmount, $_transferCharges, $_transferAmount, $_debitAmount, $_transferStatus;

    public function __construct($amount)
    {
        $this->execute($amount);
    }

    /**
     * Return the charges & result in XML format.
     */
    public function xmlOutput()
    {
        header('Content-Type:text/xml'); // Set the XML header

        /*
         * Thanks htmlspecialchars(), I make the charges text safe for XML syntax */
        return
            '<output>
                <amount>' . $this->_userAmount . '</amount>
                <transfer>' . $this->_transferAmount . '</transfer>
                <charges>' . $this->_transferCharges . '</charges>
                <debit>' . $this->_debitAmount . '</debit>
                <status>' . htmlspecialchars($this->_transferStatus) . '</status>
            </output>';
    }

    public function amount()
    {
        return $this->_userAmount;
    }

    public function transfer()
    {
        return $this->_transferAmount;
    }

    public function charges()
    {
        return $this->_transferCharges;
    }

    public function debit()
    {
        return $this->_debitAmount;
    }

    public function status()
    {
        return $this->_transferStatus;
    }

    

    public function execute($amount)
    {

        // Get the contents of the JSON file 
        $configJson  = file_get_contents("config.json");

        // Convert to array 
        $config = json_decode($configJson, true);

        foreach ($config['fees'] as $i=>$value) {
            if (($value['minAmount'] <= $amount) && ($amount <= $value['maxAmount'])) {
                $this->_userAmount = $amount;
                $this->_transferAmount = $this->_userAmount - $value['feeAmount'];
                $this->_transferCharges = $value['feeAmount'];
                $this->_debitAmount = $this->_transferAmount + $this->_transferCharges;
                $this->_transferStatus = "Pending Transfer!";

                return;
            } else {
                $this->_userAmount = $amount;
                $this->_transferAmount = null;
                $this->_transferCharges = null;
                $this->_debitAmount = null;
                $this->_transferStatus =  $amount . " is too large, please try an lesser amount.";

            }

        }
        
        // throw new InvalidArgumentException(sprintf('"%s" is an invalid amount.', str_replace('_', '', $amount)));
        
    }

}
