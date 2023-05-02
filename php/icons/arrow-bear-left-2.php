<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowBearLeft2 extends Icon {
    public static function getName(): string {
        return 'arrow-bear-left-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 3h-5v5" />   <path d="M4 3l7.536 7.536a5 5 0 0 1 1.464 3.534v6.93" />   <path d="M20 5l-4.5 4.5" />
        SVG;
    }
}