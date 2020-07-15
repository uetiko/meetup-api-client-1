<?php

declare(strict_types=1);

namespace Meetup\Api\Events\Domain;


class Venue
{
    /** @var integer $id */
    private $id = null;
    /** @var string $name */
    private $name = null;
    /** @var boolean $repinned */
    private $repinned = null;
    /** @var string $country  */
    private $country = null;
    /** @var string */
    private $localizedCountryName = null;

    /**
     * Venue constructor.
     * @param int $id
     * @param string $name
     * @param bool $repinned
     * @param string $country
     * @param string $localizedCountryName
     */
    public function __construct(
        int $id,
        string $name,
        bool $repinned,
        string $country,
        string $localizedCountryName
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->repinned = $repinned;
        $this->country = $country;
        $this->localizedCountryName = $localizedCountryName;
    }

    /**
     * @return integer
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
     * @return bool
     */
    public function isRepinned(): bool
    {
        return $this->repinned;
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
    public function getLocalizedCountryName(): string
    {
        return $this->localizedCountryName;
    }
}
