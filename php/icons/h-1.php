<?php
require_once('../Icon.php');

class IconH1 extends Icon {
    public static function getName(): string {
        return 'h-1';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 18v-8l-2 2" />   <path d="M4 6v12" />   <path d="M12 6v12" />   <path d="M11 18h2" />   <path d="M3 18h2" />   <path d="M4 12h8" />   <path d="M3 6h2" />   <path d="M11 6h2" />
        SVG;
    }
}