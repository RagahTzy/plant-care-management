protected function redirectTo()
{
    if (auth()->user()->role === 'admin') {
        return '/admin/dashboard';
    }

    return '/dashboard';
}