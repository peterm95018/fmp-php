# FileMaker Pro and PHP

This is some work I did to get more knowledgable about how the LiveScan program could take data from a PHP form and insert it into a FMP database. 

Some of the interesting points to remember are that FMP uses layouts; layouts contain fields. A good strategy seems to be that you'd want to create FMP layout that was representative of a PHP form that is accessible via the web. FileMaker manages security via its tools. Ideally, you would have a set of credentials that allow the "web user" to send data in by form (that may be done via "read only" permissions).



