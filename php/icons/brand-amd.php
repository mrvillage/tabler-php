<?php
require_once('../Icon.php');

class IconBrandAmd extends Icon {
    public static function getName(): string {
        return 'brand-amd';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 16v-7c0 -.566 -.434 -1 -1 -1h-7l-5 -5h17c.566 0 1 .434 1 1v17l-5 -5z" />   <path d="M11.293 20.707l4.707 -4.707h-7a1 1 0 0 1 -1 -1v-7l-4.707 4.707a1 1 0 0 0 -.293 .707v6.586a1 1 0 0 0 1 1h6.586a1 1 0 0 0 .707 -.293z" />
        SVG;
    }
}