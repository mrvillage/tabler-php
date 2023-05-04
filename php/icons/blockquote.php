<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBlockquote extends Icon {
    public static function getName(): string {
        return 'blockquote';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 15h15" />   <path d="M21 19h-15" />   <path d="M15 11h6" />   <path d="M21 7h-6" />   <path d="M9 9h1a1 1 0 1 1 -1 1v-2.5a2 2 0 0 1 2 -2" />   <path d="M3 9h1a1 1 0 1 1 -1 1v-2.5a2 2 0 0 1 2 -2" />
        SVG;
    }
}