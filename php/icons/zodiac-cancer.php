<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconZodiacCancer extends Tabler\Icon {
    public static function getName(): string {
        return 'zodiac-cancer';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M18 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M3 12a10 6.5 0 0 1 14 -6.5" />   <path d="M21 12a10 6.5 0 0 1 -14 6.5" />
        SVG;
    }
}