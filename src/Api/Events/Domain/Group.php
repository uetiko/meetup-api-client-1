<?php

declare(strict_types=1);

namespace Meetup\Api\Events\Domain;


class Group
{
    /** @var integer $id */
    private $id = null;
    /** @var string $name */
    private $name = null;
    /** @var string $joinMode */
    private $joinMode = null;
    /** @var integer $created */
    private $created = null;
    /** @var float $lat */
    private $lat = null;
    /** @var float $lon  */
    private $lon = null;
    /** @var string $urlName */
    private $urlName = null;
    /** @var string $who */
    private $who = null;
    /** @var string $localizedLocation */
    private $localizedLocation = null;
    /** @var string $state */
    private $state = null;
    /** @var string $country */
    private $country = null;
    /** @var string $region */
    private $region = null;
    /** @var string $timezone */
    private $timezone = null;

    /**
     * Group constructor.
     * @param int $id
     * @param string $name
     * @param string $joinMode
     * @param int $create
     * @param float $lat
     * @param float $lon
     * @param string $urlName
     * @param string $who
     * @param string $localizedLocation
     * @param string $state
     * @param string $country
     * @param string $region
     * @param string $timezone
     */
    public function __construct(
        int $id,
        string $name,
        string $joinMode,
        int $created,
        float $lat,
        float $lon,
        string $urlName,
        string $who,
        string $localizedLocation,
        string $state,
        string $country,
        string $region,
        string $timezone
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->joinMode = $joinMode;
        $this->created = $created;
        $this->lat = $lat;
        $this->lon = $lon;
        $this->urlName = $urlName;
        $this->who = $who;
        $this->localizedLocation = $localizedLocation;
        $this->state = $state;
        $this->country = $country;
        $this->region = $region;
        $this->timezone = $timezone;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getJoinMode(): string
    {
        return $this->joinMode;
    }

    /**
     * @return int
     */
    public function getCreated(): int
    {
        return $this->created;
    }

    /**
     * @return float
     */
    public function getLat(): float
    {
        return $this->lat;
    }

    /**
     * @return float
     */
    public function getLon(): float
    {
        return $this->lon;
    }

    /**
     * @return string
     */
    public function getUrlName(): string
    {
        return $this->urlName;
    }

    /**
     * @return string
     */
    public function getWho(): string
    {
        return $this->who;
    }

    /**
     * @return string
     */
    public function getLocalizedLocation(): string
    {
        return $this->localizedLocation;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }

    /**
     * @return string
     */
    public function getTimezone(): string
    {
        return $this->timezone;
    }
}
