<?php
require_once(__DIR__ . '../Icon.php');

class IconSchema extends Icon {
    public static function getName(): string {
        return 'schema';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 2h5v4h-5z" />   <path d="M15 10h5v4h-5z" />   <path d="M5 18h5v4h-5z" />   <path d="M5 10h5v4h-5z" />   <path d="M10 12h5" />   <path d="M7.5 6v4" />   <path d="M7.5 14v4" />
        SVG;
    }
}