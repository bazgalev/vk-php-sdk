<?php


namespace VK\Actions;


use VK\Client\VKApiRequest;

class Audio
{
    /**
     * @var VKApiRequest
     */
    private $request;

    /**
     * Video constructor.
     *
     * @param VKApiRequest $request
     */
    public function __construct(VKApiRequest $request)
    {
        $this->request = $request;
    }

    /**
     *
     * @param string $access_token
     * @return mixed
     * @throws \VK\Exceptions\VKApiException
     * @throws \VK\Exceptions\VKClientException
     */
    public function uploadServer($access_token)
    {
        return $this->request->post('audio.getUploadServer', $access_token);
    }

    /**
     * @param $access_token
     * @param array $params
     * - @var integer server: ID of the user or community that owns the video.
     * - @var string audio: Audio ID.
     * - @var string hash
     * @return mixed
     * @throws \VK\Exceptions\VKApiException
     * @throws \VK\Exceptions\VKClientException
     */
    public function save($access_token, array $params)
    {
        return $this->request->post('audio.save', $access_token, [
            'server' => $params['server'],
            'audio' => $params['audio'],
            'hash' => $params['hash'],
        ]);
    }
}