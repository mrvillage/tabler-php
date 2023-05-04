<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBadge4k extends \Tabler\Icon {
    public static function getName(): string {
        return 'badge-4k';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M7 9v2a1 1 0 0 0 1 1h1" />   <path d="M10 9v6" />   <path d="M14 9v6" />   <path d="M17 9l-2 3l2 3" />   <path d="M15 12h-1" />
        SVG;
    }
}