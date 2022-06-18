@csrf
<textarea name="body" id="body" cols="30" rows="10" placeholder="Comentário">{{$comment->body ?? old('body')}}</textarea>
<label for="visible" class="">Visible</label>
<input type="checkbox" name="visible" id="visible" 
    @if(isset($comment) && $comment->visible)
        checked="checked"
    @endif
>
<button type="submit" >Enviar</button>