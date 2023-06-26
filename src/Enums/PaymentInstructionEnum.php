<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum PaymentInstructionEnum: string
{
    /**
     * This enumeration value indicates that eBay will use the debit card information input by the buyer to process the payment.
     */
    case DIRECT_DEBIT = 'DIRECT_DEBIT';

    /**
     * This enumeration value indicates that the Payflow ACH Payment Service will be used, which enables eBay to process payments through the ACH network and request credit or debit information from the buyer's checking or savings account.
     */
    case ACH = 'ACH';

    /**
     * This enumeration value indicates that eBay will process the payment via electronic funds transfer.
     */
    case EFT = 'EFT';

    /**
     * This enumeration value indicates that the payment method will be cash, and the transaction will occur in-person.
     */
    case CIP = 'CIP';

    /**
     * This enumeration value indicates that eBay will process the payment via money transfer.
     */
    case MONEY_TRANSFER = 'MONEY_TRANSFER';

    /**
     * This enumeration value indicates that the payment method will be cash, and the transaction will occur in-person.
     */
    case CASH_IN_PERSON = 'CASH_IN_PERSON';

    /**
     * This enumeration value indicates that the payment method will be cash, and the transaction will occur when the buyer picks up the item.
     */
    case CASH_ON_PICKUP = 'CASH_ON_PICKUP';

    /**
     * This enumeration value indicates that the payment method will be cash, and the transaction will occur after the item is delivered to the buyer.
     */
    case CASH_ON_DELIVERY = 'CASH_ON_DELIVERY';

    /**
     * This enumeration value indicates that the buyer should contact the seller for payment instructions.
     */
    case CONTACT_SELLER = 'CONTACT_SELLER';

    /**
     * This enumeration value indicates that eBay will process the payment upon invoice.
     */
    case PAY_UPON_INVOICE = 'PAY_UPON_INVOICE';
}
