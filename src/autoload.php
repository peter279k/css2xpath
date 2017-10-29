<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'theseer\\css2xpath\\dollarequalrule' => '/DollarEqualRule.php',
                'theseer\\css2xpath\\notrule' => '/NotRule.php',
                'theseer\\css2xpath\\nthchildrule' => '/NthChildRule.php',
                'theseer\\css2xpath\\regexrule' => '/RegexRule.php',
                'theseer\\css2xpath\\ruleinterface' => '/RuleInterface.php',
                'theseer\\css2xpath\\translator' => '/Translator.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    true
);
// @codeCoverageIgnoreEnd
