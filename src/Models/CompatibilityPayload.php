<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * An array of attribute name/value pairs used to define a specific product. For example: If you wanted to specify a specific car, one of the name/value pairs would be <br><code>"name" : "Year", <br>"value" : "2019"</code>  <p> For a list of the attributes required for cars and trucks and motorcycles see <a href="/api-docs/buy/static/api-browse.html#Check">Check compatibility</a> in the Buy Integration Guide.</p>
 */
class CompatibilityPayload implements EbayModelInterface
{
    use FillsModel;

    /**
     * An array of attribute name/value pairs used to define a specific product. For example: If you wanted to specify a specific car, one of the name/value pairs would be <br><code>"name" : "Year", <br>"value" : "2019"</code>  <p> For a list of the attributes required for cars and trucks and motorcycles see <a href="/api-docs/buy/static/api-browse.html#Check">Check compatibility</a> in the Buy Integration Guide.</p>
     * @var AttributeNameValue[]
     */
    #[Assert\Type('array')]
    public array $compatibilityProperties;
}
