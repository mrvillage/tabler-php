<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBracketsContainEnd extends \Tabler\Icon {
    public static function getName(): string {
        return 'brackets-contain-end';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 4h4v16h-4" />   <path d="M5 16h.01" />   <path d="M9 16h.01" />   <path d="M13 16h.01" />
        SVG;
    }
}