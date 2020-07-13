<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

### Interview Exercise

The goal of this exercise is not if the code works but thought process into the solution and handling of failure.   

Steps to Complete Interview Exercise:
1. Make a fork of the Laravel/Laravel repo to your own github account
2. Modify the fork to add a new Artisan console command
3. Make artisan command send a simple POST request to https://atomic.incfile.com/fakepost. Note that this is dummy site and the process failing on the post is acceptable.
4. It is very critical that the request reaches the destination, take all necessary steps to ensure reliable delivery. We want to see what acceptable methods needed to the handle failure.
5. Let's say the post was active and it was not failing, What would be the implementation if there was 100K requests? Bear in mind that the solution should consider what happens if there was a failure in one of the request or multiple requests. if you actually run the code, they will all fail. The solution should be thought out.

Comment which process handle question 4 and which one handles question 5. These are two separate processes.

### Steps to run application
- Run migrations:
```
     php artisan migrate
```

- Execute the following command:

```
     php artisan queue:work --queue=high,default
```

- Send data by command

```
      php artisan send:post --data=['dato 1','dato 2']
```

