<?php
require_once(__DIR__ . '../Icon.php');

class IconSendOff extends Icon {
    public static function getName(): string {
        return 'send-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 14l2 -2m2 -2l7 -7" />   <path d="M10.718 6.713l10.282 -3.713l-3.715 10.289m-1.063 2.941l-1.722 4.77a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l4.772 -1.723" />   <path d="M3 3l18 18" />
        SVG;
    }
}