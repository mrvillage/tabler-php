<?php
require_once(__DIR__ . '../Icon.php');

class IconPointerPin extends Icon {
    public static function getName(): string {
        return 'pointer-pin';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14.778 12.222l3.113 -2.09a1.2 1.2 0 0 0 -.309 -2.228l-13.582 -3.904l3.904 13.563a1.2 1.2 0 0 0 2.228 .308l2.09 -3.093l.381 .381" />   <path d="M21.121 20.121a3 3 0 1 0 -4.242 0c.418 .419 1.125 1.045 2.121 1.879c1.051 -.89 1.759 -1.516 2.121 -1.879z" />   <path d="M19 18v.01" />
        SVG;
    }
}