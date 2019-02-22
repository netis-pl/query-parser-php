<?php
declare(strict_types=1);

namespace Gdbots\QueryParser\Node;

use Gdbots\QueryParser\Enum\BoolOperator;

final class WordRange extends Range
{
    const NODE_TYPE = 'word_range';
    const COMPOUND_NODE = true;

    /**
     * WordRange constructor.
     *
     * @param Word $lowerNode
     * @param Word $upperNode
     * @param bool $exclusive
     */
    public function __construct(?Word $lowerNode = null, ?Word $upperNode = null, bool $exclusive = false, ?BoolOperator $boolOperator = null)
    {
        parent::__construct($lowerNode, $upperNode, $exclusive, $boolOperator);
    }

    /**
     * @return Word|Node
     */
    public function getLowerNode(): ?Node
    {
        return parent::getLowerNode();
    }

    /**
     * @return Word|Node
     */
    public function getUpperNode(): ?Node
    {
        return parent::getUpperNode();
    }
}
