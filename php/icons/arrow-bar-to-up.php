<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowBarToUp extends Icon {
    public static function getName(): string {
        return 'arrow-bar-to-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 10l0 10" />   <path d="M12 10l4 4" />   <path d="M12 10l-4 4" />   <path d="M4 4l16 0" />
        SVG;
    }
}