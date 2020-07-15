<?php

declare(strict_types=1);

namespace Meetup\Api\Client\Infrastructure;

use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Token\AccessToken;
use Meetup\Shared\Domain\Config;
use Psr\Http\Message\ResponseInterface;

class OAuthMeetup extends AbstractProvider
{
    const ACCESS_TOKEN_RESOURCE_OWNER_ID = 'id';

    /** @var Config $config */
    private $config = null;
    public function __construct(Config $config)
    {
        $this->config = $config;
        parent::__construct($config->getArrayConfig());
    }

    /**
     * @return string
     */
    public function getBaseAuthorizationUrl()
    {
        return $this->config->getAuthorizationUrl();
    }

    /**
     * @param array $params
     * @return string
     */
    public function getBaseAccessTokenUrl(array $params)
    {
        return $this->config->getAccessToken();
    }

    /**
     * @param AccessToken $token
     * @return string
     */
    public function getResourceOwnerDetailsUrl(AccessToken $token)
    {
        $tail = urldecode(http_build_query(
            [
                'access_token' => $token->getToken()
            ]
        ));

        return sprintf('https://api.meetup.com/2/member/self?%s', $tail);
    }

    /**
     * @return array
     */
    protected function getDefaultScopes()
    {
        // TODO: Implement getDefaultScopes() method.
    }

    /**
     * @param ResponseInterface $response
     * @param array|string $data
     * @throws IdentityProviderException
     */
    protected function checkResponse(ResponseInterface $response, $data): void
    {
        if (!is_array($data)) {
            throw new IdentityProviderException(
                'Invalid Response, a array was expected'
            );
        }

        if (200 !== $response->getStatusCode()) {
            throw new IdentityProviderException(
                'Invalid status code, a 200 code was expected'
            );
        }
    }

    /**
     * @param array $response
     * @param AccessToken $token
     * @return ResourceOwnerInterface
     */
    protected function createResourceOwner(array $response, AccessToken $token)
    {
    }
}
