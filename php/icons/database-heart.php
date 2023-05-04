<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDatabaseHeart extends \Tabler\Icon {
    public static function getName(): string {
        return 'database-heart';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 6c0 1.657 3.582 3 8 3s8 -1.343 8 -3s-3.582 -3 -8 -3s-8 1.343 -8 3" />   <path d="M4 6v6c0 1.453 2.755 2.665 6.414 2.941" />   <path d="M20 11v-5" />   <path d="M4 12v6c0 1.579 3.253 2.873 7.383 2.991" />   <path d="M18 22l3.35 -3.284a2.143 2.143 0 0 0 .005 -3.071a2.242 2.242 0 0 0 -3.129 -.006l-.224 .22l-.223 -.22a2.242 2.242 0 0 0 -3.128 -.006a2.143 2.143 0 0 0 -.006 3.071l3.355 3.296z" />
        SVG;
    }
}