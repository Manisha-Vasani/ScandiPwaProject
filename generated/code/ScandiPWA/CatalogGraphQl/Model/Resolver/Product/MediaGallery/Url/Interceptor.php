<?php
namespace ScandiPWA\CatalogGraphQl\Model\Resolver\Product\MediaGallery\Url;

/**
 * Interceptor class for @see \ScandiPWA\CatalogGraphQl\Model\Resolver\Product\MediaGallery\Url
 */
class Interceptor extends \ScandiPWA\CatalogGraphQl\Model\Resolver\Product\MediaGallery\Url implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product\ImageFactory $productImageFactory, \Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\Image\Placeholder $placeholderProvider, \Magento\Catalog\Helper\Image $imageHelper, \Magento\Store\Model\App\Emulation $emulation, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($productImageFactory, $placeholderProvider, $imageHelper, $emulation, $storeManager);
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
