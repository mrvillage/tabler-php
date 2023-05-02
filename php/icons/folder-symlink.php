<?php
require_once(__DIR__ . '/../Icon.php');

class IconFolderSymlink extends Icon {
    public static function getName(): string {
        return 'folder-symlink';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 21v-4a3 3 0 0 1 3 -3h5" />   <path d="M8 17l3 -3l-3 -3" />   <path d="M3 11v-5a2 2 0 0 1 2 -2h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8" />
        SVG;
    }
}