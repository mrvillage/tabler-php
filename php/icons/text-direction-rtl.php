<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTextDirectionRtl extends \Tabler\Icon {
    public static function getName(): string {
        return 'text-direction-rtl';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 4h-6.5a3.5 3.5 0 0 0 0 7h.5" />   <path d="M14 15v-11" />   <path d="M10 15v-11" />   <path d="M5 19h14" />   <path d="M7 21l-2 -2l2 -2" />
        SVG;
    }
}