/**
     * Send the post-authentication response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, Authenticatable $user)
    {
        if (Authy::getProvider()->isEnabled($user)) {
            return $this->logoutAndRedirectToTokenScreen($request, $user);
        }

        return redirect()->intended($this->redirectPath());
    }
    
    /**
     * Generate a redirect response to the two-factor token screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @return \Illuminate\Http\Response
     */
    protected function logoutAndRedirectToTokenScreen(Request $request, Authenticatable $user)
    {
        // Uncomment this line for Laravel 5.2+
        //auth($this->getGuard())->logout();

        // Uncomment this line for Laravel 5.1
        // auth()->logout();

        $request->session()->put('authy:auth:id', $user->id);

        return redirect(url('auth/token'));
    }

    /**
     * Show two-factor authentication page
     *
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function getToken()
    {
        return session('authy:auth:id') ? view('auth.token') : redirect(url('login'));
    }

    /**
     * Verify the two-factor authentication token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postToken(Request $request)
    {
        $this->validate($request, ['token' => 'required']);
        if (! session('authy:auth:id')) {
            return redirect(url('login'));
        }

        // Uncomment these lines for use in Laravel 5.2+ 
        //$guard = config('auth.defaults.guard');
        //$provider = config('auth.guards.' . $guard . '.provider');
        //$model = config('auth.providers.' . $provider . '.model');

        // Uncomment the line below for use in Laravel 5.1
        // $model = config('auth.model');

        $user = (new $model)->findOrFail(
            $request->session()->pull('authy:auth:id')
        );

        if (Authy::getProvider()->tokenIsValid($user, $request->token)) {
            // Uncomment this line for Laravel 5.2+
            //auth($this->getGuard())->login($user);

            // Uncomment this line for Laravel 5.1
	        //auth()->login($user);

            return redirect()->intended($this->redirectPath());
        } else {
            return redirect(url('login'))->withErrors('Invalid two-factor authentication token provided!');
        }
    } 
           