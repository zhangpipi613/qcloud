<?php

namespace BiuBiuJun\QCloud\TIM\Requests\Sns;

use BiuBiuJun\QCloud\Kernel\BaseRequest;
use BiuBiuJun\QCloud\TIM\Parameters\FriendItem;

/**
 * Class FriendAddRequest
 *
 * @package BiuBiuJun\QCloud\TIM\Requests\Sns
 */
class FriendAddRequest extends BaseRequest
{
    /**
     * FriendAddRequest constructor.
     *
     * @param string $fromAccount
     * @param array  $addFriendItem
     */
    public function __construct(string $fromAccount, array $addFriendItem)
    {
        $this->setFromAccount($fromAccount)
            ->setAddFriendItem($addFriendItem);
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return 'v4/sns/friend_add';
    }

    /**
     * @param string $fromAccount
     *
     * @return $this
     */
    public function setFromAccount(string $fromAccount)
    {
        $this->setParameter('From_Account', $fromAccount);

        return $this;
    }

    /**
     * @param array $addFriendItem
     *
     * @return $this
     */
    public function setAddFriendItem(array $addFriendItem)
    {
        foreach ($addFriendItem as &$item) {
            if ($item instanceof FriendItem) {
                $item = $item->getParameters();
            }
        }

        $this->setParameter('AddFriendItem', $addFriendItem);

        return $this;
    }

    /**
     * @param string $addType
     *
     * @return $this
     */
    public function setAddType(string $addType)
    {
        $this->setParameter('AddType', $addType);

        return $this;
    }

    /**
     * @param int $forceAddFlags
     *
     * @return $this
     */
    public function setForceAddFlags(int $forceAddFlags)
    {
        $this->setParameter('ForceAddFlags', $forceAddFlags);

        return $this;
    }
}