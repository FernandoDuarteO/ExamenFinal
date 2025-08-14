@extends('layouts.panel')
@section('title', 'Post')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Posts</h3>
                        <a href="{{ route('posts.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Post
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-ol"></i> ID</th>
                                <th scope="col"><i class="fas fa-heading"></i> Título</th>
                                <th scope="col"><i class="fas fa-align-left"></i> Contenido</th>
                                <th scope="col"><i class="fas fa-tags"></i> Categoria</th>
                                <th scope="col"><i class="fas fa-calendar-check"></i> Fecha de Registro</th>
                                <th scope="col"><i class="fas fa-cogs"></i> Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>
                                        <span class="badge badge-pill badge-primary"> {{ $post->id }} </span>
                                    </td>
                                    <td>
                                        {{ $post->title }}
                                    </td>

                                    <td>
                                        {{ Str::limit($post->content, 20) }}
                                    </td>

                                    <td class="d-none d-lg-table-cell">
                                        <span class="badge badge-dot mr-4">
                                            <span class="badge badge-success"> {{ $post->category->name }}</span>
                                        </span>
                                    </td>
                                    <td>
                                        {{ $post->created_at }}
                                    </td>
                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('posts.show', $post) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav aria-label="..." class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                        {{ $posts->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
