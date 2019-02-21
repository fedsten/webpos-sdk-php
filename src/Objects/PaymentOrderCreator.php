<?php

namespace Chainside\SDK\WebPos\Objects;

use SDK\Boilerplate\SdkObject;
use ElevenLab\Validation\Spec;

/**
 * PaymentOrderCreator Object
 *
 * Data of payment order's creator
 *
 * @property string $uuid Payment order creator's uuid
 * @property DepositAccountLite $deposit_account Deposit account associated to the payment order's creator
 * @property string $type Payment order creator's type
 * @property string $name Payment order creator's name
 *
 */
class PaymentOrderCreator extends SdkObject
{

    protected $subObjects = [
            "deposit_account" => DepositAccountLite::class,
            ];

    public static function schema()
    {
        return Spec::fromJson('{"schema": {"uuid": {"rules": ["required"], "type": "uuid"}, "deposit_account": {"schema": {"uuid": {"rules": ["required"], "type": "uuid"}, "name": {"rules": ["required"], "type": "string"}, "type": {"rules": ["in:bank,bitcoin", "required"], "type": "string"}}, "rules": ["required"], "type": "object"}, "type": {"rules": ["required", "in:web"], "type": "string"}, "name": {"rules": ["required"], "type": "string"}}, "rules": [], "type": "object"}');
    }

}