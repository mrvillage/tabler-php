<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTex extends Icon {
    public static function getName(): string {
        return 'tex';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 8v-1h-6v1" />   <path d="M6 15v-8" />   <path d="M21 15l-5 -8" />   <path d="M16 15l5 -8" />   <path d="M14 11h-4v8h4" />   <path d="M10 15h3" />
        SVG;
    }
}