<x-app-layout>
    <div class="p-6 gap-4 flex row">
        @foreach($courses as $course)
            <div class="card border-0 col-3 p-3">
                <h1 class="mb-3 title h3">{{$course->title}}</h1>
                <p class="mb-3">{{$course->description}}</p>
                <span class="mb-3">РУБ {{ $course->rubPrice()->amount }}</span>

                <a href="{{ route('courses.single', ['id' => $course->id]) }}" class="btn btn-primary">Read more</a>
            </div>
        @endforeach
    </div>
</x-app-layout>
