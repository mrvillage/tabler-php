<?php
require_once(__DIR__ . '/../Icon.php');

class IconChecklist extends Icon {
    public static function getName(): string {
        return 'checklist';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8" />   <path d="M14 19l2 2l4 -4" />   <path d="M9 8h4" />   <path d="M9 12h2" />
        SVG;
    }
}