<?php
require_once(__DIR__ . '../Icon.php');

class IconWorldShare extends Icon {
    public static function getName(): string {
        return 'world-share';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.94 13.045a9 9 0 1 0 -8.953 7.955" />   <path d="M3.6 9h16.8" />   <path d="M3.6 15h9.4" />   <path d="M11.5 3a17 17 0 0 0 0 18" />   <path d="M12.5 3a16.991 16.991 0 0 1 2.529 10.294" />   <path d="M16 22l5 -5" />   <path d="M21 21.5v-4.5h-4.5" />
        SVG;
    }
}