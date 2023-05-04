<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFirstAidKit extends Tabler\Icon {
    public static function getName(): string {
        return 'first-aid-kit';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 8v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />   <path d="M4 8m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />   <path d="M10 14h4" />   <path d="M12 12v4" />
        SVG;
    }
}