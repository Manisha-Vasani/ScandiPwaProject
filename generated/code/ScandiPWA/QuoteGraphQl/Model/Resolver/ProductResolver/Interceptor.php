<?php
namespace ScandiPWA\QuoteGraphQl\Model\Resolver\ProductResolver;

/**
 * Interceptor class for @see \ScandiPWA\QuoteGraphQl\Model\Resolver\ProductResolver
 */
class Interceptor extends \ScandiPWA\QuoteGraphQl\Model\Resolver\ProductResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\ProductRepository $productRepository, \ScandiPWA\CatalogGraphQl\Model\Resolver\Products\DataProvider\Product $productDataProvider, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \ScandiPWA\Performance\Model\Resolver\Products\DataPostProcessor $postProcessor)
    {
        $this->___init();
        parent::__construct($productRepository, $productDataProvider, $searchCriteriaBuilder, $postProcessor);
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
