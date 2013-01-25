<?php 

namespace Validator\LIVR\Rules;

class Common {

    public static function required() {

        return function($value) {
            if ( !isset($value) or $value == '' ) {
                return 'REQUIRED';
            }
        };
    }

    public static function not_empty() {

        return function($value) {
            if ( isset($value) and $value == '' ) {
                return 'CANNOT_BE_EMPTY';
            }
        };
    }
}