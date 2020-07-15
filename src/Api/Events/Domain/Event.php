<?php

declare(strict_types=1);

namespace Meetup\Api\Events\Domain;

use Meetup\Api\Events\Domain\Venue;
use Meetup\Api\Events\Domain\Group;

class Event
{
    /** @var string $id */
    private $id;
    /** @var integer $created */
    private $created;
    /** @var integer $duration */
    private $duration;
    /** @var string $name */
    private $name;
    /** @var boolean $dateInSeriesPattern */
    private $dateInSeriesPattern;
    /** @var string $status */
    private $status;
    /** @var integer $time */
    private $time;
    /** @var string $localDate */
    private $localDate;
    /** @var string $localTime */
    private $localTime;
    /** @var string $update */
    private $update;
    /** @var integer $utcOffset */
    private $utcOffset;
    /** @var integer $waitlistCount */
    private $waitlistCount;
    /** @var integer $yesRsvpCount */
    private $yesRsvpCount;
    /** @var Venue $venue */
    private $venue;
    /** @var boolean $isOnlineEvent */
    private $isOnlineEvent;
    /** @var Group $group */
    private $group;
    /** @var string $link */
    private $link;
    /** @var string $description */
    private $description;
    /** @var string $howTofindUs */
    private $howTofindUs;
    /** @var string $visibility */
    private $visibility;
    /** @var boolean $memberPayFee */
    private $memberPayFee;

    /**
     * Event constructor.
     * @param string $id
     * @param int $created
     * @param int $duration
     * @param string $name
     * @param bool $dateInSeriesPattern
     * @param string $status
     * @param int $time
     * @param string $localDate
     * @param string $localTime
     * @param string $update
     * @param int $utcOffset
     * @param int $waitlistCount
     * @param int $yesRsvpCount
     * @param Venue $venue
     * @param bool $isOnlineEvent
     * @param Group $group
     * @param string $link
     * @param string $description
     * @param string $howTofindUs
     * @param string $visibility
     * @param bool $memberPayFee
     */
    public function __construct(
        string $id,
        int $created,
        int $duration,
        string $name,
        bool $dateInSeriesPattern,
        string $status,
        int $time,
        string $localDate,
        string $localTime,
        string $update,
        int $utcOffset,
        int $waitlistCount,
        int $yesRsvpCount,
        Venue $venue,
        bool $isOnlineEvent,
        Group $group,
        string $link,
        string $description,
        string $howTofindUs,
        string $visibility,
        bool $memberPayFee
    ) {
        $this->id = $id;
        $this->created = $created;
        $this->duration = $duration;
        $this->name = $name;
        $this->dateInSeriesPattern = $dateInSeriesPattern;
        $this->status = $status;
        $this->time = $time;
        $this->localDate = $localDate;
        $this->localTime = $localTime;
        $this->update = $update;
        $this->utcOffset = $utcOffset;
        $this->waitlistCount = $waitlistCount;
        $this->yesRsvpCount = $yesRsvpCount;
        $this->venue = $venue;
        $this->isOnlineEvent = $isOnlineEvent;
        $this->group = $group;
        $this->link = $link;
        $this->description = $description;
        $this->howTofindUs = $howTofindUs;
        $this->visibility = $visibility;
        $this->memberPayFee = $memberPayFee;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getCreated(): int
    {
        return $this->created;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isDateInSeriesPattern(): bool
    {
        return $this->dateInSeriesPattern;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * @return string
     */
    public function getLocalDate(): string
    {
        return $this->localDate;
    }

    /**
     * @return string
     */
    public function getLocalTime(): string
    {
        return $this->localTime;
    }

    /**
     * @return string
     */
    public function getUpdate(): string
    {
        return $this->update;
    }

    /**
     * @return int
     */
    public function getUtcOffset(): int
    {
        return $this->utcOffset;
    }

    /**
     * @return int
     */
    public function getWaitlistCount(): int
    {
        return $this->waitlistCount;
    }

    /**
     * @return int
     */
    public function getYesRsvpCount(): int
    {
        return $this->yesRsvpCount;
    }

    /**
     * @return Venue
     */
    public function getVenue(): Venue
    {
        return $this->venue;
    }

    /**
     * @return bool
     */
    public function isOnlineEvent(): bool
    {
        return $this->isOnlineEvent;
    }

    /**
     * @return Group
     */
    public function getGroup(): Group
    {
        return $this->group;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getHowTofindUs(): string
    {
        return $this->howTofindUs;
    }

    /**
     * @return string
     */
    public function getVisibility(): string
    {
        return $this->visibility;
    }

    /**
     * @return bool
     */
    public function isMemberPayFee(): bool
    {
        return $this->memberPayFee;
    }
}
