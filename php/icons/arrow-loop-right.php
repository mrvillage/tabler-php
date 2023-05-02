<?php
require_once('../Icon.php');

class IconArrowLoopRight extends Icon {
    public static function getName(): string {
        return 'arrow-loop-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21v-13a4 4 0 1 0 -4 4h13" />   <path d="M17 16l4 -4l-4 -4" />
        SVG;
    }
}