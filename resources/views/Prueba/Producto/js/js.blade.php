
<script>
    var table = '';
    $(document).ready(function() {
        table = $('#productos').DataTable({
            "serverSide": true,
            "lengthMenu": [
                [5, 10, 20, 25, 50, -1],
                [5, 10, 20, 25, 50, "Todos"]
            ],
            "ajax": {
                url: "{{ url('api/prueba/producto') }}",
            },
            "columns": [
                {data:'botonexx',name:'botonexx'},
                {data:'id',name:'productos.id'},
                {data:'nombre',name:'productos.nombre'},
                {data:'descrip',name:'productos.descrip'},
                {data:'valor',name:'productos.valor'},
            ],

        });


    });
</script>
