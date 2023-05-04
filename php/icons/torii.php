<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTorii extends Tabler\Icon {
    public static function getName(): string {
        return 'torii';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4c5.333 1.333 10.667 1.333 16 0" />   <path d="M4 8h16" />   <path d="M12 5v3" />   <path d="M18 4.5v15.5" />   <path d="M6 4.5v15.5" />
        SVG;
    }
}