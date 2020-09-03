<?php
namespace ScandiPWA\PersistedQuery\Console\Command\PersistedQueryFlushCommand;

/**
 * Interceptor class for @see \ScandiPWA\PersistedQuery\Console\Command\PersistedQueryFlushCommand
 */
class Interceptor extends \ScandiPWA\PersistedQuery\Console\Command\PersistedQueryFlushCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\ScandiPWA\PersistedQuery\Cache\Query $query, ?string $name = null)
    {
        $this->___init();
        parent::__construct($query, $name);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        if (!$pluginInfo) {
            return parent::run($input, $output);
        } else {
            return $this->___callPlugins('run', func_get_args(), $pluginInfo);
        }
    }
}
