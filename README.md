# Translations for CKEditor

## What does it do?

This extension provides the translation files for the CKEditor in TYPO3 12

## Installation

Install via composer: 

    composer require "wapplersystems/rt-ckeditor-translations"

Install via Extension Manager
* Install and activate the extension in the Extension manager 
* Flush TYPO3 and PHP Cache
* Clear the processed files in the Install Tool or Maintenance module


## Configure CKEditor

Add this import to your CKEditor configuration file of your template:

    editor:
        config:
            importModules:
              - '@wapplersystems/rt-ckeditor-translations/de.js'


