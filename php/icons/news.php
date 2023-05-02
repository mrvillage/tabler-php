<?php
require_once(__DIR__ . '../Icon.php');

class IconNews extends Icon {
    public static function getName(): string {
        return 'news';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />   <path d="M8 8l4 0" />   <path d="M8 12l4 0" />   <path d="M8 16l4 0" />
        SVG;
    }
}