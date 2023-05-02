<?php
require_once(__DIR__ . '../Icon.php');

class IconBallpen extends Icon {
    public static function getName(): string {
        return 'ballpen';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 6l7 7l-4 4" />   <path d="M5.828 18.172a2.828 2.828 0 0 0 4 0l10.586 -10.586a2 2 0 0 0 0 -2.829l-1.171 -1.171a2 2 0 0 0 -2.829 0l-10.586 10.586a2.828 2.828 0 0 0 0 4z" />   <path d="M4 20l1.768 -1.768" />
        SVG;
    }
}