<?php

namespace EbayWsdl\Classes;

class PaidStatusCodeType
{
    const __default = 'NotPaid';
    const NotPaid = 'NotPaid';
    const BuyerHasNotCompletedCheckout = 'BuyerHasNotCompletedCheckout';
    const PaymentPendingWithPayPal = 'PaymentPendingWithPayPal';
    const PaidWithPayPal = 'PaidWithPayPal';
    const MarkedAsPaid = 'MarkedAsPaid';
    const PaymentPendingWithEscrow = 'PaymentPendingWithEscrow';
    const PaidWithEscrow = 'PaidWithEscrow';
    const EscrowPaymentCancelled = 'EscrowPaymentCancelled';
    const PaymentPendingWithPaisaPay = 'PaymentPendingWithPaisaPay';
    const PaidWithPaisaPay = 'PaidWithPaisaPay';
    const PaymentPending = 'PaymentPending';
    const PaymentPendingWithPaisaPayEscrow = 'PaymentPendingWithPaisaPayEscrow';
    const PaidWithPaisaPayEscrow = 'PaidWithPaisaPayEscrow';
    const PaisaPayNotPaid = 'PaisaPayNotPaid';
    const Refunded = 'Refunded';
    const WaitingForCODPayment = 'WaitingForCODPayment';
    const PaidCOD = 'PaidCOD';
    const CustomCode = 'CustomCode';
    const Paid = 'Paid';


}
