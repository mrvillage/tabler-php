<?php
require_once('../Icon.php');

class IconArrowRightCircle extends Icon {
    public static function getName(): string {
        return 'arrow-right-circle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 15l3 -3l-3 -3" />   <path d="M5 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M7 12h14" />
        SVG;
    }
}