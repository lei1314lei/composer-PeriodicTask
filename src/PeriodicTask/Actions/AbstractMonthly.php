<?php
namespace PeriodicTask\Actions;
use \PeriodicTask\Exception\Timming as TimmingException;
abstract class AbstractWeekly extends  \PeriodicTask\AbstractAction
{
    protected function _checkTimming()
    {
        if($this->_isFirstDayOfMonth())
        {
            return true;
        }else{
            throw new TimmingException("Today is not the first day of month");
        }
    }
    protected function _isFirstDayOfMonth()
    {
        return date('j ',$this->_todayTimestamp())==1 ? true:false;
    }
}