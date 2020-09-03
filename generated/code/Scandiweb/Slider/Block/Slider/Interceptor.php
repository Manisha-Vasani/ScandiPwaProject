<?php
namespace Scandiweb\Slider\Block\Slider;

/**
 * Interceptor class for @see \Scandiweb\Slider\Block\Slider
 */
class Interceptor extends \Scandiweb\Slider\Block\Slider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Scandiweb\Slider\Model\SliderFactory $sliderFactory, \Scandiweb\Slider\Model\ResourceModel\Slide\CollectionFactory $slideCollectionFactory, \Scandiweb\Slider\Model\ResourceModel\Map\CollectionFactory $mapCollectionFactory, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Cms\Model\Template\FilterProvider $filterProvider, array $data)
    {
        $this->___init();
        parent::__construct($context, $sliderFactory, $slideCollectionFactory, $mapCollectionFactory, $productCollectionFactory, $filterProvider, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        if (!$pluginInfo) {
            return parent::getImage($product, $imageId, $attributes);
        } else {
            return $this->___callPlugins('getImage', func_get_args(), $pluginInfo);
        }
    }
}
