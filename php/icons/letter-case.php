<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLetterCase extends \Tabler\Icon {
    public static function getName(): string {
        return 'letter-case';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17.5 15.5m-3.5 0a3.5 3.5 0 1 0 7 0a3.5 3.5 0 1 0 -7 0" />   <path d="M3 19v-10.5a3.5 3.5 0 0 1 7 0v10.5" />   <path d="M3 13h7" />   <path d="M21 12v7" />
        SVG;
    }
}