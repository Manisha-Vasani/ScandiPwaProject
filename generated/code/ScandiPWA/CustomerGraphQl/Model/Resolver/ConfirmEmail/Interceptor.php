<?php
namespace ScandiPWA\CustomerGraphQl\Model\Resolver\ConfirmEmail;

/**
 * Interceptor class for @see \ScandiPWA\CustomerGraphQl\Model\Resolver\ConfirmEmail
 */
class Interceptor extends \ScandiPWA\CustomerGraphQl\Model\Resolver\ConfirmEmail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\AuthenticationInterface $authentication, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Api\AccountManagementInterface $customerAccountManagement, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Integration\Api\CustomerTokenServiceInterface $customerTokenService, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Customer\Model\CustomerRegistry $customerRegistry)
    {
        $this->___init();
        parent::__construct($authentication, $customerSession, $customerAccountManagement, $customerRepository, $customerTokenService, $encryptor, $customerRegistry);
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
