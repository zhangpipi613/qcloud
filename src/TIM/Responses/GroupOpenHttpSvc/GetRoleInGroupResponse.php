<?php

namespace BiuBiuJun\QCloud\TIM\Responses\GroupOpenHttpSvc;

use BiuBiuJun\QCloud\Kernel\BaseResponse;

/**
 * Class GetRoleInGroupResponse
 *
 * @package BiuBiuJun\QCloud\TIM\Responses\GroupOpenHttpSvc
 */
class GetRoleInGroupResponse extends BaseResponse
{
    /**
     * @return array
     */
    public function getUserIdList()
    {
        return $this->content['UserIdList'];
    }
}
