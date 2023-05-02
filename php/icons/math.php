<?php
require_once(__DIR__ . '../Icon.php');

class IconMath extends Icon {
    public static function getName(): string {
        return 'math';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 5h-7l-4 14l-3 -6h-2" />   <path d="M14 13l6 6" />   <path d="M14 19l6 -6" />
        SVG;
    }
}