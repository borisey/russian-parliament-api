<?php

namespace Borisey\RussianParliamentApi;

class BaseRequest
{
    protected function getRequestUrl($parliament, $type, $lawNumber = false, $searchMode = false, $stage = false)
    {
        return 'http://api.duma.gov.ru/api/' . $parliament->token
            . "/{$type}.json?app_token=" . $parliament->appToken
            . (($lawNumber) ? "&number=" . $lawNumber : '')
            . (($searchMode) ? '&search_mode=' . $searchMode : '')
            . (($stage) ? '&stage=' . $stage : '');
    }

    protected function getContents($url)
    {
        return file_get_contents($url);
    }
}