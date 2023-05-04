<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMenu extends Tabler\Icon {
    public static function getName(): string {
        return 'menu';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 8l16 0" />   <path d="M4 16l16 0" />
        SVG;
    }
}