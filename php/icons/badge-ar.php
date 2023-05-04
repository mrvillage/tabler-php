<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBadgeAr extends Icon {
    public static function getName(): string {
        return 'badge-ar';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M7 15v-4.5a1.5 1.5 0 0 1 3 0v4.5" />   <path d="M7 13h3" />   <path d="M14 12h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6m3 0l-2 -3" />
        SVG;
    }
}