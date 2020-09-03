<?php
namespace ScandiPWA\QuoteGraphQl\Model\Resolver\OrderListResolver;

/**
 * Interceptor class for @see \ScandiPWA\QuoteGraphQl\Model\Resolver\OrderListResolver
 */
class Interceptor extends \ScandiPWA\QuoteGraphQl\Model\Resolver\OrderListResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Model\ResourceModel\Order\CollectionFactoryInterface $collectionFactory, \ScandiPWA\QuoteGraphQl\Model\Customer\CheckCustomerAccount $checkCustomerAccount)
    {
        $this->___init();
        parent::__construct($collectionFactory, $checkCustomerAccount);
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
