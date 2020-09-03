<?php
namespace Magento\Cms\Api\Data;

/**
 * Extension class for @see \Magento\Cms\Api\Data\PageInterface
 */
class PageExtension extends \Magento\Framework\Api\AbstractSimpleObject implements PageExtensionInterface
{
    /**
     * @return string|null
     */
    public function getPageWidth()
    {
        return $this->_get('page_width');
    }

    /**
     * @param string $pageWidth
     * @return $this
     */
    public function setPageWidth($pageWidth)
    {
        $this->setData('page_width', $pageWidth);
        return $this;
    }
}
