<?php
require_once('../Icon.php');

class IconBrandUnsplash extends Icon {
    public static function getName(): string {
        return 'brand-unsplash';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 11h5v4h6v-4h5v9h-16zm5 -7h6v4h-6z" />
        SVG;
    }
}