<?php

namespace Vtex\Marketplace;

use Vtex\VtexClient;

/**
 * @method array notifyMarketplaceOfPriceUpdate(array $args = [])
 * @method array notifyMarketplaceOfInventoryUpdate(array $args = [])
 * @method array getAutoApproveStatusInAccountSettings(array $args = [])
 * @method array activateAutoApproveInMarketplacesAccount(array $args = [])
 * @method array getAccountsApprovalSettings(array $args = [])
 * @method array saveAccountsApprovalSettings(array $args = [])
 * @method array getSellersApprovalSettings(array $args = [])
 * @method array saveSellersApprovalSettings(array $args = [])
 * @method array activateAutoApproveSettingForASeller(array $args = [])
 * @method array getAllSkuSuggestions(array $args = [])
 * @method array sendSkuSuggestion(array $args = [])
 * @method array getSkuSuggestionById(array $args = [])
 * @method array deleteSkuSuggestion(array $args = [])
 * @method array getAllVersions(array $args = [])
 * @method array getVersionById(array $args = [])
 * @method array matchReceivedSkusIndividually(array $args = [])
 * @method array matchMultipleReceivedSkus(array $args = [])
 * @method array getSkusReviewInformation(array $args = [])
 * @method array requestSkuReviewFromSeller(array $args = [])
 * @method array getMatchedOffersDataBySkuId(array $args = [])
 * @method array getMatchedOffersDataByProductId(array $args = [])
 * @method array inviteSellerLead(array $args = [])
 * @method array listSellerLeads(array $args = [])
 * @method array acceptSellerLead(array $args = [])
 * @method array getSellerLeadsDataById(array $args = [])
 * @method array deleteSellerLead(array $args = [])
 * @method array createSellerFromLead(array $args = [])
 * @method array resendSellerLeadInvite(array $args = [])
 * @method array upsertSellerCommissionsInBulk(array $args = [])
 * @method array listSellerCommissionsBySellerId(array $args = [])
 * @method array upsertSellerCommissionsByCategoryId(array $args = [])
 * @method array removeSellerCommissionsByCategoryId(array $args = [])
 * @method array getSellerCommissionsByCategoryId(array $args = [])
 * @method array configureSellerAccount(array $args = [])
 * @method array listSellers(array $args = [])
 * @method array updateSellerBySellerId(array $args = [])
 * @method array getSellerDataById(array $args = [])
 */
class MarketplaceClient extends VtexClient
{

}