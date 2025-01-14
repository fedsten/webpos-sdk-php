<?php

namespace Chainside\SDK\WebPos\Objects;

use SDK\Boilerplate\SdkObject;
use ElevenLab\Validation\Spec;

/**
 * PaymentResetUrlParams Object
 *
 * 
 *
 * @property string $payment_order_uuid 
 *
 */
class PaymentResetUrlParams extends SdkObject
{

    protected $subObjects = [
            ];

    public static function schema()
    {
        return Spec::fromJson('{"type": "object", "rules": ["nullable"], "schema": {"payment_order_uuid": {"type": "uuid", "rules": ["required"]}}}');
    }

}