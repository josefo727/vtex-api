<?php

namespace Vtex\PaymentGateway;

use Vtex\VtexClient;

/**
 * @method array installmentsOptions(array $args = [])
 * @method array affiliations(array $args = [])
 * @method array insertAffiliation(array $args = [])
 * @method array updateAffiliation(array $args = [])
 * @method array affiliationById(array $args = [])
 * @method array rules(array $args = [])
 * @method array insertRule(array $args = [])
 * @method array getRuleById(array $args = [])
 * @method array updateRuleById(array $args = [])
 * @method array deleteRule(array $args = [])
 * @method array availablePaymentMethods(array $args = [])
 * @method array startsANewTransaction(array $args = [])
 * @method array sendPaymentsInformationPublic(array $args = [])
 * @method array sendPaymentsWithSavedCreditCard(array $args = [])
 * @method array sendAdditionalData(array $args = [])
 * @method array doAuthorization(array $args = [])
 * @method array transactionDetails(array $args = [])
 * @method array paymentDetails(array $args = [])
 * @method array transactionSettlementDetails(array $args = [])
 * @method array settleTheTransaction(array $args = [])
 * @method array refundTheTransaction(array $args = [])
 * @method array cancelTheTransaction(array $args = [])
 */
class PaymentGatewayClient extends VtexClient
{

}