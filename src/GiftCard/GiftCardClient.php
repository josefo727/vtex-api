<?php

namespace Vtex\GiftCard;

use Vtex\VtexClient;

/**
 * @method array createGiftCard(array $args = [])
 * @method array getGiftCardById(array $args = [])
 * @method array getGiftCardUsingJSON(array $args = [])
 * @method array getGiftCardTransactions(array $args = [])
 * @method array createGiftCardTransaction(array $args = [])
 * @method array getGiftCardTransactionById(array $args = [])
 * @method array getTransactionAuthorizations(array $args = [])
 * @method array getTransactionCancellations(array $args = [])
 * @method array cancelGiftCardTransaction(array $args = [])
 * @method array getTransactionSettlements(array $args = [])
 * @method array settleGiftCardTransaction(array $args = [])
 */
class GiftCardClient extends VtexClient
{

}