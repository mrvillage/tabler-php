<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconVolume3 extends Tabler\Icon {
    public static function getName(): string {
        return 'volume-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 15h-2a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h2l3.5 -4.5a.8 .8 0 0 1 1.5 .5v14a.8 .8 0 0 1 -1.5 .5l-3.5 -4.5" />   <path d="M16 10l4 4m0 -4l-4 4" />
        SVG;
    }
}