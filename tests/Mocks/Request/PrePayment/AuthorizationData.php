<?php

namespace ArvPayoneApi\Mocks\Request\PrePayment;

use ArvPayoneApi\Mocks\Request\DataAbstract;
use ArvPayoneApi\Mocks\Request\RequestContract;

/**
 * Class AuthorizationData
 */
class AuthorizationData extends DataAbstract implements RequestContract
{
    /**
     * @return array
     */
    public function getRequestData()
    {
        return [
            'request' => 'authorization', // create account receivable
            'clearingtype' => 'vor', // prepayment
            'reference' => uniqid(), // a unique reference, e.g. order number
            'amount' => 10000, // amount in smallest currency unit, i.e. cents
            'currency' => 'EUR',
        ];
    }
}