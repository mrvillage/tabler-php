<?php
require_once(__DIR__ . '../Icon.php');

class IconX extends Icon {
    public static function getName(): string {
        return 'x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 6l-12 12" />   <path d="M6 6l12 12" />
        SVG;
    }
}