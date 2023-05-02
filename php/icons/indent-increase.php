<?php
require_once(__DIR__ . '../Icon.php');

class IconIndentIncrease extends Icon {
    public static function getName(): string {
        return 'indent-increase';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 6l-11 0" />   <path d="M20 12l-7 0" />   <path d="M20 18l-11 0" />   <path d="M4 8l4 4l-4 4" />
        SVG;
    }
}