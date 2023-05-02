<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandMailgun extends Icon {
    public static function getName(): string {
        return 'brand-mailgun';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 12a2 2 0 1 0 4 0a9 9 0 1 0 -2.987 6.697" />   <path d="M12 12m-5 0a5 5 0 1 0 10 0a5 5 0 1 0 -10 0" />   <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
        SVG;
    }
}