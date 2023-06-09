<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowsJoin extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrows-join';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 7h5l3.5 5h9.5" />   <path d="M3 17h5l3.495 -5" />   <path d="M18 15l3 -3l-3 -3" />
        SVG;
    }
}