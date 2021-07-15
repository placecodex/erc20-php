<?php
/**
 * User: Placecodex
 * Date: 11/23/2020
 * Time: 2:09 AM
 */

namespace Placecodex\Ethereum\Foundation\Transaction;

//use kornrunner\Ethereum\Transaction as BaseTransaction;
use Placecodex\Ethereum\Foundation\Eth;
use Web3p\EthereumTx\Transaction as BaseTransaction;

class Transaction
{
    private $transaction;
    private $eth;

    public function __construct(BaseTransaction $transaction, Eth $eth = null)
    {
        $this->transaction = $transaction;
        $this->eth         = $eth;
    }

    public function sign($privateKey)
    {
        $privateKey = str_replace('0x', '', $privateKey);
        return new SignedTransaction('0x' . $this->transaction->sign($privateKey), $this->eth);
    }
}
