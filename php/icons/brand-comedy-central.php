<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandComedyCentral extends Icon {
    public static function getName(): string {
        return 'brand-comedy-central';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5.343 17.657a8 8 0 1 0 0 -11.314" />   <path d="M13.828 9.172a4 4 0 1 0 0 5.656" />
        SVG;
    }
}