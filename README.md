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

How to run

1. go to ./build folder
2. run: docker-compose up -d
3. go to container: docker exec -u 0 -it test_php bash
4. run: composer update
5. go out of docker by pressing: CTRL+P and then CTRL+Q
6. correct permissions: sudo chmod 777 -R ./test/var

Now you can go to localhost:8090/app_dev.php to see the app
