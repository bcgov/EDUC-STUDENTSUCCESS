<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        // if (!$this->isHttpException($e)) $e = new \Symfony\Component\HttpKernel\Exception\HttpException(500);
        // return parent::render($request, $e);
        // 404 page when a model is not found
        if ($e instanceof ModelNotFoundException) {
            return response()->view('errors.404', [], 404);
        }

        // custom error message
        if ($e instanceof \ErrorException) {
            return response()->view('errors.500', [], 500);
        } else {
            return parent::render($request, $e);
        }

        return parent::render($request, $e);
    }
}
