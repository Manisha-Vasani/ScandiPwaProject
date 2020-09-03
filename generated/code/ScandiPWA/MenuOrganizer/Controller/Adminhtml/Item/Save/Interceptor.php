<?php
namespace ScandiPWA\MenuOrganizer\Controller\Adminhtml\Item\Save;

/**
 * Interceptor class for @see \ScandiPWA\MenuOrganizer\Controller\Adminhtml\Item\Save
 */
class Interceptor extends \ScandiPWA\MenuOrganizer\Controller\Adminhtml\Item\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \ScandiPWA\MenuOrganizer\Helper\Adminhtml\Icon $iconUploadHelper)
    {
        $this->___init();
        parent::__construct($context, $iconUploadHelper);
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
