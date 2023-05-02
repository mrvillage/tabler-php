<?php
require_once('../Icon.php');

class IconClipboardList extends Icon {
    public static function getName(): string {
        return 'clipboard-list';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />   <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />   <path d="M9 12l.01 0" />   <path d="M13 12l2 0" />   <path d="M9 16l.01 0" />   <path d="M13 16l2 0" />
        SVG;
    }
}