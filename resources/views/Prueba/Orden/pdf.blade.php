<div class="card">
    <table class="card-header">
        <tbody>
            <tr>
                <th>Nombre: {{ $ordenxxx->nombre }}</th>
                <th colspan="3" rowspan="4" class="card" style="text-align: center">
                    <h1>
                        <h1>PRUEBA</h1>
                    </h1>
                </th>
            </tr>
            <tr>
                <th>Dirección: {{ $ordenxxx->direccion }}</th>
            </tr>
            <tr>
                <th>Teléfono: {{ $ordenxxx->telefono }}</th>
            </tr>
            <tr>
                <th>Email: {{ $ordenxxx->email }}</th>
            </tr>
        </tbody>
    </table>
    <table class="card-body">
        <thead>
            <tr>
                <td>ID</td>
                <td>PRODUCTO</td>
                <td>CANTIDAD</td>
                <td>COSTO/UNIDAD</td>
                <td>COSTO TOTAL</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($ordenxxx->productos as $producto)
            <tr>
                <th style="text-align: right">{{ $producto->id }}</th>
                <th style="text-align: right">{{ $producto->nombre }}</th>
                <th style="text-align: right">{{ $producto->pivot->cantidad }}</th>
                <th style="text-align: right">{{ $producto->valor }}</th>
                <th style="text-align: right">{{ $producto->pivot->total }}</th>
            </tr>
            @endforeach
        </tbody>
        <tbody>
            <tr>
                <td colspan="3" rowspan="3" style="text-align: right"></td>
                <td style="text-align: right">SUBTOTAL</td>
                <th style="text-align: right">{{ $ordenxxx->valtotal }}</th>
            </tr>
            <tr>
                <td style="text-align: right">IVA(19%)</td>
                <th style="text-align: right">{{ $ordenxxx->valimpuesto }}</th>
            </tr>
            <tr>
                <td style="text-align: right">TOTAL</td>
                <th style="text-align: right">{{ $ordenxxx->valfinal }}</th>
            </tr>
        </tbody>
    </table>

</div>
