<?php
require_once('../Icon.php');

class IconArrowsShuffle extends Icon {
    public static function getName(): string {
        return 'arrows-shuffle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 4l3 3l-3 3" />   <path d="M18 20l3 -3l-3 -3" />   <path d="M3 7h3a5 5 0 0 1 5 5a5 5 0 0 0 5 5h5" />   <path d="M21 7h-5a4.978 4.978 0 0 0 -3 1m-4 8a4.984 4.984 0 0 1 -3 1h-3" />
        SVG;
    }
}