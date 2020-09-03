<?php
namespace ScandiPWA\WishlistGraphQl\Model\Resolver\RemoveProductFromWishlist;

/**
 * Interceptor class for @see \ScandiPWA\WishlistGraphQl\Model\Resolver\RemoveProductFromWishlist
 */
class Interceptor extends \ScandiPWA\WishlistGraphQl\Model\Resolver\RemoveProductFromWishlist implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Wishlist\Model\WishlistFactory $wishlistFactory, \Magento\Wishlist\Model\ItemFactory $wishlistItemFactory)
    {
        $this->___init();
        parent::__construct($customerRepository, $wishlistFactory, $wishlistItemFactory);
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
