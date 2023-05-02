<?php
require_once(__DIR__ . '/../Icon.php');

class IconFocus2 extends Icon {
    public static function getName(): string {
        return 'focus-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <circle cx="12" cy="12" r=".5" fill="currentColor" />   <path d="M12 12m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />   <path d="M12 3l0 2" />   <path d="M3 12l2 0" />   <path d="M12 19l0 2" />   <path d="M19 12l2 0" />
        SVG;
    }
}