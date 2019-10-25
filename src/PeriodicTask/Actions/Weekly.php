<?php
namespace PeriodicTask\Actions;
use \PeriodicTask\Exception\Timming as TimmingException;
class Weekly extends  \PeriodicTask\AbstractAction
{
    protected function _checkTimming()
    {
        if($this->_isMondayToday())
        {
            return true;
        }else{
            throw new TimmingException("Today is not Monday");
        }
    }
    protected function _isMondayToday()
    {
        return  date('D',$this->_todayTimestamp()) === "Mon" ? true:false;
    }
}