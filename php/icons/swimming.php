<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSwimming extends Tabler\Icon {
    public static function getName(): string {
        return 'swimming';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 9m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M6 11l4 -2l3.5 3l-1.5 2" />   <path d="M3 16.75a2.4 2.4 0 0 0 1 .25a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 1 -.25" />
        SVG;
    }
}