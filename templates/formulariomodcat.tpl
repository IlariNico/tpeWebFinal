{include file="header.tpl"}
<form action="{$action}{if isset($id)}
  /{$id}
{/if}" method="POST">
  <div class="mb-3">
    <label  class="form-label">Nombre Cat</label>
    <input name="nombre" type="text" class="form-control" value="{$Nombre}">
  </div>
  <div class="mb-3">
    <label  class="form-label">Descripción</label>
    <input name="descripcion" type="text" class="form-control" value="{$Descripcion}" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
{include file="footer.tpl"}