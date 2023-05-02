<?php
require_once('../Icon.php');

class IconArrowLoopLeft2 extends Icon {
    public static function getName(): string {
        return 'arrow-loop-left-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 21v-6m0 -6v-1a4 4 0 1 1 4 4h-13" />   <path d="M8 16l-4 -4l4 -4" />
        SVG;
    }
}