<?php
require_once('../Icon.php');

class IconMessage2Minus extends Icon {
    public static function getName(): string {
        return 'message-2-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 9h8" />   <path d="M8 13h6" />   <path d="M12 21l-3 -3h-3a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8" />   <path d="M16 19h6" />
        SVG;
    }
}