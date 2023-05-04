<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconEaseOutControlPoint extends \Tabler\Icon {
    public static function getName(): string {
        return 'ease-out-control-point';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 21s10 -16 18 -16" />   <path d="M7 5a2 2 0 1 1 -4 0a2 2 0 0 1 4 0z" />   <path d="M7 5h2" />   <path d="M14 5h-2" />
        SVG;
    }
}