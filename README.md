# contact-widget

You need to install this extension on your latest version Magento 2.3.4 
For the installation you need follow below commands
php bin/magento setup:upgrade

php bin/magento setup:di:compile

php bin/magento setup:static-content:deploy -f
php bin/magento cache:flush

Once you complete above steps you need to create CMS page and add Solwin contact widget.
Once you save the CMS page go to the page and you will get the result with customization.
You can see new 3 fields on contact widget page
All labels are coming from the store configurations.
Once you fill up the data from frontend you can see on admin those records as well
admin -> Solwin -> Contact
You can do all updates as per your requirement
