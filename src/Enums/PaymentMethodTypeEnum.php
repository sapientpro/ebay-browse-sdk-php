<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum PaymentMethodTypeEnum: string
{
    /**
     * This enumeration value indicates that the payment can be processed via credit card, using the brand(s) specified in the corresponding paymentMethodBrands array.
     */
    case CREDIT_CARD = 'CREDIT_CARD';

    /**
     * This enumeration value indicates that the payment can be processed via wallet, using the brand(s) specified in the corresponding paymentMethodBrands array.
     */
    case WALLET = 'WALLET';

    /**
     * This enumeration value indicates that the payment can be processed via debit card, using the brand(s) specified in the corresponding paymentMethodBrands array.
     */
    case DEBIT_CARD = 'DEBIT_CARD';

    /**
     * This enumeration value indicates that the payment can be processed via PayPal credit.
     */
    case CREDIT = 'CREDIT';

    /**
     * This enumeration value indicates that the payment can be processed through bank transfer, using the method(s) specified in the corresponding paymentInstructions array.
     */
    case BANK = 'BANK';

    /**
     * This enumeration value indicates that the payment can be made via cash transaction, using the method(s) specified in the corresponding paymentInstructions array.
     */
    case CASH = 'CASH';

    /**
     * This enumeration value indicates that no payment methods have been specified. Contact the seller for more information or see the SellerInstructionEnum response for details.
     */
    case OTHER = 'OTHER';

    /**
     * This enumeration value indicates that the payment can be processed via check.
     */
    case CHECK = 'CHECK';

    /**
     * This enumeration value indicates that the payment can be processed via money order.
     */
    case MONEY_ORDER = 'MONEY_ORDER';

    /**
     * This enumeration value indicates that the payment can be processed via wire-transfer.
     */
    case WIRE_TRANSFER = 'WIRE_TRANSFER';

    /**
     * This enumeration value indicates that the payment will be processed upon invoice, as specified in the paymentInstructions array.
     */
    case DEFERRED = 'DEFERRED';
}
