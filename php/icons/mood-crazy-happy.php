<?php
require_once(__DIR__ . '../Icon.php');

class IconMoodCrazyHappy extends Icon {
    public static function getName(): string {
        return 'mood-crazy-happy';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M7 8.5l3 3" />   <path d="M7 11.5l3 -3" />   <path d="M14 8.5l3 3" />   <path d="M14 11.5l3 -3" />   <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />
        SVG;
    }
}