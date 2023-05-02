<?php
require_once('../Icon.php');

class IconRectangleFilled extends Icon {
    public static function getName(): string {
        return 'rectangle-filled';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 4h-14a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h14a3 3 0 0 0 3 -3v-10a3 3 0 0 0 -3 -3z" stroke-width="0" fill="currentColor" />
        SVG;
    }
}