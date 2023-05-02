<?php
require_once('../Icon.php');

class IconCodeCircle extends Icon {
    public static function getName(): string {
        return 'code-circle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 14l-2 -2l2 -2" />   <path d="M14 10l2 2l-2 2" />   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
        SVG;
    }
}