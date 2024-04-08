<x-admin-layout>
    <a href="{{ route('courses.create') }}" class="btn btn-primary mr-3">Create new</a>
    <table class="table flex mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($courses as $key => $course)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $course->title }}</td>
                <td>{{ $course->rubPrice()->amount }}</td>
                <td>
                    -
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-admin-layout>
