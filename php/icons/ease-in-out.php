<?php
require_once(__DIR__ . '/../Icon.php');

class IconEaseInOut extends Icon {
    public static function getName(): string {
        return 'ease-in-out';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 20c8 0 10 -16 18 -16" />
        SVG;
    }
}