<?php
declare(strict_types=1);

namespace Gdbots\QueryParser\Node;

use Gdbots\QueryParser\Enum\BoolOperator;

final class NumberRange extends Range
{
    const NODE_TYPE = 'number_range';
    const COMPOUND_NODE = true;

    /**
     * NumberRange constructor.
     *
     * @param Numbr $lowerNode
     * @param Numbr $upperNode
     * @param bool  $exclusive
     */
    public function __construct(?Numbr $lowerNode = null, ?Numbr $upperNode = null, bool $exclusive = false, ?BoolOperator $boolOperator = null)
    {
        parent::__construct($lowerNode, $upperNode, $exclusive, $boolOperator);
    }

    /**
     * @return Numbr|Node
     */
    public function getLowerNode(): ?Node
    {
        return parent::getLowerNode();
    }

    /**
     * @return Numbr|Node
     */
    public function getUpperNode(): ?Node
    {
        return parent::getUpperNode();
    }
}
