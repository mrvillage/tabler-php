<?php
require_once('../Icon.php');

class IconLayoutBottombarCollapse extends Icon {
    public static function getName(): string {
        return 'layout-bottombar-collapse';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 6v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2z" />   <path d="M20 15h-16" />   <path d="M14 8l-2 2l-2 -2" />
        SVG;
    }
}