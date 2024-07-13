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
            @if (session('status') === 'profile-updated')
            <div class="alert alert-success" role="alert">
                Seus dados foram alterados com sucesso!
              </div>
            @endif
            <div class="card">

            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

              <form method="post" class="needs-validation" action="{{ route('profile.update') }}">
                @csrf
                @method('patch')

                <div class="card-header">
                  <h4>Atualizar perfil</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                      <div class="form-group col-md-6 col-12">

                        <label for="name">Nome</label>

                        <input type="text" id="name" class="form-control" name="name" value="{{ old('name',$user->name)}}" required autofocus autocomplete="name">

                        <div class="invalid-feedback">
                          @if ($errors->has('name'))
                            <code>{{ $errors->first('name') }}</code>
                          @endif
                        </div>
                      </div>

                      <div class="form-group col-md-6 col-12">

                        <label for="nickn">Apelido</label>

                        <input type="text" id="nickn" class="form-control" name="nickn" value="{{ old('nickn',$user->nickn)}}" autofocus autocomplete="nickn">

                        <div class="invalid-feedback">
                          @if ($errors->has('nickn'))
                            <code>{{ $errors->first('nickn') }}</code>
                          @endif
                        </div>
                      </div>

                    </div>

                    <div class="row">
                      <div class="form-group col-md-7 col-12">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email',$user->email) }}" required>

                        <div class="invalid-feedback">
                          @if ($errors->has('email'))
                            <code>{{ $errors->first('email') }}</code>
                          @endif
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
