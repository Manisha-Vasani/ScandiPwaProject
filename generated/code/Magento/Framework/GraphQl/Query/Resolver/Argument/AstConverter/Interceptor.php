<?php
namespace Magento\Framework\GraphQl\Query\Resolver\Argument\AstConverter;

/**
 * Interceptor class for @see \Magento\Framework\GraphQl\Query\Resolver\Argument\AstConverter
 */
class Interceptor extends \Magento\Framework\GraphQl\Query\Resolver\Argument\AstConverter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Query\Resolver\Argument\Filter\ClauseFactory $clauseFactory, \Magento\Framework\GraphQl\Query\Resolver\Argument\Filter\ConnectiveFactory $connectiveFactory, \Magento\Framework\GraphQl\Query\Resolver\Argument\FieldEntityAttributesPool $fieldEntityAttributesPool)
    {
        $this->___init();
        parent::__construct($clauseFactory, $connectiveFactory, $fieldEntityAttributesPool);
    }

    /**
     * {@inheritdoc}
     */
    public function getClausesFromAst(string $fieldName, array $arguments) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getClausesFromAst');
        if (!$pluginInfo) {
            return parent::getClausesFromAst($fieldName, $arguments);
        } else {
            return $this->___callPlugins('getClausesFromAst', func_get_args(), $pluginInfo);
        }
    }
}
