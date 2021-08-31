<?php

use Lemon\Http\Request;
use Lemon\Http\Response;
use Lemon\Utils\Env;

/**
 * Documentation updating endpoint
 */
function update(Request $request)
{
    validate($request);
    return "Successfully validated.";
}

/**
 * Validates request X-Hub-Signature-256 token
 *
 * @param Lemon\Http\Request $request
 */
function validate(Request $request)
{
    $signature = "sha256=" . hash_hmac("sha256", $request->body, Env::get("UPDATE_TOKEN"));
    if ($signature != $request->header("X-Hub-Signature-256"))
        return Response::raise(400);
}
