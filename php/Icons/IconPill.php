<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPill extends \Tabler\Icon {
    public static function getName(): string {
        return 'pill';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4.5 12.5l8 -8a4.94 4.94 0 0 1 7 7l-8 8a4.94 4.94 0 0 1 -7 -7" />   <path d="M8.5 8.5l7 7" />
        SVG;
    }
}