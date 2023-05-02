<?php
require_once(__DIR__ . '../Icon.php');

class IconFolderMinus extends Icon {
    public static function getName(): string {
        return 'folder-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 19h-7a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2h4l3 3h7a2 2 0 0 1 2 2v6" />   <path d="M16 19h6" />
        SVG;
    }
}