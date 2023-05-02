<?php
require_once(__DIR__ . '../Icon.php');

class IconPoint extends Icon {
    public static function getName(): string {
        return 'point';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
        SVG;
    }
}