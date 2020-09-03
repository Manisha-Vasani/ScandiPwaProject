<?php
namespace ScandiPWA\WishlistGraphQl\Model\Resolver\MoveWishlistToCart;

/**
 * Interceptor class for @see \ScandiPWA\WishlistGraphQl\Model\Resolver\MoveWishlistToCart
 */
class Interceptor extends \ScandiPWA\WishlistGraphQl\Model\Resolver\MoveWishlistToCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Model\Webapi\ParamOverriderCartId $overriderCartId, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Quote\Api\CartManagementInterface $quoteManagement, \Magento\Quote\Api\GuestCartRepositoryInterface $guestCartRepository, \Magento\Wishlist\Model\WishlistFactory $wishlistFactory, \Magento\Wishlist\Model\ResourceModel\Wishlist $wishlistResource)
    {
        $this->___init();
        parent::__construct($overriderCartId, $quoteRepository, $quoteManagement, $guestCartRepository, $wishlistFactory, $wishlistResource);
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
