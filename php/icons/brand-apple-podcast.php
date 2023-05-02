<?php
require_once('../Icon.php');

class IconBrandApplePodcast extends Icon {
    public static function getName(): string {
        return 'brand-apple-podcast';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18.364 18.364a9 9 0 1 0 -12.728 0" />   <path d="M11.766 22h.468a2 2 0 0 0 1.985 -1.752l.5 -4a2 2 0 0 0 -1.985 -2.248h-1.468a2 2 0 0 0 -1.985 2.248l.5 4a2 2 0 0 0 1.985 1.752z" />   <path d="M12 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
        SVG;
    }
}