<?php
namespace ScandiPWA\PayPalGraphQl\Model\Resolver\PaypalExpressToken;

/**
 * Interceptor class for @see \ScandiPWA\PayPalGraphQl\Model\Resolver\PaypalExpressToken
 */
class Interceptor extends \ScandiPWA\PayPalGraphQl\Model\Resolver\PaypalExpressToken implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\CartManagementInterface $quoteManagement, \Magento\QuoteGraphQl\Model\Cart\GetCartForUser $getCartForUser, \Magento\PaypalGraphQl\Model\Provider\Checkout $checkoutProvider, \Magento\PaypalGraphQl\Model\Provider\Config $configProvider, \Magento\Checkout\Helper\Data $checkoutHelper, \Magento\PaypalGraphQl\Model\Resolver\Store\Url $urlService)
    {
        $this->___init();
        parent::__construct($quoteManagement, $getCartForUser, $checkoutProvider, $configProvider, $checkoutHelper, $urlService);
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
