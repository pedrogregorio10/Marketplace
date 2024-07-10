@extends('admin.layout.master')
@section('title','Profile')
@section('content')
  <!-- Main Content -->
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Meus dados</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Painel de Controle</a></div>
          <div class="breadcrumb-item">Perfil</div>
        </div>
      </div>
      <div class="section-body">
        <div class="row mt-sm-4">
          <div class="col-12 col-md-12 col-lg-7">
            <div class="card">

            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

              <form method="post" class="needs-validation" novalidate="" action="{{ route('profile.update') }}">
                @csrf
                @method('patch')
                <div class="card-header">
                  <h4>Atualizar perfil</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="form-group col-md-6 col-12">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="firstname" value="{{ old('firstname')}}" required autofocus autocomplete="firstname">
                        <div class="invalid-feedback">
                          Please fill in the first name
                        </div>
                      </div>
                      <div class="form-group col-md-6 col-12">
                        <label>Sobrenome</label>
                        <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus autocomplete="lastname">
                        <div class="invalid-feedback">
                          Please fill in the last name
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-7 col-12">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        <div class="invalid-feedback">
                          Please fill in the email
                        </div>
                      </div>

                    </div>

                </div>
                <div class="card-footer text-right">
                  <button class="btn btn-primary">Salvar alteração</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
