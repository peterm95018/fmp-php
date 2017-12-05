# FileMaker Pro and PHP

This is some work I did to get more knowledgable about how the LiveScan program could take data from a PHP form and insert it into a FMP database. 

Some of the interesting points to remember are that FMP uses layouts; layouts contain fields. A good strategy seems to be that you'd want to create FMP layout that was representative of a PHP form that is accessible via the web. FileMaker manages security via its tools. Ideally, you would have a set of credentials that allow the "web user" to send data in by form (that may be done via "read only" permissions).

Translating desing patterns that I was familiar with in terms of posting data via web forms, I was back to using a model that included a php file for creating the form and a php file for processing and validating and inserting the data and finally some type of header relocation to drop the user on the correct page.

The **addRecord** file uses a very simple HTML based form. What's important to remember is that we need to match up the name of the input element to the same name used by the field in the FMP db. That is "Name" != "name". Many of the examples I saw used an id for the element and didn't include name attribute; be advised.

In a different example, the **livescan_test** file, we get a little more fancy.

