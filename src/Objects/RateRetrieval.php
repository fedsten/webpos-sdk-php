<?php

namespace Chainside\SDK\WebPos\Objects;

use SDK\Boilerplate\SdkObject;
use ElevenLab\Validation\Spec;

/**
 * RateRetrieval Object
 *
 * Rate Data
 *
 * @property string $value Value of the rate
 * @property string $source Exchange providing the rate
 * @property string $created_at Creation's date of the rate
 *
 */
class RateRetrieval extends SdkObject
{

    protected $subObjects = [
            ];

    public static function schema()
    {
        return Spec::fromJson('{"schema": {"value": {"rules": ["decimal", "required"], "type": "string"}, "source": {"rules": ["required"], "type": "string"}, "created_at": {"rules": ["required"], "type": "ISO_8601_date"}}, "rules": [], "type": "object"}');
    }

}