<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMapPinCancel extends \Tabler\Icon {
    public static function getName(): string {
        return 'map-pin-cancel';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />   <path d="M12.463 21.431a1.999 1.999 0 0 1 -1.876 -.531l-4.244 -4.243a8 8 0 1 1 13.594 -4.655" />   <path d="M19 19m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M17 21l4 -4" />
        SVG;
    }
}