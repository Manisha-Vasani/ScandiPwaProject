<?php
namespace ScandiPWA\QuoteGraphQl\Model\Resolver\RemoveCartItem;

/**
 * Interceptor class for @see \ScandiPWA\QuoteGraphQl\Model\Resolver\RemoveCartItem
 */
class Interceptor extends \ScandiPWA\QuoteGraphQl\Model\Resolver\RemoveCartItem implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\CartItemRepositoryInterface $cartItemRepository, \Magento\Quote\Api\GuestCartItemRepositoryInterface $guestCartItemRepository, \Magento\Quote\Model\Webapi\ParamOverriderCartId $overriderCartId)
    {
        $this->___init();
        parent::__construct($cartItemRepository, $guestCartItemRepository, $overriderCartId);
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
