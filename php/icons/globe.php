<?php
require_once(__DIR__ . '../Icon.php');

class IconGlobe extends Icon {
    public static function getName(): string {
        return 'globe';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 10m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />   <path d="M6.75 16a8.015 8.015 0 1 0 9.25 -13" />   <path d="M12 18l0 4" />   <path d="M8 22l8 0" />
        SVG;
    }
}