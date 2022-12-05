@extends('layouts.app')
@section('before')
    @include('background')
@endsection        
@section('content')
<div class="container login">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <!-- <script type="module">
        import * as THREE from 'https://unpkg.com/three@0.126.1/build/three.module.js';
        // import * as THREE from 'three';
        import { OrbitControls } from 'https://unpkg.com/three@0.126.1/examples/jsm/controls/OrbitControls.js';
        // import { FlakesTexture } from 'FlakesTexture';
        // import { RGBELoader } from 'RGBELoader';
        let scene, camera, renderer, controls, pointlight, blocktofill;
        function init() {
            blocktofill = document.getElementsByClassName("background");
            scene = new THREE.Scene();

            renderer = new THREE.WebGLRenderer({alpha:true,antialias:true});
            renderer.setSize(window.innerWidth,window.innerHeight);
            document.getElementsByClassName("background")[0].appendChild(renderer.domElement);

            camera = new THREE.PerspectiveCamera(50,window.innerWidth/window.innerHeight,1,1000);
            camera.position.set(0,0,500);
            controls = new OrbitControls(camera, renderer.domElement);
            
            pointlight = new THREE.PointLight(0xffffff,1);
            pointlight.position.set(200,200,200);
            scene.add(pointlight);

            let ballGeo = new THREE.SphereGeometry(100,64,64);
            let ballMat = new THREE.MeshPhysicalMaterial();
            let ballMesh = new THREE.Mesh(ballGeo,ballMat);
            scene.add(ballMesh);

            animate(); // rendering loop
        }
        function animate() {
            controls.update();
            renderer.render(scene, camera);
            requestAnimationFrame(animate);
        }
        init();
    </script> -->
@endsection`
