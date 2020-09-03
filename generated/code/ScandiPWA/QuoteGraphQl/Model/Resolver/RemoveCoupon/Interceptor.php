<?php
namespace ScandiPWA\QuoteGraphQl\Model\Resolver\RemoveCoupon;

/**
 * Interceptor class for @see \ScandiPWA\QuoteGraphQl\Model\Resolver\RemoveCoupon
 */
class Interceptor extends \ScandiPWA\QuoteGraphQl\Model\Resolver\RemoveCoupon implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Webapi\Controller\Rest\ParamOverriderCustomerId $overriderCustomerId, \Magento\Quote\Api\CartManagementInterface $quoteManagement, \Magento\Quote\Api\GuestCartRepositoryInterface $guestCartRepository, \Magento\Quote\Api\CouponManagementInterface $couponManagement)
    {
        $this->___init();
        parent::__construct($overriderCustomerId, $quoteManagement, $guestCartRepository, $couponManagement);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        if (!$pluginInfo) {
            return parent::resolve($field, $context, $info, $value, $args);
        } else {
            return $this->___callPlugins('resolve', func_get_args(), $pluginInfo);
        }
    }
}
