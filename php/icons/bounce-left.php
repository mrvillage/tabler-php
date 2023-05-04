<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBounceLeft extends Icon {
    public static function getName(): string {
        return 'bounce-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 15.5c-3 -1 -5.5 -.5 -8 4.5c-.5 -3 -1.5 -5.5 -3 -8" />   <path d="M6 9a2 2 0 1 1 0 -4a2 2 0 0 1 0 4z" />
        SVG;
    }
}