<?php
namespace fecshop\app\console\modules\Amqp\block;

class Queue extends \zhuravljov\yii\queue\amqp\Queue
{
    
    /**
     * 重写该函数
     */
    protected function handleMessage($id, $message)
    {
        $d = unserialize($message);
        //  do some thing ...
        \Yii::info($message,'fecshop_debug');
        return true;
    }
    
    /* 这是原来的函数
     * protected function handleMessage($id, $message)
     * {
     *    if ($this->messageHandler) {
     *        return call_user_func($this->messageHandler, $id, $message);
     *    } else {
     *        return parent::handleMessage($id, $message);
     *    }
     * }
    */
}