<?php
namespace Gaufrette\Adapter;

/**
 * interface that adds support of getUrl to adapter.
 *
 * @author David Kolodziej <davidwroclaw@gazeta.pl>
 */
interface GetUrlAware
{
    /**
     * Get absolute url for a stored resource
     *
     * @param $key
     * @param array $options
     * @return string
     */
    public function getUrl($key, array $options = array());
}
