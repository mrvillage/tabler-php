<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowRotaryLastLeft extends Icon {
    public static function getName(): string {
        return 'arrow-rotary-last-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 15a3 3 0 1 1 0 -6a3 3 0 0 1 0 6z" />   <path d="M15 15v6" />   <path d="M12.5 9.5l-6.5 -6.5" />   <path d="M11 3h-5v5" />
        SVG;
    }
}