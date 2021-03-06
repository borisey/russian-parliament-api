<?php

namespace Borisey\RussianParliamentApi;

class RegionalOrgans extends BaseRequest
{
    const TYPE = 'regional-organs';

    public function getRegionalOrgans($parliament) {
        $url = $this->getRequestUrl($parliament, self::TYPE);
        $content = $this->getContents($url);

        return json_decode($content,true);
    }
}