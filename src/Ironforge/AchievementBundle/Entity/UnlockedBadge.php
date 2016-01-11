<?php

namespace Ironforge\AchievementBundle\Entity;

use Ironforge\UserBundle\Entity\User;

/**
 * @author    Adrien Pétremann <adrien.petremann@akeneo.com>
 * @copyright 2015 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class UnlockedBadge
{
    /** @var string */
    protected $id;

    /** @var User */
    protected $user;

    /** @var Badge */
    protected $badge;

    /** @var DateTime */
    protected $unlockedDate;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return Badge
     */
    public function getBadge()
    {
        return $this->badge;
    }

    /**
     * @param Badge $badge
     */
    public function setBadge($badge)
    {
        $this->badge = $badge;
    }

    /**
     * @return DateTime
     */
    public function getUnlockedDate()
    {
        return $this->unlockedDate;
    }

    /**
     * @param DateTime $unlockedDate
     */
    public function setUnlockedDate($unlockedDate)
    {
        $this->unlockedDate = $unlockedDate;
    }
}