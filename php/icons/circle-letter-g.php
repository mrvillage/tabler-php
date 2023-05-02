<?php
require_once(__DIR__ . '/../Icon.php');

class IconCircleLetterG extends Icon {
    public static function getName(): string {
        return 'circle-letter-g';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M14 8h-2a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2v-4h-1" />
        SVG;
    }
}