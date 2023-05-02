<?php
require_once(__DIR__ . '../Icon.php');

class IconNoteOff extends Icon {
    public static function getName(): string {
        return 'note-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 20l3.505 -3.505m2 -2l1.501 -1.501" />   <path d="M17 13h3v-7a2 2 0 0 0 -2 -2h-10m-3.427 .6c-.355 .36 -.573 .853 -.573 1.4v12a2 2 0 0 0 2 2h7v-6c0 -.272 .109 -.519 .285 -.699" />   <path d="M3 3l18 18" />
        SVG;
    }
}