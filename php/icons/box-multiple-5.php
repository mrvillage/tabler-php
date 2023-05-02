<?php
require_once('../Icon.php');

class IconBoxMultiple5 extends Icon {
    public static function getName(): string {
        return 'box-multiple-5';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />   <path d="M12 14h2a2 2 0 1 0 0 -4h-2v-4h4" />   <path d="M17 17v2a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
        SVG;
    }
}