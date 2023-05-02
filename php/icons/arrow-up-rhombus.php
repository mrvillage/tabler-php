<?php
require_once('../Icon.php');

class IconArrowUpRhombus extends Icon {
    public static function getName(): string {
        return 'arrow-up-rhombus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 16v-13" />   <path d="M15 6l-3 -3l-3 3" />   <path d="M14.5 18.5l-2.5 2.5l-2.5 -2.5l2.5 -2.5z" />
        SVG;
    }
}