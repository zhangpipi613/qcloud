<?php

namespace BiuBiuJun\QCloud\TIM\Requests\GroupOpenHttpSvc;

use BiuBiuJun\QCloud\Kernel\BaseRequest;

/**
 * Class ForbidSendMsgRequest
 *
 * @package BiuBiuJun\QCloud\TIM\Requests\GroupOpenHttpSvc
 */
class ForbidSendMsgRequest extends BaseRequest
{
    /**
     * ForbidSendMsgRequest constructor.
     *
     * @param string $groupId
     * @param array  $membersAccount
     * @param int    $shutUpTime
     */
    public function __construct(string $groupId, array $membersAccount, int $shutUpTime)
    {
        $this->setGroupId($groupId)
            ->setMembersAccount($membersAccount)
            ->setShutUpTime($shutUpTime);
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return 'v4/group_open_http_svc/forbid_send_msg';
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId(string $groupId)
    {
        $this->setParameter('GroupId', $groupId);

        return $this;
    }

    /**
     * @param array $membersAccount
     *
     * @return $this
     */
    public function setMembersAccount(array $membersAccount)
    {
        $this->setParameter('Members_Account', $membersAccount);

        return $this;
    }

    /**
     * @param int $shutUpTime
     *
     * @return $this
     */
    public function setShutUpTime(int $shutUpTime)
    {
        $this->setParameter('ShutUpTime', $shutUpTime);

        return $this;
    }
}
