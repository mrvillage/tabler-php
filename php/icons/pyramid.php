<?php
require_once('../Icon.php');

class IconPyramid extends Icon {
    public static function getName(): string {
        return 'pyramid';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 17l9 4l9 -4l-9 -14z" />   <path d="M12 3v18" />
        SVG;
    }
}