<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowsRightLeft extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrows-right-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 7l-18 0" />   <path d="M18 10l3 -3l-3 -3" />   <path d="M6 20l-3 -3l3 -3" />   <path d="M3 17l18 0" />
        SVG;
    }
}