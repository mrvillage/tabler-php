<?php
require_once('../Icon.php');

class IconFolderOff extends Icon {
    public static function getName(): string {
        return 'folder-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h1l3 3h7a2 2 0 0 1 2 2v8m-2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 1.189 -1.829" />   <path d="M3 3l18 18" />
        SVG;
    }
}