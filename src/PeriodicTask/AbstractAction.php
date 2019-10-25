<?php
namespace PeriodicTask;



abstract class AbstractAction implements Interfaces\Action
{
    abstract protected function _checkTimming();


    /*
     *
     *@throw \PeriodicTask\Exception\Timming
     * */
    final public function execute()
   {
       $this->_checkTimming();
       return $this->_execute();
   }

   protected function _todayTimestamp()
   {
       return time();
   }

}