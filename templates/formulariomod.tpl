{include file="header.tpl"}
<form action="{$action} {if isset($id)}
  /{$id}
{/if}
  " method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label  class="form-label">Nombre Producto</label>
<input name="nombre" type="text" class="form-control" {if isset($Nombre)}value="{$Nombre}"{/if}>
  </div>
  <div class="mb-3">
    <label  class="form-label">Descripción</label>
    <input name="descripcion" type="text" class="form-control" {if isset($Nombre)}value="{$Descripcion}"{/if}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Marca</label>
    <input name="marca" type="text" class="form-control" {if isset($Nombre)}value="{$Marca}"{/if}>
  </div>
  <div class="mb-3">
    <label  class="form-label">Precio</label>
    <input name="precio" type="number" class="form-control" {if isset($Nombre)}value="{$Precio}"{/if} >
  </div>
  <select class="form-select" name="categoria" aria-label="Default select example" required>
    {foreach from=$Categorias item=$categoria }
      <option {if $categoria->ID==$Categoria}
        selected
      {/if}
      value="{$categoria->ID}">{$categoria->nombre}</option>
    {/foreach}
  </select>
  <div class="mb-3">
    <label  class="form-label">Imagen</label>
    <input name="imagen" type="file" class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
{include file="footer.tpl"}