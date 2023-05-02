<?php
require_once(__DIR__ . '../Icon.php');

class IconBuildingBridge extends Icon {
    public static function getName(): string {
        return 'building-bridge';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 5l0 14" />   <path d="M18 5l0 14" />   <path d="M2 15l20 0" />   <path d="M3 8a7.5 7.5 0 0 0 3 -2a6.5 6.5 0 0 0 12 0a7.5 7.5 0 0 0 3 2" />   <path d="M12 10l0 5" />
        SVG;
    }
}