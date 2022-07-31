<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Used()
 * @method static static Active()
 */
final class CouponStatus extends Enum
{
    const Used =   'used';
    const Active =   'active';
}
