<?php
require_once('../Icon.php');

class IconQuestionMark extends Icon {
    public static function getName(): string {
        return 'question-mark';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" />   <path d="M12 19l0 .01" />
        SVG;
    }
}