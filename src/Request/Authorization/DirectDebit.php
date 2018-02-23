<?php

namespace ArvPayoneApi\Request\Authorization;

use ArvPayoneApi\Request\AuthorizationAbstract;
use ArvPayoneApi\Request\ClearingTypes;
use ArvPayoneApi\Request\Parts\Config;
use ArvPayoneApi\Request\Parts\Customer;
use ArvPayoneApi\Request\Parts\SepaMandate;
use ArvPayoneApi\Request\Parts\SystemInfo;
use ArvPayoneApi\Request\RequestDataContract;
use ArvPayoneApi\Request\Types;

/**
 * Class DirectDebit
 */
class DirectDebit extends AuthorizationAbstract implements RequestDataContract
{
    /**
     * @var SepaMandate
     */
    private $sepaMandate;

    /**
     * DirectDebit constructor.
     *
     * @param Config $config
     * @param string $orderId
     * @param int $amount
     * @param string $currency
     * @param Customer $customer
     * @param SystemInfo $info
     * @param SepaMandate $sepaMandate
     */
    public function __construct(
        Config $config,
        $orderId,
        int $amount,
        $currency,
        Customer $customer,
        SystemInfo $info,
        SepaMandate $sepaMandate
    ) {
        parent::__construct(
            $config,
            $customer,
            Types::AUTHORIZATION,
            ClearingTypes::DEBIT_PAYMENT,
            $info,
            $orderId,
            $amount,
            $currency
        );
        $this->sepaMandate = $sepaMandate;
    }

    /**
     * Getter for SepaMandate
     *
     * @return SepaMandate
     */
    public function getSepaMandate()
    {
        return $this->sepaMandate;
    }
}
