<?php
namespace ScandiPWA\Installer\Console\Command\ThemeBootstrapCommand;

/**
 * Interceptor class for @see \ScandiPWA\Installer\Console\Command\ThemeBootstrapCommand
 */
class Interceptor extends \ScandiPWA\Installer\Console\Command\ThemeBootstrapCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\ScandiPWA\Installer\Console\Command\Bootstrap $bootstrap, \Symfony\Component\Console\Question\QuestionFactory $question, $name = null)
    {
        $this->___init();
        parent::__construct($bootstrap, $question, $name);
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
