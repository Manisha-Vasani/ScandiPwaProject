<?php
namespace ScandiPWA\WishlistGraphQl\Model\Resolver\ShareWishlist;

/**
 * Interceptor class for @see \ScandiPWA\WishlistGraphQl\Model\Resolver\ShareWishlist
 */
class Interceptor extends \ScandiPWA\WishlistGraphQl\Model\Resolver\ShareWishlist implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Escaper $escaper, \Magento\Framework\UrlInterface $url, \Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Wishlist\Model\WishlistFactory $wishlistFactory, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \ScandiPWA\WishlistGraphQl\Model\Resolver\WishlistResolver $wishlistResolver, \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\ResourceModel\CustomerRepository $customerRepository)
    {
        $this->___init();
        parent::__construct($escaper, $url, $layoutFactory, $wishlistFactory, $scopeConfig, $wishlistResolver, $transportBuilder, $storeManager, $customerRepository);
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
