<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandSoundcloud extends Icon {
    public static function getName(): string {
        return 'brand-soundcloud';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 11h1c1.38 0 3 1.274 3 3c0 1.657 -1.5 3 -3 3l-6 0v-10c3 0 4.5 1.5 5 4z" />   <path d="M9 8l0 9" />   <path d="M6 17l0 -7" />   <path d="M3 16l0 -2" />
        SVG;
    }
}