@extends('comum.index')
@section('content')
<div class="g-pa-20">
    <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">Administrador</h1>
    <div class="g-mb-80">
        <form action="{{ route('admin.store')}}" method="POST">
            {{ csrf_field() }}
            

            
              <select id='categoaria_id' name='categoaria_id' class='form-control'>
    <option value=''>selecione um grupo </option> 
    @foreach($catglist as $catg)

    <option value='{{ $catg->id }}'>{{ $catg->nome }} </option> 


    @endforeach
    </select> 
            
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="name" class="form-control" id="name" name="name" >
            </div>
            
                        <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="Email" class="form-control" id="email" name="Email" >
            </div>
            
                                    <div class="form-group">
                <label for="inputPhone">Telefone</label>
                <input type="text" class="form-control" id="phone" name="Phone" >
            </div>
            
                        <div class="form-group">
                <label for="inputGender">Sexo</label>
                <input type="text" class="form-control" id="gender" name="Gender" >
            </div>
            

            
                        <div class="form-group">
                <label for="inputBirth">Data nascimento</label>
                <input type="date" class="form-control" id="birth" name="Birth" >
            </div>
            
            
                                    <div class="form-group">
                <label for="inputPass">Sexo</label>
                <input type="password" class="form-control" id="pass" name="Pass" >
            </div>
            
            

            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection