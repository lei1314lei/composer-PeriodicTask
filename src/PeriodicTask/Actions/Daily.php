<?php
namespace PeriodicTask\Actions;

class Daily extends  \PeriodicTask\AbstractAction
{

    protected function _checkTimming()
    {
        return true;
    }
}