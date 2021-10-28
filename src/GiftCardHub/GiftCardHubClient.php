<?php

namespace Vtex\GiftCardHub;

use Vtex\VtexClient;

/**
 * @method array listAllGiftCardProviders(array $args = [])
 * @method array getGiftCardProviderById(array $args = [])
 * @method array createUpdateGiftCardProviderById(array $args = [])
 * @method array deleteGiftCardProviderById(array $args = [])
 * @method array createGiftCardInGiftCardProvider(array $args = [])
 * @method array getGiftCardFromGiftCardProvider(array $args = [])
 * @method array getGiftCardFromGiftCardProviderById(array $args = [])
 * @method array listAllGiftCardTransactions(array $args = [])
 * @method array createGiftCardTransaction(array $args = [])
 * @method array getGiftCardTransactionById(array $args = [])
 * @method array getGiftCardAuthorizationTransaction(array $args = [])
 * @method array listAllGiftCardSettlementTransactions(array $args = [])
 * @method array createGiftCardSettlementTransaction(array $args = [])
 * @method array listAllGiftCardCancellationTransactions(array $args = [])
 * @method array createGiftCardCancellationTransaction(array $args = [])
 */
class GiftCardHubClient extends VtexClient
{

}