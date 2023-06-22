<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The container that defines the fields for the buying options refinements. This container is returned when <b> fieldgroups</b> is set to <code>BUYING_OPTION_REFINEMENTS</code> or <code>FULL</code> in the request.
 */
class BuyingOptionDistribution implements EbayModelInterface
{
    use FillsModel;

    /** The container that returns the buying option type. This will be AUCTION, FIXED_PRICE, CLASSIFIED_AD, or a combination of these options. For details, see <a href="/api-docs/buy/browse/resources/item_summary/methods/search#response.itemSummaries.buyingOptions">buyingOptions</a>. */
    #[Assert\Type('string')]
    public string $buyingOption;

    /** The number of items having this buying option. */
    #[Assert\Type('int')]
    public int $matchCount;

    /** The HATEOAS reference for this buying option. */
    #[Assert\Type('string')]
    public string $refinementHref;
}
