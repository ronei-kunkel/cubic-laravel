<form action="{{ $action }}" method="post">
  @csrf
  @method('DELETE')
  <x-button.close/>
</form>
