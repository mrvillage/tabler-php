<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrowserPlus extends \Tabler\Icon {
    public static function getName(): string {
        return 'browser-plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4m0 1a1 1 0 0 1 1 -1h14a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1 -1z" />   <path d="M4 8h16" />   <path d="M8 4v4" />   <path d="M10 14h4" />   <path d="M12 12v4" />
        SVG;
    }
}