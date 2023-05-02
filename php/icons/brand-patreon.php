<?php
require_once('../Icon.php');

class IconBrandPatreon extends Icon {
    public static function getName(): string {
        return 'brand-patreon';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3h3v18h-3z" />   <path d="M15 9.5m-6.5 0a6.5 6.5 0 1 0 13 0a6.5 6.5 0 1 0 -13 0" />
        SVG;
    }
}