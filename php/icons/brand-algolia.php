<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandAlgolia extends Icon {
    public static function getName(): string {
        return 'brand-algolia';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15.5 11c-.414 -1.477 -1.886 -2.5 -3.5 -2.5a3.47 3.47 0 0 0 -3.5 3.5a3.47 3.47 0 0 0 3.5 3.5c.974 0 1.861 -.357 2.5 -1l4.5 4.5v-15h-7c-4.386 0 -8 3.582 -8 8s3.614 8 8 8a7.577 7.577 0 0 0 2.998 -.614" />
        SVG;
    }
}