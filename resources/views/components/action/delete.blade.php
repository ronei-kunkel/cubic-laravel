<form action="{{ $action }}" method="post">
  @csrf
  @method('DELETE')
  <x-action.button.close/>
</form>
