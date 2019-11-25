<?php

namespace BiuBiuJun\QCloud\TIC\Responses\Record;

use BiuBiuJun\QCloud\Kernel\BaseResponse;

/**
 * Class OfflineQueryResponse
 *
 * @package BiuBiuJun\QCloud\TIC\Responses\Record
 */
class OfflineQueryResponse extends BaseResponse
{
    /**
     * @return string
     */
    public function getTaskId()
    {
        return $this->content['task_id'];
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->content['status'];
    }

    /**
     * @return int
     */
    public function getProgress()
    {
        return $this->content['progress'];
    }

    /**
     * @return int
     */
    public function getRoomId()
    {
        return $this->content['room_id'];
    }

    /**
     * @return string
     */
    public function getGroupId()
    {
        return $this->content['group_id'];
    }

    /**
     * @return int
     */
    public function getRecordStartTime()
    {
        return $this->content['record_start_time'];
    }

    /**
     * @return int
     */
    public function getTotalTime()
    {
        return $this->content['total_time'];
    }

    /**
     * @return array
     */
    public function getVideoInfo()
    {
        return $this->content['video_info'];
    }
}