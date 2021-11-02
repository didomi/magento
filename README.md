# Didomi Consent Management for Magento 2:

`Didomi Consent Management for Magento 2` is the official extension to connect Didomi and Magento 2.

### Documentation:

The documentation for `Didomi Consent Management for Magento 2` is available at:
* [Didomi Developer Documentation](https://developers.didomi.io/)
* [Didomi Helpcenter](https://support.didomi.io)

To configure your consent notice, please go to you company space in the Didomi console:
* [Didomi Console](https://console.didomi.io/)

### Installation:

First, you need to require the extension with the following command:
```
composer require didomi/module-consent-management
```
Then, you have to enable the extension:
```
bin/magento module:enable Didomi_ConsentManagement
```
Run the setup upgrades:
```
bin/magento setup:upgrade
```
And flush Magento 2 caches:
```
bin/magento cache:flush
```

### Requirements:

| Magento                    | PHP             |
| :--------------------------| :--------------:|
| \>= 2.3, \>= 2.4 (CE & EE) | \>= 7.3, >= 7.4 |
