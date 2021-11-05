# Didomi Consent Management for Magento 2:

### Overview:

In a world where consent gathering becomes a priority, you can help your users and customers to gain control over the use of personal data using Didomi solutions. Didomi, in partnership with [Dn’D](https://www.dnd.fr/), a web agency specialized in e-commerce websites and expert with Magento technology, has made the Consent Management extension available on Magento 2 Marketplace.

Consent Management extension offers the possibility to quickly integrate the Didomi Consent Management Platform with your Magento websites in a no-code approach. Our solution is the best way to gather, store and synchronize this consent across countries and platforms, in compliance with regulations such as GDPR and CPRA. Through the Didomi console, you can build and customize your cookie banner, providing transparent information about the way data will be collected and processed. Additionally, Didomi’s CMP is TCF v2-compliant and our analytics technology lets you closely monitor and analyse key metrics, to measure performances with hard numbers.

Using the Consent Management extension, you simply need to paste the Didomi script tag into the configuration panel in your Magento back office to have your Didomi CMP correctly deployed. You’ll also be able to customize the link from where users can display the CMP and natively condition Magento cookies based on consent.

### Account & pricing

A subscription to Didomi Consent Management Platform is expected to use the extension. 

Please consult our [pricing page](https://www.didomi.io/pricing) for more information on pricing and how to sign up.  

### Features

* Build and customize your consent banner through Didomi console
* Include the Didomi CMP on your Magento website in a few seconds
* Condition tags & cookies based on consent, including Google Analytics natively part of Magento

### Documentation:

The documentation for `Didomi Consent Management for Magento 2` is available at:
* [Didomi Developer Documentation](https://developers.didomi.io/)
* [Didomi Helpcenter](https://support.didomi.io/set-up-didomi-for-magento-2)

To configure your consent notice, please go to your company space in the Didomi Console:
* [Didomi Console](https://console.didomi.io/)

### Installation from Github:

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
### Installation from Magento 2 Marketplace:

Please see the official Didomi Consent Management Extension page on the [Magento 2 Marketplace](https://marketplace.magento.com/extensions/content-customizations/personalization-experience-management.html).

### Requirements:

| Magento                    | PHP             |
| :--------------------------| :--------------:|
| \>= 2.3, \>= 2.4 (CE & EE) | \>= 7.3, >= 7.4 |
