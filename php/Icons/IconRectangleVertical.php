<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRectangleVertical extends \Tabler\Icon {
    public static function getName(): string {
        return 'rectangle-vertical';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
        SVG;
    }
}