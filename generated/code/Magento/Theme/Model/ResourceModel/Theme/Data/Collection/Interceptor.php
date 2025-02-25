<?php
namespace Magento\Theme\Model\ResourceModel\Theme\Data\Collection;

/**
 * Interceptor class for @see \Magento\Theme\Model\ResourceModel\Theme\Data\Collection
 */
class Interceptor extends \Magento\Theme\Model\ResourceModel\Theme\Data\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $connection, $resource);
    }

    /**
     * {@inheritdoc}
     */
    public function filterVisibleThemes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'filterVisibleThemes');
        if (!$pluginInfo) {
            return parent::filterVisibleThemes();
        } else {
            return $this->___callPlugins('filterVisibleThemes', func_get_args(), $pluginInfo);
        }
    }
}
