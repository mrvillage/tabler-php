<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHeadphones extends Tabler\Icon {
    public static function getName(): string {
        return 'headphones';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 13m0 2a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2z" />   <path d="M15 13m0 2a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2z" />   <path d="M4 15v-3a8 8 0 0 1 16 0v3" />
        SVG;
    }
}