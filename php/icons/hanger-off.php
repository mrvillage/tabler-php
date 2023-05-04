<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHangerOff extends Icon {
    public static function getName(): string {
        return 'hanger-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 6a2 2 0 1 0 -4 0m6.506 6.506l3.461 1.922a2 2 0 0 1 1.029 1.749v.823m-2 2h-14a2 2 0 0 1 -2 -2v-.823a2 2 0 0 1 1.029 -1.749l6.673 -3.707" />   <path d="M3 3l18 18" />
        SVG;
    }
}