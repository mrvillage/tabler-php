<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBookmarkOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'bookmark-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3l18 18" />   <path d="M17 17v3l-5 -3l-5 3v-13m1.178 -2.818c.252 -.113 .53 -.176 .822 -.176h6a2 2 0 0 1 2 2v7" />
        SVG;
    }
}