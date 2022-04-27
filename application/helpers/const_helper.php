<?php 

define('REG_EXP_NAME', '^[a-zA-ZÀ-ÿ\. \-\']*$' );

// define('REG_EXP_PHONE', '^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$');
define('REG_EXP_PHONE', '^[+ 0-9]*$');

define('REG_EXP_DATE','^\d{4}-(0?[1-9]|1[012])-(0?[1-9]|[12][0-9]|3[01])$');
// define('REG_EXP_DATE','^\d\d\d\d-(0?[1-9]|1[0-2])-(0?[1-9]|[12][0-9]|3[01])?$');