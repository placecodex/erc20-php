<?php
/**
 * User: Placecodex
 * Date: 11/26/2020
 * Time: 5:03 AM
 */

namespace Placecodex\Ethereum\Foundation\Contracts;


use Placecodex\Ethereum\Foundation\ERC20;

interface EventLogBuilderInterface
{
    public function build(\stdClass $log): array;

    public function setContract(ERC20 $contract);
}
