<?php
require_once(__DIR__ . '../Icon.php');

class IconMoodEmpty extends Icon {
    public static function getName(): string {
        return 'mood-empty';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M9 10l.01 0" />   <path d="M15 10l.01 0" />   <path d="M9 15l6 0" />
        SVG;
    }
}