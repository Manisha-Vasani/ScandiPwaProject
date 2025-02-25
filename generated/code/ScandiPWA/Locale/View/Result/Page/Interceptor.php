<?php
namespace ScandiPWA\Locale\View\Result\Page;

/**
 * Interceptor class for @see \ScandiPWA\Locale\View\Result\Page
 */
class Interceptor extends \ScandiPWA\Locale\View\Result\Page implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Locale\Resolver $localeResolver, \Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Framework\View\Layout\ReaderPool $layoutReaderPool, \Magento\Framework\Translate\InlineInterface $translateInline, \Magento\Framework\View\Layout\BuilderFactory $layoutBuilderFactory, \Magento\Framework\View\Layout\GeneratorPool $generatorPool, \Magento\Framework\View\Page\Config\RendererFactory $pageConfigRendererFactory, \Magento\Framework\View\Page\Layout\Reader $pageLayoutReader, string $template, $isIsolated = false, ?\Magento\Framework\View\EntitySpecificHandlesList $entitySpecificHandlesList = null, $action = null)
    {
        $this->___init();
        parent::__construct($localeResolver, $context, $layoutFactory, $layoutReaderPool, $translateInline, $layoutBuilderFactory, $generatorPool, $pageConfigRendererFactory, $pageLayoutReader, $template, $isIsolated, $entitySpecificHandlesList, $action);
    }

    /**
     * {@inheritdoc}
     */
    public function renderResult(\Magento\Framework\App\ResponseInterface $httpResponse)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renderResult');
        if (!$pluginInfo) {
            return parent::renderResult($httpResponse);
        } else {
            return $this->___callPlugins('renderResult', func_get_args(), $pluginInfo);
        }
    }
}
