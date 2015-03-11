<?php

namespace EbayWsdl\Classes;

class PaymentHoldStatusCodeType
{
    const __default = 'PaymentReview';
    const PaymentReview = 'PaymentReview';
    const MerchantHold = 'MerchantHold';
    const Released = 'Released';
    const None = 'None';
    const NewSellerHold = 'NewSellerHold';
    const PaymentHold = 'PaymentHold';
    const ReleasePending = 'ReleasePending';
    const ReleaseConfirmed = 'ReleaseConfirmed';
    const ReleaseFailed = 'ReleaseFailed';
    const CustomCode = 'CustomCode';


}
