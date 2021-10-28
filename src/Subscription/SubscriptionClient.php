<?php

namespace Vtex\Subscription;

use Vtex\VtexClient;

/**
 * @method array getCycleDetails(array $args = [])
 * @method array listCycles(array $args = [])
 * @method array retryCycle(array $args = [])
 * @method array listPlans(array $args = [])
 * @method array getPlanDetails(array $args = [])
 * @method array listReportTemplates(array $args = [])
 * @method array getReportDocumentDetails(array $args = [])
 * @method array generateReport(array $args = [])
 * @method array getSubscriptionDetails(array $args = [])
 * @method array updateSubscription(array $args = [])
 * @method array listSubscriptions(array $args = [])
 * @method array createSubscription(array $args = [])
 * @method array removeItemFromSubscription(array $args = [])
 * @method array editItemOnSubscription(array $args = [])
 * @method array addItemToSubscription(array $args = [])
 * @method array calculateTheCurrentPricesForASpecificSubscription(array $args = [])
 * @method array calculateTheCurrentPricesForTheProvidedSubscriptionTemplate(array $args = [])
 */
class SubscriptionClient extends VtexClient
{

}