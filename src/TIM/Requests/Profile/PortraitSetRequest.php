<?php

namespace BiuBiuJun\QCloud\TIM\Requests\Profile;

use BiuBiuJun\QCloud\Kernel\BaseRequest;
use BiuBiuJun\QCloud\TIM\Parameters\ProfileItem;

/**
 * Class PortraitSetRequest
 *
 * @package BiuBiuJun\QCloud\TIM\Requests\Profile
 */
class PortraitSetRequest extends BaseRequest
{
    /**
     * PortraitSetRequest constructor.
     *
     * @param string                                       $fromAccount
     * @param \BiuBiuJun\QCloud\TIM\Parameters\ProfileItem $profileItem
     */
    public function __construct(string $fromAccount, ProfileItem $profileItem)
    {
        $this->setFromAccount($fromAccount)
            ->setProfileItem($profileItem);
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return 'v4/profile/portrait_set';
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
     * @param \BiuBiuJun\QCloud\TIM\Parameters\ProfileItem $profileItem
     *
     * @return $this
     */
    public function setProfileItem(ProfileItem $profileItem)
    {
        $this->setParameter('ProfileItem', $profileItem->transform());

        return $this;
    }
}