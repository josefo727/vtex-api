<?php

namespace Vtex\Price;

use Vtex\VtexClient;

/**
 * @method array createRulesForAPriceTable(array $args = [])
 * @method array getPrice(array $args = [])
 * @method array deletePrice(array $args = [])
 * @method array createOrUpdateBaseOrFixedPrices(array $args = [])
 * @method array getFixedPrices(array $args = [])
 * @method array createOrUpdateFixedPricesOnAPriceTableOrTradePolicy(array $args = [])
 * @method array getFixedPricesOnAPriceTable(array $args = [])
 * @method array deleteFixedPricesOnAPriceTableOrTradePolicy(array $args = [])
 * @method array getComputedPriceByPriceTable(array $args = [])
 * @method array getPricingConfig(array $args = [])
 * @method array getsPricingVActiveStatus(array $args = [])
 * @method array getRulesForAPriceTable(array $args = [])
 * @method array updateRulesForAPriceTable(array $args = [])
 */
class PriceClient extends VtexClient { }