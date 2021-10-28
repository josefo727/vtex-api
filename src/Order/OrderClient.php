<?php

namespace Vtex\Order;

use Vtex\VtexClient;

/**
 * @method array getOrder(array $args = [])
 * @method array listOrders(array $args = [])
 * @method array startHandlingOrder(array $args = [])
 * @method array cancelOrder(array $args = [])
 * @method array registerChangeOnOrder(array $args = [])
 * @method array addLogInOrders(array $args = [])
 * @method array listOrderAttachment(array $args = [])
 * @method array orderInvoiceNotification(array $args = [])
 * @method array updateOrdersPartialInvoiceSendTrackingNumber(array $args = [])
 * @method array updateOrderTrackingStatus(array $args = [])
 * @method array retrieveOrderConversation(array $args = [])
 * @method array retrievePaymentTransaction(array $args = [])
 * @method array sendPaymentNotification(array $args = [])
 * @method array getFeedOrderStatus(array $args = [])
 * @method array getFeedConfiguration(array $args = [])
 * @method array createOrUpdateFeedConfiguration(array $args = [])
 * @method array deleteFeedConfiguration(array $args = [])
 * @method array retrieveFeedItems(array $args = [])
 * @method array commitFeedItems(array $args = [])
 * @method array getHookConfiguration(array $args = [])
 * @method array createOrUpdateHookConfiguration(array $args = [])
 * @method array deleteHookConfiguration(array $args = [])
 * @method array exportOrderReportWithStatusCompleted(array $args = [])
 * @method array exportOrderReportWithStatusInProgress(array $args = [])
 * @method array retrieveUsersOrders(array $args = [])
 * @method array retrieveUserOrderDetails(array $args = [])
 * @method array testJSONataExpression(array $args = [])
 */
class OrderClient extends VtexClient
{

}