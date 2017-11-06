# Slim Framework 3 Skeleton with Parse Server SDK Dependency injection 
![Build Status](https://travis-ci.org/Z-Team-Pro/slim3-parse-sdk.svg?branch=master)
 
This app depends on Slim Framwork3 Skeleton with the integration of Parse Server SDK for PHP.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

All parse server SDK Objects will be used as DI for Slim App So you will use it fast and Easy 
## Install the Application via composer 
    composer create-project zteam/slim-parse-sdk [app name ].
Change app-name with your project name 
## config Parse server
To confing your Parse server you must add parse server configration in settings file 

`$app_id='You-App-ID'; // The ID of the the parse app`

   `$master_key='MasterKey';  //The Master Key of the app`

   `$Server_URL='Server URL'; //Server URL of the parse Server`
   
Then you can use parse server in ypur project like this

   `new_object= new $this->ParseObject('class_name');`
  
   `new_Query= new $this->ParseQuery('class_name');`
   
To run the application in development, you can also run this command. 

	 composer  start

Run this command to run the test suite

	 composer test

That's it! Now go build something cool.
