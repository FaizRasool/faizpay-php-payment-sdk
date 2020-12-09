<?php
namespace FaizPay\PaymentSDK;

class Errors
{
    public const CODE_1 = [1, 'Invalid Terminal ID - Should be valid UUID4'];
    public const CODE_2 = [2, 'Invalid Terminal Secret - Should be valid UUID4'];
    public const CODE_3 = [3, 'Order ID cannot be empty'];
    public const CODE_4 = [4, 'Amount cannot be empty or less than 0.01'];
    public const CODE_5 = [5, 'Number must be 2 decimal places'];
    public const CODE_6 = [6, 'Order ID cannot be greater than 255 characters'];
    public const CODE_7 = [7, 'Invalid Sort Code'];
    public const CODE_8 = [8, 'Invalid Account Number'];
    public const CODE_9 = [9, 'Provider ID must be set to set sort code and account number'];
    public const CODE_10 = [10, 'Sort Code and account both must be set'];
    public const CODE_11 = [11, 'Invalid email is given'];
    public const CODE_12 = [12, 'First name need to be less than 255'];
    public const CODE_13 = [13, 'Last name need to be less than 255'];
    public const CODE_14 = [14, 'Contact Number need to be less than 255'];
    public const CODE_15 = [15, 'Email need to be less than 255'];
    public const CODE_16 = [16, 'Unable to decode the token - Invalid / Expire token given'];
    public const CODE_17 = [17, 'Token content missing data'];
    public const CODE_18 = [18, 'Token terminal mismatch'];
}