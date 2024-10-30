# ThemeTags-Intern-Laravel-
Laravel Routes :

# what is route/routing :

<p>
routing is a way to define/create URL the paths/URL that users can take in your application. It allows you to specify how your application should respond to different HTTP/s requests based on the URL and the HTTP method. All requests are mapped with a route.


how does a route works :

when an user/clint send a http request via browser the web server(apache) forwords the request to the laravel application 
 then the application check the http/s request.

 if the request find the crosspoding route in applicatin this route is responsible to provide services to the user.
 


Route types: 5 types of basic routes in laravel.now discuss about them

1.Basic route:

Basic routing allows define a URL path and specify what response should be returned when that path is accessed. It’s the foundation of routing in Laravel. simple routing ,
For simple applications or straightforward paths where you want to respond to specific requests without much complexity.

2.Default Route files: (2 default route file web.php and api.php)

The first landing page that users see when they open your Laravel application is typically defined by a default route. This is often the home page, and it's usually set up in the routes/web.php


web.php route :
The routes/web.php file defines routes that are for your web interface. 
in this file use the web middleware group, which provides features like session management, CSRF protection, and cookie encryption.
  
  * statefull
  * store data

api.php:
This file is for defining routes that are used for APIs.
Routes here use the api middleware group, which is stateless and does not include session or CSRF protection. it does not store privious resquest data.

* stateless
* does not store data


3.Redirect Routes:

A redirect route is a route that sends users from one URL to another.

a redirection occure under a condiation/reason .

for example :

logging : when you successfully logged in application redicred from login page to dashboard/pereferd page.


4.View Route :

If your route only needs to return a view, you may use the Route::view method. Like the redirect method, this method provides a simple shortcut so that you do not have to define a full route or controller. The view method accepts a URI as its first argument and a view name as its second argument.






  
</p>




<h3># Laravel Suppors many types of Routing 
 1st start with basic routing there are some routes they are call basics route 

</h3>