<?php
require_once('../Icon.php');

class IconMessage2Question extends Icon {
    public static function getName(): string {
        return 'message-2-question';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 9h8" />   <path d="M8 13h6" />   <path d="M14.5 18.5l-2.5 2.5l-3 -3h-3a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" />   <path d="M19 22v.01" />   <path d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
        SVG;
    }
}