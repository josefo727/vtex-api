<?php

namespace Vtex\PaymentProviderProtocol;

use Vtex\VtexClient;

/**
 * @method array listPaymentMethods(array $args = [])
 * @method array listPaymentProviderManifest(array $args = [])
 * @method array createPayment(array $args = [])
 * @method array cancelPayment(array $args = [])
 * @method array capturePayment(array $args = [])
 * @method array refundPayment(array $args = [])
 * @method array inboundRequestBETA(array $args = [])
 * @method array createAuthorizationToken(array $args = [])
 * @method array providerAuthentication(array $args = [])
 * @method array getCredentials(array $args = [])
 */
class PaymentProviderProtocolClient extends VtexClient
{

}