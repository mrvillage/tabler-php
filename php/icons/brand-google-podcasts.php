<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandGooglePodcasts extends Icon {
    public static function getName(): string {
        return 'brand-google-podcasts';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3v2" />   <path d="M12 19v2" />   <path d="M12 8v8" />   <path d="M8 17v2" />   <path d="M4 11v2" />   <path d="M20 11v2" />   <path d="M8 5v8" />   <path d="M16 7v-2" />   <path d="M16 19v-8" />
        SVG;
    }
}