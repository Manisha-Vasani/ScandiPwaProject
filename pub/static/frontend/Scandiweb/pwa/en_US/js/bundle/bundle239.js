require.config({"config": {
        "jsbuild":{"Magento_Customer/js/validation.js":"define([\n    'jquery',\n    'moment',\n    'jquery/validate',\n    'mage/translate'\n], function ($, moment) {\n    'use strict';\n\n    $.validator.addMethod(\n        'validate-dob',\n        function (value) {\n            if (value === '') {\n                return true;\n            }\n\n            return moment(value).isBefore(moment());\n        },\n        $.mage.__('The Date of Birth should not be greater than today.')\n    );\n});\n"}
}});
