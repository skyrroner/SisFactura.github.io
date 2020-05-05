<div class="card" style="width: 99%; margin-left: auto; margin-right: auto;">
    <table class="table table-wrapper" id='detalle'
        style="width: 96%; margin-left: auto; margin-right: auto;margin-top: 1rem;">
        <thead>
            <tr>@if ($detalle)
                <th style="text-align: right">ACCIONES</th>
                @endif
                <th style="text-align: right">ID</th>
                <th style="text-align: right">PRODUCTO</th>
                <th style="text-align: right">CANTIDAD</th>
                <th style="text-align: right">COSTO UNITARIO</th>
                <th style="text-align: right">IMPORTE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ordenxxx->productos as $producto)
            <tr>@if ($detalle)
                <th style="text-align: right">
                    <a class="btn btn-sm btn-primary" href="{{ route('orden.detalle.eliminar', [$ordenxxx->id,$producto->id]) }}">Eliminar</a>
                </th>
                @endif
                <th style="text-align: right">{{ $producto->id }}</th>
                <th style="text-align: right">{{ $producto->nombre }}</th>
                <th style="text-align: right">{{ $producto->pivot->cantidad }}</th>
                <th style="text-align: right">{{ $producto->valor }}</th>
                <th style="text-align: right">{{ $producto->pivot->total }}</th>
            </tr>
            @endforeach
        </tbody>
        <tbody>
            <tr>@if ($detalle)
                <td colspan="4" rowspan="3" style="text-align: right"></td>
                @endif
                @if (!$detalle)
                <td colspan="3" rowspan="3" style="text-align: right"></td>
                @endif
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
