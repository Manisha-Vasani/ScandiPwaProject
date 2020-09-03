<?php
namespace ScandiPWA\CustomerGraphQl\Model\Resolver\ResendConfirmationEmail;

/**
 * Interceptor class for @see \ScandiPWA\CustomerGraphQl\Model\Resolver\ResendConfirmationEmail
 */
class Interceptor extends \ScandiPWA\CustomerGraphQl\Model\Resolver\ResendConfirmationEmail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\Session $customerSession, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Api\AccountManagementInterface $customerAccountManagement)
    {
        $this->___init();
        parent::__construct($customerSession, $storeManager, $customerAccountManagement);
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
