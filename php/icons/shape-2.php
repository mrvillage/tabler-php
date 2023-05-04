<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconShape2 extends Tabler\Icon {
    public static function getName(): string {
        return 'shape-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M5 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M6.5 17.5l11 -11m-12.5 .5v10m14 -10v10" />
        SVG;
    }
}