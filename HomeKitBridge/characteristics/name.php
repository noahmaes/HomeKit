<?php

declare(strict_types=1);

class HAPCharacteristicName extends HAPCharacteristic
{
    public function __construct()
    {
        parent::__construct(
            0x23,
            HAPCharacteristicFormat::String,
            [
                HAPCharacteristicPermission::PairedRead
            ]
        );
    }
}
