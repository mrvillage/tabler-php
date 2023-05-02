<?php
require_once(__DIR__ . '../Icon.php');

class IconWorldPlus extends Icon {
    public static function getName(): string {
        return 'world-plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.985 12.518a9 9 0 1 0 -8.45 8.466" />   <path d="M3.6 9h16.8" />   <path d="M3.6 15h11.4" />   <path d="M11.5 3a17 17 0 0 0 0 18" />   <path d="M12.5 3a16.998 16.998 0 0 1 2.283 12.157" />   <path d="M16 19h6" />   <path d="M19 16v6" />
        SVG;
    }
}