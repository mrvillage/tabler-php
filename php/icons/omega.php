<?php
require_once(__DIR__ . '../Icon.php');

class IconOmega extends Icon {
    public static function getName(): string {
        return 'omega';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 19h5v-1a7.35 7.35 0 1 1 6 0v1h5" />
        SVG;
    }
}