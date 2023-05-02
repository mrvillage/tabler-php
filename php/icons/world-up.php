<?php
require_once(__DIR__ . '../Icon.php');

class IconWorldUp extends Icon {
    public static function getName(): string {
        return 'world-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.985 12.52a9 9 0 1 0 -8.451 8.463" />   <path d="M3.6 9h16.8" />   <path d="M3.6 15h10.9" />   <path d="M11.5 3a17 17 0 0 0 0 18" />   <path d="M12.5 3a16.996 16.996 0 0 1 2.391 11.512" />   <path d="M19 22v-6" />   <path d="M22 19l-3 -3l-3 3" />
        SVG;
    }
}