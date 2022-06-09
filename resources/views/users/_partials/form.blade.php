@csrf
<input type="text" name="name" class="text" placeholder="Nome:" value="{{$user->name ?? old('name')}}">
<input type="text" name="email" class="email" placeholder="Email:" value="{{$user->email ?? old('email') }}">
<input type="password" name="password" class="password" placeholder="Senha:">
<button type="submit" >Enviar</button>