<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum OAuthTokenScopesEnum: string
{
    //Authorization Code Grant Type

    /**
     * View public data from eBay.
     */
    case API_SCOPE = 'https://api.ebay.com/oauth/api_scope';

    /**
     * View your order details.
     */
    case BUY_ORDER_READONLY = 'https://api.ebay.com/oauth/api_scope/buy.order.readonly';

    /**
     * Purchase eBay items off eBay.
     */
    case BUY_GUEST_ORDER = 'https://api.ebay.com/oauth/api_scope/buy.guest.order';

    /**
     * View your eBay marketing activities, such as ad campaigns and listing promotions.
     */
    case SELL_MARKETING_READONLY = 'https://api.ebay.com/oauth/api_scope/sell.marketing.readonly';

    /**
     * View and manage your eBay marketing activities, such as ad campaigns and listing promotions.
     */
    case SELL_MARKETING = 'https://api.ebay.com/oauth/api_scope/sell.marketing';

    /**
     * View your inventory and offers.
     */
    case SELL_INVENTORY_READONLY = 'https://api.ebay.com/oauth/api_scope/sell.inventory.readonly';

    /**
     * View and manage your inventory and offers.
     */
    case SELL_INVENTORY = 'https://api.ebay.com/oauth/api_scope/sell.inventory';

    /**
     * View your account settings.
     */
    case SELL_ACCOUNT_READONLY = 'https://api.ebay.com/oauth/api_scope/sell.account.readonly';

    /**
     * View and manage your account settings.
     */
    case SELL_ACCOUNT = 'https://api.ebay.com/oauth/api_scope/sell.account';

    /**
     * View your order fulfillments.
     */
    case SELL_FULFILLMENT_READONLY = 'https://api.ebay.com/oauth/api_scope/sell.fulfillment.readonly';

    /**
     * View and manage your order fulfillments.
     */
    case SELL_FULFILLMENT = 'https://api.ebay.com/oauth/api_scope/sell.fulfillment';

    /**
     * View your selling analytics data, such as performance reports.
     */
    case SELL_ANALYTICS_READONLY = 'https://api.ebay.com/oauth/api_scope/sell.analytics.readonly';

    /**
     * This scope would allow signed in users read only access to marketplace insights.
     */
    case SELL_MARKETPLACE_INSIGHTS_READONLY = 'https://api.ebay.com/oauth/api_scope/sell.marketplace.insights.readonly';

    /**
     * This scope would allow signed in user to read catalog data.
     */
    case COMMERCE_CATALOG_READONLY = 'https://api.ebay.com/oauth/api_scope/commerce.catalog.readonly';

    /**
     * This scope would allow signed in user to access shopping carts.
     */
    case BUY_SHOPPING_CART = 'https://api.ebay.com/oauth/api_scope/buy.shopping.cart';

    /**
     * View and manage bidding activities for auctions.
     */
    case BUY_OFFER_AUCTION = 'https://api.ebay.com/oauth/api_scope/buy.offer.auction';

    /**
     * View a user's basic information, such as username or business account details, from their eBay member account.
     */
    case COMMERCE_IDENTITY_READONLY = 'https://api.ebay.com/oauth/api_scope/commerce.identity.readonly';

    /**
     * View a user's personal email information from their eBay member account.
     */
    case COMMERCE_IDENTITY_EMAIL_READONLY = 'https://api.ebay.com/oauth/api_scope/commerce.identity.email.readonly';

    /**
     * View a user's personal telephone information from their eBay member account.
     */
    case COMMERCE_IDENTITY_PHONE_READONLY = 'https://api.ebay.com/oauth/api_scope/commerce.identity.phone.readonly';

    /**
     * View a user's personal address information from their eBay member account.
     */
    case COMMERCE_IDENTITY_ADDRESS_READONLY = 'https://api.ebay.com/oauth/api_scope/commerce.identity.address.readonly';

    /**
     * View a user's first and last name from their eBay member account.
     */
    case COMMERCE_IDENTITY_NAME_READONLY = 'https://api.ebay.com/oauth/api_scope/commerce.identity.name.readonly';

    /**
     * View a user's eBay member account status.
     */
    case COMMERCE_IDENTITY_STATUS_READONLY = 'https://api.ebay.com/oauth/api_scope/commerce.identity.status.readonly';

    /**
     * View and manage your payment and order information to display this information to you and allow you to initiate refunds using the third party application.
     */
    case SELL_FINANCES = 'https://api.ebay.com/oauth/api_scope/sell.finances';

    /**
     * View and manage disputes and related details (including payment and order information).
     */
    case SELL_PAYMENT_DISPUTE = 'https://api.ebay.com/oauth/api_scope/sell.payment.dispute';

    /**
     * View and manage your item drafts.
     */
    case SELL_ITEM_DRAFT = 'https://api.ebay.com/oauth/api_scope/sell.item.draft';

    /**
     * View and manage your item information.
     */
    case SELL_ITEM = 'https://api.ebay.com/oauth/api_scope/sell.item';

    /**
     * View and manage your reputation data, such as feedback.
     */
    case SELL_REPUTATION = 'https://api.ebay.com/oauth/api_scope/sell.reputation';

    /**
     * View your reputation data, such as feedback.
     */
    case SELL_REPUTATION_READONLY = 'https://api.ebay.com/oauth/api_scope/sell.reputation.readonly';

    /**
     * View and manage your event notification subscriptions.
     */
    case COMMERCE_NOTIFICATION_SUBSCRIPTION = 'https://api.ebay.com/oauth/api_scope/commerce.notification.subscription';

    /**
     * View your event notification subscriptions.
     */
    case COMMERCE_NOTIFICATION_SUBSCRIPTION_READONLY = 'https://api.ebay.com/oauth/api_scope/commerce.notification.subscription.readonly';

    /**
     * View and manage eBay stores.
     */
    case SELL_STORES = 'https://api.ebay.com/oauth/api_scope/sell.stores';

    /**
     * View eBay stores.
     */
    case SELL_STORES_READONLY = 'https://api.ebay.com/oauth/api_scope/sell.stores.readonly';

    // Client Credential Grant Type
    
    /**
     * View curated feeds of eBay items.
     */
    case BUY_ITEM_FEED = 'https://api.ebay.com/oauth/api_scope/buy.item.feed';
    
    /**
     * Retrieve eBay product and listing data for use in marketing merchandise to buyers.
     */
    case BUY_MARKETING = 'https://api.ebay.com/oauth/api_scope/buy.marketing';
    
    /**
     * This scope would allow applications to access product feeds.
     */
    case BUY_PRODUCT_FEED = 'https://api.ebay.com/oauth/api_scope/buy.product.feed';
    
    /**
     * View historical sales data to help buyers make informed purchasing decisions.
     */
    case BUY_MARKETPLACE_INSIGHTS = 'https://api.ebay.com/oauth/api_scope/buy.marketplace.insights';
    
    /**
     * Purchase eBay items anywhere, using an external vault for PCI compliance.
     */
    case BUY_PROXY_GUEST_ORDER = 'https://api.ebay.com/oauth/api_scope/buy.proxy.guest.order';
    
    /**
     * Retrieve eBay items in bulk.
     */
    case BUY_ITEM_BULK = 'https://api.ebay.com/oauth/api_scope/buy.item.bulk';
    
    /**
     * View eBay sale events and deals.
     */
    case BUY_DEAL = 'https://api.ebay.com/oauth/api_scope/buy.deal';

}
