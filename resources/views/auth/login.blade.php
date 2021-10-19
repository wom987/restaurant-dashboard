@extends('layouts.withoutNavbar')

@section('content')
    <div class="container">
        <div class="flex max-w-sm mx-auto mt-12 overflow-hidden  bg-white rounded-lg shadow-lg dark:bg-gray-800 lg:max-w-4xl">
            <div class="hidden bg-cover lg:block lg:w-1/2"
                style="background-image:url('{{asset('images/login.jpg')}}')"></div>

            <div class="w-full mt-28 px-6 py-8 md:px-8 lg:w-1/2">
                <h2 class="text-2xl font-semibold text-center text-gray-700 dark:text-white">Restaurante sin nombre</h2>

                <p class="text-xl text-center text-gray-600 dark:text-gray-200">Bienvenido!</p>


                <form method="POST"
                    action="{{ route('login') }}">
                    @csrf
                    <div class="w-full mt-4">
                        <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                            for="LoggingEmailAddress">Email Address</label>
                        <input id="email"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-md dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring form-control @error('email') is-invalid @enderror"
                            type="email"
                            name="email"
                            placeholder="Email Address"
                            aria-label="Email Address"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            autofocus />
                        @error('email')
                            <span class="invalid-feedback"
                                role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="w-full mt-4">
                        <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                            for="loggingPassword">Password</label>
                        <input id="password"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-md dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring  @error('password') is-invalid @enderror"
                            type="password"
                            placeholder="Password"
                            aria-label="Password"
                            value="{{ old('email') }}"
                            required
                            autocomplete="current-password"
                            name="password" />
                        @error('password')
                            <span class="invalid-feedback"
                                role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="flex items-center justify-between mt-4">


                        <button type="submit"
                            class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-gray-700 rounded hover:bg-gray-600 focus:outline-none focus:bg-gray-600 mb-28">
                            Iniciar Session</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-auth.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        // Initialize Firebase
        const firebaseConfig = {
            apiKey: "AIzaSyD1BhMwZIarePkUSW4KlWjIAetJqdXh1KE",
            authDomain: "restaurate-app.firebaseapp.com",
            projectId: "restaurate-app",
            storageBucket: "restaurate-app.appspot.com",
            messagingSenderId: "64781286413",
            appId: "1:64781286413:web:7a5750edf85b65ace76944"
        };
        firebase.initializeApp(config);
        var facebookProvider = new firebase.auth.FacebookAuthProvider();
        var googleProvider = new firebase.auth.GoogleAuthProvider();
        var facebookCallbackLink = '/login/facebook/callback';
        var googleCallbackLink = '/login/google/callback';
        async function socialSignin(provider) {
            var socialProvider = null;
            if (provider == "facebook") {
                socialProvider = facebookProvider;
                document.getElementById('social-login-form').action = facebookCallbackLink;
            } else if (provider == "google") {
                socialProvider = googleProvider;
                document.getElementById('social-login-form').action = googleCallbackLink;
            } else {
                return;
            }
            firebase.auth().signInWithPopup(socialProvider).then(function(result) {
                result.user.getIdToken().then(function(result) {
                    document.getElementById('social-login-tokenId').value = result;
                    document.getElementById('social-login-form').submit();
                });
            }).catch(function(error) {
                // do error handling
                console.log(error);
            });
        }
    </script>

@endsection
