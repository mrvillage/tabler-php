<?php
require_once('../Icon.php');

class IconArrowLeftBar extends Icon {
    public static function getName(): string {
        return 'arrow-left-bar';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 12h-18" />   <path d="M6 9l-3 3l3 3" />   <path d="M21 9v6" />
        SVG;
    }
}