<?php

namespace EbayWsdl;

class PaymentStatusCodeType
{
    const __default = 'NoPaymentFailure';
    const NoPaymentFailure = 'NoPaymentFailure';
    const BuyerECheckBounced = 'BuyerECheckBounced';
    const BuyerCreditCardFailed = 'BuyerCreditCardFailed';
    const BuyerFailedPaymentReportedBySeller = 'BuyerFailedPaymentReportedBySeller';
    const PayPalPaymentInProcess = 'PayPalPaymentInProcess';
    const PaymentInProcess = 'PaymentInProcess';
    const CustomCode = 'CustomCode';


}
