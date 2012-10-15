Spranks RefreshBlockHtmlCache Extension
=====================
This extension refreshes the block HTML cache each time a product is saved.

Facts
-----
- version: 0.1.0
- extension key: Spranks_RefreshBlockHtmlCache
- [extension on GitHub](https://github.com/sprankhub/Spranks_RefreshBlockHtmlCache)
- [direct download link](https://github.com/sprankhub/Spranks_RefreshBlockHtmlCache/zipball/master)

Description
-----------
This extension refreshes the block HTML cache each time a product is saved. Starting with version 1.5, Magento does not do it automatically due to performance reasons. But if you do not have many editors who work on products at the same time and you want to get rid of the message "One or more of the Cache Types are invalidated: Blocks HTML output. Click here to go to Cache Management and refresh cache types.", you should install this extension.

Requirements
------------
- PHP >= 5.2.0
- Mage_Adminhtml
- Mage_Core

Compatibility
-------------
- Magento >= 1.5 (extension is not needed for Magento < 1.5)

Installation Instructions
-------------------------
1. Install the extension via Magento Connect with the key shown above or copy all the files into your document root.
2. Clear the cache.
3. Edit a product, click "Save" and check if the "invalid cache" message is not shown any more.

Support
-------
If you have any issues with this extension, open an issue on [GitHub](https://github.com/company/Spranks_RefreshBlockHtmlCache/issues).

Contribution
------------
Any contribution is highly appreciated. The best way to contribute code is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

Developer
---------
Simon Sprankel
[http://www.simonsprankel.com](http://www.simonsprankel.com)
[@SimonSprankel](https://twitter.com/SimonSprankel)

Licence
-------
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)

Copyright
---------
(c) 2012 Simon Sprankel
