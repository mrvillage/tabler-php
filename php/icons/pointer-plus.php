<?php
require_once(__DIR__ . '../Icon.php');

class IconPointerPlus extends Icon {
    public static function getName(): string {
        return 'pointer-plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15.941 13.385l-1.163 -1.163l3.113 -2.09a1.2 1.2 0 0 0 -.309 -2.228l-13.582 -3.904l3.904 13.563a1.2 1.2 0 0 0 2.228 .308l2.09 -3.093l1.23 1.23" />   <path d="M16 19h6" />   <path d="M19 16v6" />
        SVG;
    }
}