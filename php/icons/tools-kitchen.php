<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconToolsKitchen extends Icon {
    public static function getName(): string {
        return 'tools-kitchen';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 3h8l-1 9h-6z" />   <path d="M7 18h2v3h-2z" />   <path d="M20 3v12h-5c-.023 -3.681 .184 -7.406 5 -12z" />   <path d="M20 15v6h-1v-3" />   <path d="M8 12l0 6" />
        SVG;
    }
}