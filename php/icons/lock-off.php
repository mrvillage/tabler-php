<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLockOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'lock-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 11h2a2 2 0 0 1 2 2v2m0 4a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h4" />   <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />   <path d="M8 11v-3m.719 -3.289a4 4 0 0 1 7.281 2.289v4" />   <path d="M3 3l18 18" />
        SVG;
    }
}