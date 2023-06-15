<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum PaymentMethodBrandEnum: string
{
    /**
     * This enumeration value indicates that Visa is an authorized brand for credit or debit card transactions.
     */
    case VISA = 'VISA';

    /**
     * This enumeration value indicates that Mastercard is an authorized brand for credit or debit card transactions.
     */
    case MASTERCARD = 'MASTERCARD';

    /**
     * This enumeration value indicates that Discover is an authorized brand for credit card transactions.
     */
    case DISCOVER = 'DISCOVER';

    /**
     * This enumeration value indicates that American Express is an authorized brand for credit card transactions.
     */
    case AMERICAN_EXPRESS = 'AMERICAN_EXPRESS';

    /**
     * This enumeration value indicates that Carte Bancaire (CB) Nationale is an authorized brand for credit card transactions.
     */
    case CB_NATIONALE = 'CB_NATIONALE';

    /**
     * This enumeration value indicates that Cetelem is an authorized brand for credit card transactions.
     */
    case CETELEM = 'CETELEM';

    /**
     * This enumeration value indicates that Confidis is an authorized brand for credit card transactions.
     */
    case COFIDIS = 'COFIDIS';

    /**
     * This enumeration value indicates that Cofinoga is an authorized brand for credit card transactions.
     */
    case COFINOGA = 'COFINOGA';

    /**
     * This enumeration value indicates that Maestro is an authorized brand for credit card transactions.
     */
    case MAESTRO = 'MAESTRO';

    /**
     * This enumeration value indicates that Switch is an authorized brand for credit card transactions.
     */
    case SWITCH = 'SWITCH';

    /**
     * This enumeration value indicates that Postepay is an authorized brand for credit card transactions.
     */
    case POSTEPAY = 'POSTEPAY';

    /**
     * This enumeration value indicates that Carte Bancaire is an authorized brand for credit card transactions.
     */
    case CB = 'CB';

    /**
     * This enumeration value indicates that Diners Club is an authorized brand for credit card transactions.
     */
    case DINERS_CLUB = 'DINERS_CLUB';

    /**
     * This enumeration value indicates that UnionPay is an authorized brand for credit card transactions.
     */
    case UNION_PAY = 'UNION_PAY';

    /**
     * This enumeration value indicates that PayPal is an authorized brand for credit transactions.
     */
    case PAYPAL_CREDIT = 'PAYPAL_CREDIT';

    /**
     * This enumeration value indicates that PayPal is an authorized brand for Wallet transactions.
     */
    case PAYPAL = 'PAYPAL';

    /**
     * This enumeration value indicates that Google Pay is an authorized brand for Wallet transactions.
     */
    case GOOGLE_PAY = 'GOOGLE_PAY';

    /**
     * This enumeration value indicates that Apple Pay is an authorized brand for Wallet transactions.
     */
    case APPLE_PAY = 'APPLE_PAY';

    /**
     * This enumeration value indicates that Qiwi is an authorized brand for Wallet transactions.
     */
    case QIWI = 'QIWI';
}
