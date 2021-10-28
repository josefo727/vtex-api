<?php

namespace Vtex\MarketplaceProtocol;

use Vtex\VtexClient;

/**
 * @method array fulfillmentSimulation(array $args = [])
 * @method array orderPlacement(array $args = [])
 * @method array authorizeFulfillment(array $args = [])
 * @method array marketplaceOrderCancellation(array $args = [])
 * @method array sendInvoice(array $args = [])
 * @method array sendTrackingInformation(array $args = [])
 * @method array updateTrackingStatus(array $args = [])
 * @method array cancelOrderInMarketplace(array $args = [])
 * @method array vTEXMapperRegistration(array $args = [])
 * @method array sendCategoryMappingToVTEXMapper(array $args = [])
 * @method array placeFulfillmentOrder(array $args = [])
 * @method array authorizeDispatchForFulfillmentOrder(array $args = [])
 */
class MarketplaceProtocolClient extends VtexClient
{

}