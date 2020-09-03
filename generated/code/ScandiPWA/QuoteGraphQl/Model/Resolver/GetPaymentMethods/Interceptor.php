<?php
namespace ScandiPWA\QuoteGraphQl\Model\Resolver\GetPaymentMethods;

/**
 * Interceptor class for @see \ScandiPWA\QuoteGraphQl\Model\Resolver\GetPaymentMethods
 */
class Interceptor extends \ScandiPWA\QuoteGraphQl\Model\Resolver\GetPaymentMethods implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\PaymentMethodManagementInterface $paymentMethodManagement, \Magento\Checkout\Model\PaymentDetailsFactory $paymentDetailsFactory, \Magento\Quote\Api\CartTotalRepositoryInterface $cartTotalsRepository, \Magento\Quote\Model\Webapi\ParamOverriderCartId $overriderCartId, \Magento\Quote\Model\QuoteIdMaskFactory $quoteIdMaskFactory)
    {
        $this->___init();
        parent::__construct($paymentMethodManagement, $paymentDetailsFactory, $cartTotalsRepository, $overriderCartId, $quoteIdMaskFactory);
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
