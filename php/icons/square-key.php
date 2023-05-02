<?php
require_once('../Icon.php');

class IconSquareKey extends Icon {
    public static function getName(): string {
        return 'square-key';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M12.5 11.5l-4 4l1.5 1.5" />   <path d="M12 15l-1.5 -1.5" />   <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
        SVG;
    }
}