<?php

namespace BiuBiuJun\QCloud\TIM\Responses\Sns;

use BiuBiuJun\QCloud\Kernel\BaseResponse;

/**
 * Class BlackListDeleteResponse
 *
 * @package BiuBiuJun\QCloud\TIM\Responses\Sns
 */
class BlackListGetResponse extends BaseResponse
{
    /**
     * @return array
     */
    public function getBlackListItem()
    {
        return $this->content['BlackListItem'];
    }

    /**
     * @return int
     */
    public function getStartIndex()
    {
        return $this->content['StartIndex'];
    }

    /**
     * @return int
     */
    public function getCurruentSequence()
    {
        // 此处接口返回拼写就是错误的
        return $this->content['CurruentSequence'];
    }
}