<?php
require_once(__DIR__ . '../Icon.php');

class IconRss extends Icon {
    public static function getName(): string {
        return 'rss';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M4 4a16 16 0 0 1 16 16" />   <path d="M4 11a9 9 0 0 1 9 9" />
        SVG;
    }
}