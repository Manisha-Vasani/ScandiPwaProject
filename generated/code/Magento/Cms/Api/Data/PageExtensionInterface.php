<?php
namespace Magento\Cms\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Cms\Api\Data\PageInterface
 */
interface PageExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string|null
     */
    public function getPageWidth();

    /**
     * @param string $pageWidth
     * @return $this
     */
    public function setPageWidth($pageWidth);
}
