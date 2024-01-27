<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
// use Illuminate\Validation\ValidationException;
// use Illuminate\Database\QueryException;
// class Handler extends ExceptionHandler

class Handler extends ExceptionHandler
{

    protected $dontReport = [
        //
    ];

    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];


    public function report(Throwable $exception)
    {
        parent::report($exception);
    }


    public function render($request, Throwable $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            // $statusCode = $exception->getStatusCode();
            // return response()->view('errors.404', compact("exception"), $exception->getStatusCode());
            return back()->withInput();
        }
        
        else{

            return response()->json([
                'status'=>false,
                'errorMessage'=>$exception->getMessage(),
                'errorClass'=>get_class($exception)
            ]);

        }
        return parent::render($request, $exception);
    }
}








//! docs
// Sometimes you may wish to redirect the user to their previous location,
//  such as when a submitted form is invalid. 
// You may do so by using the global back helper function. 
// Since this feature utilizes the session, 
// make sure the route calling the back function is using the web middleware group or
//  has all of the session middleware applied: back()->withInput()