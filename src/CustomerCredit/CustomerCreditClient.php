<?php

namespace Vtex\CustomerCredit;

use Vtex\VtexClient;

/**
 * @method array searchAllInvoices(array $args = [])
 * @method array retrieveInvoiceById(array $args = [])
 * @method array cancelInvoice(array $args = [])
 * @method array retrieveInvoiceByCreditAccountId(array $args = [])
 * @method array markAnInvoiceAsPaid(array $args = [])
 * @method array changeInvoice(array $args = [])
 * @method array postponeAnInvoice(array $args = [])
 * @method array searchAllAccounts(array $args = [])
 * @method array openAnAccount(array $args = [])
 * @method array retrieveAnAccountById(array $args = [])
 * @method array closeAnAccount(array $args = [])
 * @method array updateEmailAndDescriptionOfAccount(array $args = [])
 * @method array accountStatements(array $args = [])
 * @method array openOrChangeAccount(array $args = [])
 * @method array changeCreditLimitOfAnAccount(array $args = [])
 * @method array decreaseBalanceOfAnAccount(array $args = [])
 * @method array createOrUpdateSettlement(array $args = [])
 * @method array createPreAuthorization(array $args = [])
 * @method array CreatePreAuthorizationUsingId(array $args = [])
 * @method array cancelPreAuthorization(array $args = [])
 * @method array addAnAccountHolder(array $args = [])
 * @method array deleteAnAccountHolder(array $args = [])
 * @method array changeToleranceOfAnAccount(array $args = [])
 * @method array partialOrTotalRefundASettlement(array $args = [])
 * @method array retrieveStoreConfiguration(array $args = [])
 * @method array createOrChangeStoreConfiguration(array $args = [])
 */
class CustomerCreditClient extends VtexClient
{

}