<?php

namespace BiuBiuJun\QCloud\TIM\Parameters;

use BiuBiuJun\QCloud\Kernel\BaseParameter;

/**
 * Class FriendItem
 *
 * @package BiuBiuJun\QCloud\TIM\Parameters
 */
class FriendItem extends BaseParameter
{
    /**
     * FriendItem constructor.
     *
     * @param string $toAccount
     * @param string $addSource
     */
    public function __construct(string $toAccount = '', string $addSource = '')
    {
        $this->setToAccount($toAccount)
            ->setAddSource($addSource);
    }

    /**
     * @param string $toAccount
     *
     * @return $this
     */
    public function setToAccount(string $toAccount)
    {
        $this->setParameter('To_Account', $toAccount);

        return $this;
    }

    /**
     * @param string $remark
     *
     * @return $this
     */
    public function setRemark(string $remark)
    {
        $this->setParameter('Remark', $remark);

        return $this;
    }

    /**
     * @param string $remarkTime
     *
     * @return $this
     */
    public function setRemarkTime(string $remarkTime)
    {
        $this->setParameter('RemarkTime', $remarkTime);

        return $this;
    }

    /**
     * @param string $groupName
     *
     * @return $this
     */
    public function setGroupName(string $groupName)
    {
        $this->setParameter('GroupName', $groupName);

        return $this;
    }

    /**
     * @param string $addSource
     *
     * @return $this
     */
    public function setAddSource(string $addSource)
    {
        $this->setParameter('AddSource', $addSource);

        return $this;
    }

    /**
     * @param string $addWording
     *
     * @return $this
     */
    public function setAddWording(string $addWording)
    {
        $this->setParameter('AddWording', $addWording);

        return $this;
    }

    /**
     * @param string $addTime
     *
     * @return $this
     */
    public function setAddTime(string $addTime)
    {
        $this->setParameter('AddTime', $addTime);

        return $this;
    }

    /**
     * @param \BiuBiuJun\QCloud\TIM\Parameters\FriendCustomItem $friendCustomItem
     *
     * @return $this
     */
    public function setSnsItem(FriendCustomItem $friendCustomItem)
    {
        $this->setParameter('SnsItem', $friendCustomItem->getParameters());

        return $this;
    }

    /**
     * @param \BiuBiuJun\QCloud\TIM\Parameters\FriendCustomItem $friendCustomItem
     *
     * @return $this
     */
    public function setCustomItem(FriendCustomItem $friendCustomItem)
    {
        $this->setParameter('CustomItem', $friendCustomItem->getParameters());

        return $this;
    }
}
