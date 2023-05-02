<?php
require_once('../Icon.php');

class IconBoxAlignTopRight extends Icon {
    public static function getName(): string {
        return 'box-align-top-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 11.01h-5a1 1 0 0 1 -1 -1v-5a1 1 0 0 1 1 -1h5a1 1 0 0 1 1 1v5a1 1 0 0 1 -1 1z" />   <path d="M20 15.01v-.01" />   <path d="M20 20.01v-.01" />   <path d="M15 20.01v-.01" />   <path d="M9 20.01v-.01" />   <path d="M9 4.01v-.01" />   <path d="M4 20.01v-.01" />   <path d="M4 15.01v-.01" />   <path d="M4 9.01v-.01" />   <path d="M4 4.01v-.01" />
        SVG;
    }
}