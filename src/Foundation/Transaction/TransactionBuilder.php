<?php
/**
 * User: Placecodex
 * Date: 11/23/2020
 * Time: 1:59 AM
 */

namespace Placecodex\Ethereum\Foundation\Transaction;

//use kornrunner\Ethereum\Transaction as BaseTransaction; // see here
use Web3p\EthereumTx\Transaction as BaseTransaction; // see here

use Placecodex\Ethereum\Foundation\Eth;

class TransactionBuilder
{
    private $nonce;
    private $to;
    private $amount;
    private $gasPrice;
    private $gasLimit;
    private $data;
    /**
     * @var Eth
     */
    private $eth = null;


    public function setEth(Eth $eth)
    {
        $this->eth = $eth;
        return $this;
    }


    public function nonce(string $nonce)
    {
        $this->nonce = $nonce;
        return $this;
    }

    public function to(string $to)
    {
        $this->to = $to;
        return $this;
    }

    public function amount(string $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function gasPrice(string $gasPrice)
    {
        $this->gasPrice = $gasPrice;
        return $this;
    }

    public function gasLimit(string $gasLimit)
    {
        $this->gasLimit = $gasLimit;
        return $this;
    }

    public function data(string $data)
    {
        $this->data = $data;
        return $this;
    }

    public function _build()
    {
        return new Transaction(
               new BaseTransaction(

             $this->nonce,
             $this->gasPrice,
             $this->gasLimit, 
             $this->to, 
             $this->amount,
             $this->data
           )
               ,$this->eth);
    }

     public function build()
    {
        return new Transaction(
               new BaseTransaction(

             $this->nonce,
             '0x0',
             $this->to,
             $this->gasLimit,
             $this->gasPrice,
             $this->amount,
             $this->data     

           )
               ,$this->eth);
    }
}
