require.config({"config": {
        "jsbuild":{"Magento_Checkout/js/empty-cart.js":"/**\n * Copyright \u00a9 Magento, Inc. All rights reserved.\n * See COPYING.txt for license details.\n */\n\ndefine([\n    'Magento_Customer/js/customer-data'\n], function (customerData) {\n    'use strict';\n\n    var cartData = customerData.get('cart');\n\n    if (cartData().items && cartData().items.length !== 0) {\n        customerData.reload(['cart'], false);\n    }\n});\n"}
}});
