<?php

namespace Vtex\Promotion;

use Vtex\VtexClient;

/**
 * @method array createMultipleCoupons(array $args = [])
 * @method array createCoupon(array $args = [])
 * @method array getAllPromotions(array $args = [])
 * @method array getPromotionById(array $args = [])
 * @method array createOrUpdatePromotion(array $args = [])
 * @method array createMultipleSkuPromotion(array $args = [])
 * @method array updateMultipleSkuPromotion(array $args = [])
 * @method array archiveAPromotion(array $args = [])
 * @method array unarchiveAPromotion(array $args = [])
 * @method array getCouponByCouponCode(array $args = [])
 * @method array getArchivedCouponByCouponCode(array $args = [])
 * @method array archiveCouponByCouponCode(array $args = [])
 * @method array updateCoupon(array $args = [])
 * @method array getAllCoupons(array $args = [])
 * @method array couponMassiveGeneration(array $args = [])
 * @method array getCouponUsage(array $args = [])
 * @method array unarchiveCouponByCouponCode(array $args = [])
 * @method array priceBySkuId(array $args = [])
 * @method array deleteBySkuId(array $args = [])
 * @method array getAllPaged(array $args = [])
 * @method array priceByContext(array $args = [])
 * @method array priceBySkuIdAndTradePolicy(array $args = [])
 * @method array savePrice(array $args = [])
 * @method array calculateDiscountsAndTaxesBundles(array $args = [])
 * @method array getCampaignConfiguration(array $args = [])
 * @method array matchCampaings(array $args = [])
 * @method array setCampaignConfiguration(array $args = [])
 * @method array usageNotification(array $args = [])
 */
class PromotionClient extends VtexClient
{

}