<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The type that defines the array of product identifiers associated with the item. This container is returned if the seller has associated the eBay Product Identifier (ePID) with the item and in the request <b> fieldgroups</b> is set to <code>PRODUCT</code>.
 */
class AdditionalProductIdentity implements EbayModelInterface
{
    use FillsModel;

    /**
     * An array of the product identifier/value pairs for the product associated with the item. This is returned if the seller has associated the eBay Product Identifier (ePID) with the item and the request has <b> fieldgroups</b> set to <code>PRODUCT</code>. <br><br>The following table shows what is returned, based on the item information provided by the seller, when the <b> fieldgroups</b> set to <code>PRODUCT</code>.        <br><br><div style="overflow-x:auto;"> <table border=1> <tr> <th> ePID Provided </th>  <th> Product&nbsp;ID(s) Provided</th> <th> Response</th> </tr> <tr> <td> No </td>  <td> No </td> <td> The <b> AdditionalProductIdentity</b> container is <i> not</i> returned.</td></tr>   <tr> <td> No </td>  <td> Yes </td>  <td> The <b> AdditionalProductIdentity</b> container is <i> not</i> returned but the product identifiers specified by the seller are returned in the <b> localizedAspects</b> container. </td>  </tr>   <tr> <td> Yes </td>  <td> No </td> <td>  The <b> AdditionalProductIdentity</b> container is returned listing the product identifiers of the product.</td></tr>   <tr> <td> Yes </td>  <td> Yes </td> <td> The <b> AdditionalProductIdentity</b> container is returned listing all the product identifiers of the product and the product identifiers specified by the seller are returned in the <b> localizedAspects</b> container.</td> </tr>   </table> </div>
     * @var ProductIdentity[]|null
     */
    #[Assert\Type('array')]
    public ?array $productIdentity;
}
