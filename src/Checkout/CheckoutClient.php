<?php

namespace Vtex\Checkout;

use Vtex\VtexClient;

/**
 * @method array cartSimulation(array $args = [])
 * @method array newShoppingCart(array $args = [])
 * @method array getCartInformation(array $args = [])
 * @method array removeAllItems(array $args = [])
 * @method array removeAllPersonalData(array $args = [])
 * @method array updateCartItems(array $args = [])
 * @method array changePrice(array $args = [])
 * @method array ignoreProfileData(array $args = [])
 * @method array addClientProfile(array $args = [])
 * @method array addShippingAddressAndSelectDeliveryOption(array $args = [])
 * @method array addClientPreferences(array $args = [])
 * @method array addMarketingData(array $args = [])
 * @method array addPaymentData(array $args = [])
 * @method array setMultipleCustomFieldValues(array $args = [])
 * @method array setSingleCustomFieldValue(array $args = [])
 * @method array removeSingleCustomFieldValue(array $args = [])
 * @method array getOrderFormConfiguration(array $args = [])
 * @method array updateOrderFormConfiguration(array $args = [])
 * @method array getWindowToChangeSeller(array $args = [])
 * @method array updateWindowToChangeSeller(array $args = [])
 * @method array cartInstallments(array $args = [])
 * @method array listPickupPointsByLocation(array $args = [])
 * @method array getAddressByPostalCode(array $args = [])
 * @method array placeOrderFromAnExistingCart(array $args = [])
 * @method array placeOrder(array $args = [])
 * @method array processOrder(array $args = [])
 */
class CheckoutClient extends VtexClient
{

}