@extends('comum.index')
@section('content')
<div class="g-pa-20">
    <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">Usuario</h1>
    <div class="g-mb-80">
        <form action="{{ route('usuarios.store')}}" method="POST">
            {{ csrf_field() }}
           
           <!--Name-->
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="name" name="name" >
            </div>
            <!--Name-->

            <!--Email-->
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="email" name="email" >
            </div>
            <!--Email--> 
            <!--Genero-->
            <div class="form-group">
                <label for="inputGenero">Genero</label>
                <input type="text" class="form-control" id="gender" name="gender" >
            </div>
            <!--Genero-->
            <!--Aniversario-->
            <div class="form-group">
                <label for="inputAniversario">Aniversario</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate" >
            </div>
            <!--Aniversario-->
            <!--Telefone-->
            <div class="form-group">
                <label for="inputPhone">Telefone</label>
                <input type="text" class="form-control" id="phone" name="phone" >
            </div>
            <!--Telefone-->
            <!--Senha-->
            <div class="form-group">
                <label for="inputPassword">Senha</label>
                <input type="password" class="form-control" id="password" name="password" >
            </div>
            <!--Senha-->

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection