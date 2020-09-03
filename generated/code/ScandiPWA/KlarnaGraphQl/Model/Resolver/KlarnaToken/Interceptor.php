<?php
namespace ScandiPWA\KlarnaGraphQl\Model\Resolver\KlarnaToken;

/**
 * Interceptor class for @see \ScandiPWA\KlarnaGraphQl\Model\Resolver\KlarnaToken
 */
class Interceptor extends \ScandiPWA\KlarnaGraphQl\Model\Resolver\KlarnaToken implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\GuestCartRepositoryInterface $guestCartRepository, \Magento\Webapi\Controller\Rest\ParamOverriderCustomerId $overriderCustomerId, \Klarna\Kp\Api\QuoteRepositoryInterface $kQuoteRepository, \Klarna\Core\Api\BuilderInterface $builder, \Klarna\Kp\Model\QuoteFactory $quoteFactory, \Magento\Quote\Api\CartManagementInterface $quoteManagement, \Klarna\Kp\Api\CreditApiInterface $api)
    {
        $this->___init();
        parent::__construct($guestCartRepository, $overriderCustomerId, $kQuoteRepository, $builder, $quoteFactory, $quoteManagement, $api);
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
