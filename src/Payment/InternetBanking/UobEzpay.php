<?php

namespace Kasir\Kasir\Payment\InternetBanking;

use Kasir\Kasir\Contracts\PaymentMethod;
use Kasir\Kasir\Payment\PaymentObject;

class UobEzpay extends PaymentObject implements PaymentMethod
{
    /**
     * Create UOB EZPay payment object.
     *
     * @return static
     *
     * @see https://api-docs.midtrans.com/#uob-ezpay
     */
    public static function make(): static
    {
        $type = 'uob_ezpay';

        return app(static::class)
            ->type($type);
    }
}
