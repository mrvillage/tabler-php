<?php
require_once(__DIR__ . '/../Icon.php');

class IconBabyBottle extends Icon {
    public static function getName(): string {
        return 'baby-bottle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 10h14" />   <path d="M12 2v2" />   <path d="M12 4a5 5 0 0 1 5 5v11a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2v-11a5 5 0 0 1 5 -5z" />
        SVG;
    }
}