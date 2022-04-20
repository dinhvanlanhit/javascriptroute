The first step is using composer to install the package and automatically update your composer.json file, you can do this by running:
```bash 
composer require jsroute/javascriptroute 
```
#### Using function route in javascript
```bash 
routes/web.php 
```
```php
<?php
Route::get("list",function(){
    return view("test");
})->name('list');
Route::get("detail/{id}",function(){
    return view("test");
})->name('detail');
Route::get("byid/{id}/{taxcd}",function(){
    return view("test");
})->>name('byid');
```
```bash 
resources/views/test.blade.php
```
```html <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Route JS</title>
    {!!javascriptroute()!!}
</head>
<body>
    <script>
        console.log(route("your name route"));
        //Route::get("list",function(){
        //    return view("test");
        //})->name('list');
        console.log(route("list")); // http://domain.com/list
        ////////////////////////////////////////////////////////////////////////////////
        // Using a routing function that passes parameter
        // Route::get("detail/{id}",function(){
        //    return view("test");
        //})->name('detail');
        console.log(route("detail","abcdef"));// http://domain.com/detail/abcdef
        // Route::get("byid/{id}/{taxcd}",function(){
        //    return view("test");
        //})->>name('byid');
        console.log(route("byid",[1,"123456"])); //http://domain.com/byid/1/123456
    </script>
</body>
</html>
```



