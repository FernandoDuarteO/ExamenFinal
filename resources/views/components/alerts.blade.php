@switch(true)
    @case(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: '{{ session('success') }}',
                showConfirmButton: true,
            });
        </script>
    @break

    @case(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops... Algo Salio Mal',
                text: '{{ session('error') }}',
                showConfirmButton: true,
            });
        </script>
    @break

    @case(session('deleted'))
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Borrado',
                text: '{{ session('deleted') }}',
                showConfirmButton: true,
            });
        </script>
    @break

    @case(session('released'))
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Liberardo!',
                text: '{{ session('released') }}',
                showConfirmButton: true,
            });
        </script>
    @break

    @case(session('updated'))
        <script>
            Swal.fire({
                icon: 'info',
                title: 'Actualizado',
                text: '{{ session('updated') }}',
                showConfirmButton: true,
            });
        </script>
    @break

    @case(session('warning'))
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Advertencia',
                text: '{{ session('warning') }}',
                showConfirmButton: true,
            });
        </script>
    @break
@endswitch

@if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops... Algo Salio Mal',
            html: `
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>`,
            showConfirmButton: true,
        });
    </script>
@endif
