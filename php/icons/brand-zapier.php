<?php
require_once('../Icon.php');

class IconBrandZapier extends Icon {
    public static function getName(): string {
        return 'brand-zapier';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12h6" />   <path d="M21 12h-6" />   <path d="M12 3v6" />   <path d="M12 15v6" />   <path d="M5.636 5.636l4.243 4.243" />   <path d="M18.364 18.364l-4.243 -4.243" />   <path d="M18.364 5.636l-4.243 4.243" />   <path d="M9.879 14.121l-4.243 4.243" />
        SVG;
    }
}