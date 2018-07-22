<?php

/**
 * Interface ParserInterface
 * @author elnikolus <elnikolus@gmail.com>
 */
interface ParserInterface {
    /**
     * @param string $url
     * @param string $tag
     * @return array
     */
    public function process(string $url, string $tag): array;
}