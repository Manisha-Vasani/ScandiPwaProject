<?php
namespace ScandiPWA\MenuOrganizer\Controller\Adminhtml\Item\Edit;

/**
 * Interceptor class for @see \ScandiPWA\MenuOrganizer\Controller\Adminhtml\Item\Edit
 */
class Interceptor extends \ScandiPWA\MenuOrganizer\Controller\Adminhtml\Item\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory)
    {
        $this->___init();
        parent::__construct($context, $registry, $resultLayoutFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
