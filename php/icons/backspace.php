<?php
require_once('../Icon.php');

class IconBackspace extends Icon {
    public static function getName(): string {
        return 'backspace';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 6a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-11l-5 -5a1.5 1.5 0 0 1 0 -2l5 -5z" />   <path d="M12 10l4 4m0 -4l-4 4" />
        SVG;
    }
}