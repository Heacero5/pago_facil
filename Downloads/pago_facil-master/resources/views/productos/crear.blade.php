<h1>Crear Producto:</h1>
<form action="{{ url("guardarproducto") }}" method="post">
@csrf  
    Nombre: <input type="texto" name="nombre" />
    <br/>
    ValorUnitario: <input type="text" name="valor" />
    <br/>
    <button type="submit">
        Guardar

    </button>
</form>