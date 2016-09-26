<?php

namespace Scopus\Response;

abstract class BaseLinks
{
    /** @var array */
    protected $links;

    public function __construct(array $links)
    {
        $this->links = [];
        foreach ($links as $link) {
            $this->links[$link['@ref']] = $links['@href'];
        }
    }

    public function getSelf()
    {
        return $this->links['self'];
    }
}