<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPointerPause extends \Tabler\Icon {
    public static function getName(): string {
        return 'pointer-pause';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15.72 13.163l-.942 -.941l3.113 -2.09a1.2 1.2 0 0 0 -.309 -2.228l-13.582 -3.904l3.904 13.563a1.2 1.2 0 0 0 2.228 .308l2.09 -3.093l.969 .969" />   <path d="M17 17v5" />   <path d="M21 17v5" />
        SVG;
    }
}