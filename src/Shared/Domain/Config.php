<?php

declare(strict_types=1);

namespace Meetup\Shared\Domain;

use ArrayObject;

final class Config
{
    /** @var ArrayObject $array */
    private $arrayConfig = null;
    /** @var string $clientId */
    private $clientId = null;
    /** @var string $clientSecret */
    private $clientSecret = null;
    /** @var string $redirectUri */
    private $redirectUri = null;
    /** @var string $state */
    private $state = null;
    /** @var string $authorizationUrl */
    private $authorizationUrl = null;
    /** @var string $accessToken */
    private $accessToken = null;

    /**
     * Config constructor.
     * @param string $clientId
     * @param string $clientSecret
     * @param string $redirectUri
     */
    public function __construct(
        string $clientId,
        string $clientSecret,
        string $redirectUri
    ) {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->redirectUri = $redirectUri;
        $this->staticBiuldUrlAccess();
        $this->buildArrayConfig();
    }

    protected function staticBiuldUrlAccess()
    {
        $this->authorizationUrl = 'https://secure.meetup.com/oauth2/authorize';
        $this->accessToken = 'https://secure.meetup.com/oauth2/access';
    }

    protected function buildArrayConfig(): void
    {
        $this->array = new ArrayObject([
            'clientId' => $this->getClientId(),
            'clientSecret' => $this->getClientSecret(),
            'redirectUri' => $this->getRedirectUri(),
            'urlAuthorize' => $this->getAuthorizationUrl(),
            'urlAccessToken' => $this->getAccessToken()
        ]);
    }

    /**
     * @return array
     */
    public function getArrayConfig(): array
    {
        return $this->arrayConfig->getArrayCopy();
    }

    /**
     * @return string
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }

    /**
     * @return string
     */
    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    /**
     * @return string
     */
    public function getRedirectUri(): string
    {
        return $this->redirectUri;
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
    public function getAuthorizationUrl(): string
    {
        return $this->authorizationUrl;
    }

    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }
}
