Jobs attributes
===============

This plugin extends the fields of items to store jobs attributes such as salary, requirements, experience, and so on.

Since the version 2.2 has been altered the table structure, if you update the plugin you need to do an manualy alter, and recalculate the values of salary hour, to obtain correct results in searches.

Changelog Jobs attributes
=========================

##version 3.1 - 03/08/2012

* Removed salary slider and change it to a free text input
* Upgrade function
* To upgrade the plugin, disable and enable it again

##version 3.0 - 02/05/2012 ( only for osclass >= 2.4 )

* Implemented new DAO (Data Access Object)
* Removed uniform.js
* Fixed slider styles

##version 2.2.1 - 14/09/2011

* New languages: Arabic, German, Persian, Latvian, Russian, Swedish

##version 2.2 - 03/08/2011

* Fixed some string
* Added fields for search by salary hour, no matter what periodSalary is selected at search (HOUR/DAY/.../YEAR)
* Improved search

##version 2.1.1 - 26/07/2011

* Fixed some string
