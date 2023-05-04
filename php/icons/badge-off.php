<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBadgeOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'badge-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 7v10l5 3l5 -3m0 -4v-9l-5 3l-2.496 -1.497" />   <path d="M3 3l18 18" />
        SVG;
    }
}