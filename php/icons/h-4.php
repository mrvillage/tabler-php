<?php
require_once(__DIR__ . '../Icon.php');

class IconH4 extends Icon {
    public static function getName(): string {
        return 'h-4';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 18v-8l-4 6h5" />   <path d="M4 6v12" />   <path d="M12 6v12" />   <path d="M11 18h2" />   <path d="M3 18h2" />   <path d="M4 12h8" />   <path d="M3 6h2" />   <path d="M11 6h2" />
        SVG;
    }
}