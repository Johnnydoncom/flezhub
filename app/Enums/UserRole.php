<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserRole extends Enum
{
    const SUPERADMIN = 'Super Admin';
    const ADMIN     = 'Admin';
    const SHOPMANAGER = 'Shop Manager';
    const CUSTOMER  = 'Customer';
}
