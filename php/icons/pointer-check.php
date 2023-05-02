<?php
require_once(__DIR__ . '../Icon.php');

class IconPointerCheck extends Icon {
    public static function getName(): string {
        return 'pointer-check';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17.487 14.93l-2.709 -2.708l3.113 -2.09a1.2 1.2 0 0 0 -.309 -2.228l-13.582 -3.904l3.904 13.563a1.2 1.2 0 0 0 2.228 .308l2.09 -3.093l.785 .785" />   <path d="M15 19l2 2l4 -4" />
        SVG;
    }
}