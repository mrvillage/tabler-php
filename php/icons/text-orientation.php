<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTextOrientation extends Icon {
    public static function getName(): string {
        return 'text-orientation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 15l-5 -5c-1.367 -1.367 -1.367 -3.633 0 -5s3.633 -1.367 5 0l5 5" />   <path d="M5.5 11.5l5 -5" />   <path d="M21 12l-9 9" />   <path d="M21 12v4" />   <path d="M21 12h-4" />
        SVG;
    }
}