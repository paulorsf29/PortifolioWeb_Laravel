@extends('layouts.app')

@section('title', 'Contato')

@section('content')
<div class="container py-5">
    <h1 class="mb-5 text-center">Contato</h1>
    
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <div class="row text-center g-4">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <i class="bi bi-envelope fs-1 text-primary"></i>
                                <h5 class="mt-3">E-mail</h5>
                                <p class="mb-0">paulorsf229@gmail.com</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-4">
                                <i class="bi bi-telephone fs-1 text-primary"></i>
                                <h5 class="mt-3">Telefone</h5>
                                <p class="mb-0">(91) 98449-4995</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-4">
                                <i class="bi bi-github fs-1 text-primary"></i>
                                <h5 class="mt-3">GitHub</h5>
                                <a href="https://github.com/paulorsf29" class="text-decoration-none" target="_blank">
                                    github.com/paulorsf29
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-4">
                                <i class="bi bi-linkedin fs-1 text-primary"></i>
                                <h5 class="mt-3">LinkedIn</h5>
                                <a href="https://www.linkedin.com/in/paulo-ricardo-fonseca-920037265/" class="text-decoration-none" target="_blank">
                                    /in/paulo-ricardo-fonseca
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="mt-2">
                                <i class="bi bi-geo-alt fs-1 text-primary"></i>
                                <h5 class="mt-3">Localização</h5>
                                <p class="mb-0">Belém, Pará, Brasil</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection