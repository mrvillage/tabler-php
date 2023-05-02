<?php
require_once('../Icon.php');

class IconBrandHtml5 extends Icon {
    public static function getName(): string {
        return 'brand-html5';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" />   <path d="M15.5 8h-7l.5 4h6l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" />
        SVG;
    }
}