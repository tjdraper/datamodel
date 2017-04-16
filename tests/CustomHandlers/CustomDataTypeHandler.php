<?php

namespace CustomHandlers;

/**
 * Class CustomDataTypeHandler
 */
class CustomDataTypeHandler
{
    /** @var string GET_HANDLER */
    const GET_HANDLER = 'getHandler';

    /** @var string SET_HANDLER */
    const SET_HANDLER = 'setHandler';

    /** @var string AS_ARRAY_HANDLER */
    const AS_ARRAY_HANDLER = 'asArrayHandler';

    /**
     * Common method to handle data
     * @param mixed $val
     * @return string
     */
    public function getHandler($val)
    {
        if ($val === 'testGet') {
            return 'customGetTestVal';
        }

        return $val;
    }

    /**
     * Common method to handle data
     * @param mixed $val
     * @return string
     */
    public function setHandler($val)
    {
        if ($val === 'testSet') {
            return 'customSetTestVal';
        }

        return $val;
    }

    /**
     * Common method to handle data
     * @param mixed $val
     * @return string
     */
    public function asArrayHandler($val)
    {
        if ($val === 'testAsArray') {
            return 'customAsArrayTestVal';
        }

        return $val;
    }
}
