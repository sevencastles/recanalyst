<?php

namespace RecAnalyst\Model\Actions;

use RecAnalyst\RecordedGame;

/**
 * Represents ...
 */
class GoBackToWorkAction extends Action
{
    /**
     * The action ID.
     *
     * @var int
     */
    const ID = 0x80;

    // GoBackToWork(uId=%d)
    private $unitId;

    /**
     * Create a ...
     *
     * @param \RecAnalyst\RecordedGame  $rec  Recorded game instance.
     * @param int  $time  Recorded game instance.
     */
    public function __construct(RecordedGame $rec, $time)
    {
        parent::__construct($rec, $time);
    }
}
