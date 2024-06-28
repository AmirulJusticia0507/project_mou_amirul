<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">MoU Application</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <!-- Tambahkan menu baru di bawah ini -->
                <li class="nav-item">
                    <a href="{{ route('surat-perjanjian.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Surat Perjanjian</p>
                    </a>
                </li>
                <!-- Akhir tambahan menu baru -->
            </ul>
        </nav>
    </div>
</aside>
