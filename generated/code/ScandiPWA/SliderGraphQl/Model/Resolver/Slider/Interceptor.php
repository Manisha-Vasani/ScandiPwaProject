<?php
namespace ScandiPWA\SliderGraphQl\Model\Resolver\Slider;

/**
 * Interceptor class for @see \ScandiPWA\SliderGraphQl\Model\Resolver\Slider
 */
class Interceptor extends \ScandiPWA\SliderGraphQl\Model\Resolver\Slider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Query\Resolver\ValueFactory $valueFactory, \Scandiweb\Slider\Model\ResourceModel\Slider\CollectionFactory $sliderCollectionFactory, \Scandiweb\Slider\Model\ResourceModel\Slide\CollectionFactory $slideCollectionFactory, \Scandiweb\Slider\Model\ResourceModel\Map\CollectionFactory $mapCollectionFactory)
    {
        $this->___init();
        parent::__construct($valueFactory, $sliderCollectionFactory, $slideCollectionFactory, $mapCollectionFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null) : \Magento\Framework\GraphQl\Query\Resolver\Value
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        if (!$pluginInfo) {
            return parent::resolve($field, $context, $info, $value, $args);
        } else {
            return $this->___callPlugins('resolve', func_get_args(), $pluginInfo);
        }
    }
}
