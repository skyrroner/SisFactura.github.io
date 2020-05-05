<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-handshake"></i>
        <p>
            Sistema Facturación
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{ route('producto') }}" class="nav-link">
                <i class="fas fa-shopping-bag nav-icon"></i>
                <p>Productos</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('orden') }}" class="nav-link">
                <i class="fas fa-file-invoice-dollar nav-icon"></i>
                <p>Ordenes</p>
            </a>
        </li>

    </ul>
</li>
