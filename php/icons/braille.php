<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBraille extends \Tabler\Icon {
    public static function getName(): string {
        return 'braille';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 5a1 1 0 1 0 2 0a1 1 0 0 0 -2 0z" />   <path d="M7 5a1 1 0 1 0 2 0a1 1 0 0 0 -2 0z" />   <path d="M7 19a1 1 0 1 0 2 0a1 1 0 0 0 -2 0z" />   <path d="M16 12h.01" />   <path d="M8 12h.01" />   <path d="M16 19h.01" />
        SVG;
    }
}