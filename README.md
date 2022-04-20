The first step is using composer to install the package and automatically update your composer.json file, you can do this by running:
```bash 
composer require jsroute/javascriptroute 
```
#### Using function route in javascript
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
        //Using a routing function that passes parameter
        // route get by id 
        Route::get("list","TestController@ByID")->name('list');
        console.log(route("list"));
        // http://domain.com/list
        Route::get("detail/{id}","TestController@Detail")->name('detail');
        console.log(route("detail","abcdef"));
        // http://domain.com/detail/abcdef
        Route::get("byid/{id}/{taxcd}","TestController@ByID")->name('byid');
        console.log(route("byid",[1,"123456"]));
        // http://domain.com/byid/1/123456
    </script>
</body>
</html>
```



