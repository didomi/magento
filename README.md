# Didomi Consent Management for Magento 2:

### Overview:

[Gartner estimates that](https://www.didomi.io/gartner/market-guide-2020), by year-end 2023, 75% of the world’s population will have its personal data covered under modern privacy regulations. Spearheaded by data regulation and consumer concern on how their personal data is used, consent collection becomes a priority for companies.

Didomi provides consent & preference management solutions that allow companies to place customer consent at the core of their strategy.

In partnership with [Dn’D](https://www.dnd.fr/), a web agency specialized in e-commerce websites, Didomi has made the Consent Management extension available on the Magento 2 Marketplace.

The extension offers the possibility to quickly integrate the Didomi Consent Management Platform with your Magento websites with a no-code approach. Didomi’s solution is the best way to gather, store and synchronize consent across countries and platforms, in compliance with regulations such as GDPR and CPRA and frameworks such as the TCFv2.

Through the Didomi Console, you can create and customize your consent notice in order to provide transparent information regarding the way your users’ data will be collected and processed. Additionally, Didomi  analytics technology lets you closely monitor and analyse key metrics, to measure performance with hard numbers.

To activate the Consent Management extension, you simply need to paste the Didomi script tag into the configuration panel in your Magento back office to have your Didomi CMP correctly deployed. You’ll also be able to customize the link from where users can display the CMP and natively condition Magento cookies based on consent.

### Account & pricing

A subscription to the Didomi Consent Management Platform is required in order to use the Magento extension.

Please consult our [pricing page](https://www.didomi.io/pricing) for more information on pricing and becoming a client.

### Features

* Build and customize your consent banner through the Didomi Console
* Include the Didomi CMP on your Magento website in a few seconds
* Condition tags & cookies based on consent, including Google Analytics which natively is a part of Magento
* Add a link in Magento footer to consult and modify cookie consent choices

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

Please see the official Didomi Consent Management Extension page on the [Magento 2 Marketplace](https://marketplace.magento.com/didomi-module-consent-management.html).

### Requirements:

| Magento                    | PHP             |
| :--------------------------| :--------------:|
| \>= 2.3, \>= 2.4 (CE & EE) | \>= 7.3, >= 7.4 |
