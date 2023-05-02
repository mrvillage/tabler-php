<?php
require_once(__DIR__ . '../Icon.php');

class IconMessage2Check extends Icon {
    public static function getName(): string {
        return 'message-2-check';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 9h8" />   <path d="M8 13h6" />   <path d="M12 21l-1 -1l-2 -2h-3a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v6" />   <path d="M15 19l2 2l4 -4" />
        SVG;
    }
}