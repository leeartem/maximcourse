<?php

namespace App\Enums;

enum UserType: string
{
    case ADMIN = 'admin';
    case CUSTOMER = 'customer';
    case MODER = 'moder';
}
