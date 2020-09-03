<?php
namespace ScandiPWA\WishlistGraphQl\Model\Resolver\SaveProductToWishlist;

/**
 * Interceptor class for @see \ScandiPWA\WishlistGraphQl\Model\Resolver\SaveProductToWishlist
 */
class Interceptor extends \ScandiPWA\WishlistGraphQl\Model\Resolver\SaveProductToWishlist implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Wishlist\Model\WishlistFactory $wishlistFactory)
    {
        $this->___init();
        parent::__construct($productRepository, $customerRepository, $wishlistFactory);
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
