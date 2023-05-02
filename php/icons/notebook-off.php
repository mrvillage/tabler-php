<?php
require_once(__DIR__ . '../Icon.php');

class IconNotebookOff extends Icon {
    public static function getName(): string {
        return 'notebook-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h9a2 2 0 0 1 2 2v9m-.179 3.828a2 2 0 0 1 -1.821 1.172h-11a1 1 0 0 1 -1 -1v-14m4 -1v1m0 4v13" />   <path d="M13 8h2" />   <path d="M3 3l18 18" />
        SVG;
    }
}