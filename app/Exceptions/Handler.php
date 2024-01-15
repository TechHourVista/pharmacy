<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;
class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }


    public function render($request, Throwable $th)
    {
        if($th instanceof ValidationException){
            return response()->json([
                'status'=>false,
                'errorMessage'=>$th->getMessage(),
            ]);
        }
        else if ($th instanceof QueryException) {
            return response()->json([
                'status'=>false,
                'errorMessage'=>explode(":" ,$th->getMessage())[2],
            ]);
        } 
        else {
            return response()->json([
                'status'=>false,
                'errorMessage'=>$th->getMessage(),
                'errorClass'=>get_class($th)
            ]);
        }
        
        
    }
}
