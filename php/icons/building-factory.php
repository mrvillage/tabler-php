<?php
require_once(__DIR__ . '../Icon.php');

class IconBuildingFactory extends Icon {
    public static function getName(): string {
        return 'building-factory';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 21c1.147 -4.02 1.983 -8.027 2 -12h6c.017 3.973 .853 7.98 2 12" />   <path d="M12.5 13h4.5c.025 2.612 .894 5.296 2 8" />   <path d="M9 5a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1" />   <path d="M3 21l19 0" />
        SVG;
    }
}