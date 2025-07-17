<?php

use Illuminate\Http\RedirectResponse;

if (!function_exists('getFullName')) {
    function getFullName(): ?string
    {
        if (!auth('user')->check()) {
            return null;
        }
        $user = auth('user')->user();
        return $user->first_name . ' ' . $user->last_name;
    }
}

if (!function_exists('backWithError')) {
    function backWithError(string $error): RedirectResponse
    {
        return back()
            ->withErrors([
                'general' => $error
            ]);
    }
}
if (!function_exists('trimUp')) {
    function trimUp(string $username): ?string
    {
        return strtoupper(trim($username));
    }
}

