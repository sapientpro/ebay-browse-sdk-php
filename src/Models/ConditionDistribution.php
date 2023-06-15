<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * The container that defines the fields for the conditions refinements. This container is returned when <b> fieldgroups</b> is set to <code>CONDITION_REFINEMENTS</code> or <code>FULL</code> in the request.
 */
class ConditionDistribution implements EbayModelInterface
{
    use FillsModel;

    /** The text describing the condition of the item, such as New or Used. For a list of condition names, see <a href="/devzone/finding/callref/enums/conditionIdList.html " target="_blank">Item Condition IDs and Names</a>.  <br><br>Code so that your app gracefully handles any future changes to this list. */
    public ?string $condition;

    /** The identifier of the condition. For example, 1000 is the identifier for NEW. */
    public ?string $conditionId;

    /** The number of items having the condition. */
    public int $matchCount;

    /** The HATEOAS reference of this condition. */
    public string $refinementHref;
}
