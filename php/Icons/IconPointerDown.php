<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPointerDown extends \Tabler\Icon {
    public static function getName(): string {
        return 'pointer-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15.992 13.436l-1.214 -1.214l3.113 -2.09a1.2 1.2 0 0 0 -.309 -2.228l-13.582 -3.904l3.904 13.563a1.2 1.2 0 0 0 2.228 .308l2.09 -3.093l1.171 1.171" />   <path d="M19 16v6" />   <path d="M22 19l-3 3l-3 -3" />
        SVG;
    }
}