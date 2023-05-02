<?php
require_once(__DIR__ . '/../Icon.php');

class IconEaseOut extends Icon {
    public static function getName(): string {
        return 'ease-out';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 20s10 -16 18 -16" />
        SVG;
    }
}