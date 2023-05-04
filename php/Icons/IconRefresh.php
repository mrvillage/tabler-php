<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRefresh extends \Tabler\Icon {
    public static function getName(): string {
        return 'refresh';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />   <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
        SVG;
    }
}