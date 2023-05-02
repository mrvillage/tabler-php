<?php
require_once(__DIR__ . '../Icon.php');

class IconCe extends Icon {
    public static function getName(): string {
        return 'ce';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 4a8 8 0 1 0 0 16" />   <path d="M20 4a8 8 0 1 0 0 16" />   <path d="M12 12l8 0" />
        SVG;
    }
}