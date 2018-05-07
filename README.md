# HotelExamplePHP
Example of hotel check-in and check-out service

What was done
* docker build is written (look at ./build folder)
* set up of Symfony 3.4 is done
* There is basic authentication (test/test)
* Entities are created
* Migration bundle is used to fill database
* FOSRestBundle is used to route to a controller
* Split to of 2 Bundles was made (CoreBundle was intended to be base bundle for Entities and Services, AppBundle was intended to be used as API bundle)

What is not done:
* Functionality.
* I intended to show you that I'd use 'Pagerfanta' package to show guests list by pages
* I'd use bootstrap + VueJS to show results
* I wanted to show use PHPUnit usage and Codeception usage